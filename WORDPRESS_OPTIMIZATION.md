# WordPress パフォーマンス最適化・リファクタリング

このドキュメントでは、WealthPark コーポレートサイトのWordPress環境における、パフォーマンス改善およびリファクタリングの課題・対策をまとめています。

**最終更新**: 2025-11-25

---

## 📊 現状の概要

### データベース規模

```
総データ量: 472 MB
主要テーブル:
├── postmeta: 197 MB（436,590行 → 29,921行に削減）
├── posts: 158 MB（40,810行 → 15,158行に削減）
└── その他: 117 MB
```

### パフォーマンス

```
ローカル環境:
  削減前: 16秒
  削減後: 0.3秒（98%改善）
  原因: 外部通信プラグインのタイムアウト

本番環境（Kinsta）:
  リロード時間: 1-2秒
  理由: 外部通信が正常動作 + Nginxキャッシュ
```

---

## 🚨 発見された課題

### 1. ❌❌❌ 外部通信プラグインのタイムアウト（最重大）

**問題点:**
- ローカル環境で外部通信を行うプラグインがタイムアウトを起こす
- 各プラグインが5-7秒ずつタイムアウト待ちを行う
- 合計で約16秒の遅延が発生

**該当プラグイン:**
- **Jetpack**: WordPress.comとの通信（約5秒タイムアウト）
- **Wordfence**: 脅威データベースとの通信（約7秒タイムアウト）
- **Akismet**: スパムチェックAPI（約3秒タイムアウト）
- **Wordfence Login Security**: Wordfenceと同様

**影響:**
- ページリロード時間: 16秒 → 開発効率の著しい低下

**対策済み:**
```bash
# ローカル環境でのみ無効化
docker exec corporate-v4-wpcli wp plugin deactivate \
  jetpack wordfence akismet wordfence-login-security \
  --allow-root
```

**効果:**
- リロード時間: **16秒 → 0.3秒**（98%改善）

**重要:**
- 本番環境ではこれらのプラグインは**必要**
- 外部通信が正常に動作するため、タイムアウトは発生しない
- ローカル環境でのみ無効化すること

---

### 2. ❌ Flamingoプラグインのデータ肥大化（重大）

**問題点:**
- Contact Form 7のアドオンプラグイン「Flamingo」が大量のフォーム送信履歴を保存
- flamingo_inbound: 4,284件（3年前のデータ）
- flamingo_contact: 518件
- 関連postmeta: 約40,000行

**影響:**
- データベース容量の圧迫
- クエリパフォーマンスの低下

**推奨対策:**
```
1. 本番環境での確認:
   - Flamingo管理画面で最新データを確認
   - 2022年10月以降にデータがあるか確認

2. データの削除（慎重に検討）:
   - 古いフォーム送信履歴は削除検討
   - 必要な期間のみ保持（例：直近1年）
   - 削除前に必ずバックアップ

3. 今後の運用:
   - Flamingoの必要性を再検討
   - 不要なら無効化してメール送信のみに
   - 必要なら定期的な古いデータ削除
```

**SQL例（実行前にバックアップ必須）:**
```sql
-- 1年以上前のflamingo_inbound削除
DELETE FROM wp_posts
WHERE post_type='flamingo_inbound'
AND post_date < DATE_SUB(NOW(), INTERVAL 1 YEAR);

-- 孤立したpostmeta削除
DELETE FROM wp_postmeta
WHERE post_id NOT IN (SELECT ID FROM wp_posts);
```

---

### 3. ⚠️ リビジョンの蓄積（中程度）

**問題点:**
- WordPress標準のリビジョン機能で投稿履歴が大量保存
- 公開記事数に対してDBが肥大化

**推奨対策:**
```
1. リビジョン数の制限:
   wp-config.php に追加:
   define('WP_POST_REVISIONS', 5); // 最大5件まで

2. 古いリビジョンの削除:
   DELETE FROM wp_posts WHERE post_type = 'revision';

3. プラグイン検討:
   - WP-Optimize（自動クリーンアップ）
```

---

### 4. ⚠️ 不要なカスタム投稿タイプの蓄積（中程度）

**問題点:**
- 開発・テストに不要な大量のカスタム投稿タイプ

**現在の投稿数（ローカル環境）:**
```
wealthpark: 283件
nav_menu_item: 126件
page: 110件
その他多数
```

**推奨対策:**
```
開発環境のみ:
  - 各投稿タイプを直近30-60件に削減
  - テストに必要な最小限のデータのみ保持

本番環境:
  - 不要な投稿タイプの削除検討
  - 定期的なデータクリーンアップ
```

---

### 5. ⚠️ 自動読み込みデータの肥大化（中程度）

**問題点:**
- autoload='yes' のoptionsが420 KB（改善後195 KB）
- WordPress起動時に毎回全データを読み込む

**対策済み:**
- ✅ トランジェント削除（331個削除）
- ✅ 420 KB → 195 KB に削減（54%改善）

**今後の運用:**
```
定期メンテナンス:
  docker exec corporate-v4-wpcli wp transient delete-all --allow-root

頻度: 月1回程度
```

---

### 6. ℹ️ attachment（メディア）レコードの残存（参考情報）

**問題点:**
- 実ファイルは削除済み（3個のみ、12KB）
- DBレコードは4,549件残存
- 不整合によるデータベース容量の無駄

**対策済み:**
- ローカル環境でattachmentレコード削除
- functions.phpで本番画像URLを参照（正常動作）

**効果:**
- posts: 5,355件 → 806件（85%削減）

---

### 7. ℹ️ データベース規模について（参考情報）

**調査結果:**
- データベースを98%削減してもパフォーマンス改善なし
- 真の原因は外部通信プラグインのタイムアウトだった

**実施したデータベース削減:**
- revision: 9,534件削除
- attachment: 4,549件削除
- flamingo: 4,802件削除
- news, wealthpark等を60件に削減
- 合計: 436,590行 → 7,016行（98.4%削減）

**結論:**
- データベース規模自体はパフォーマンスの主要因ではない
- 外部通信プラグインを無効化することで劇的改善
- ただし、データベース削減は容量節約・保守性向上に有効

---

## 📋 実施済みの最適化

### ローカル環境での対策（完了）

```
1. ✅ 外部通信プラグイン無効化（最重要）
   - jetpack, wordfence, akismet, wordfence-login-security
   - 効果: 16秒 → 0.3秒（98%改善）

2. ✅ その他プラグイン無効化
   - debug-bar, stream, intercom, check-email

3. ✅ データベース大幅削減（98.4%削減）
   - revision: 9,534件削除
   - attachment: 4,549件削除
   - flamingo: 4,802件削除
   - news, wealthpark等を60件に削減
   - 最終: 436,590行 → 7,016行（98.4%削減）
   - posts: 40,810件 → 806件（98.0%削減）

4. ✅ トランジェント削除
   - 331個削除、420 KB → 195 KB

5. ✅ functions.php警告修正
   - HTTP_HOST警告の解消
```

**最終結果:**
- リロード時間: 16秒 → **0.3秒**
- データベース: 98%削減
- 開発効率: 劇的に改善

---

## 🎯 今後の改善計画

### 優先度：高

- [ ] 本番環境でFlamingoデータの確認・削除検討
- [ ] リビジョン数の制限設定（wp-config.php）
- [ ] 定期的なトランジェント削除の運用確立

### 優先度：中

- [ ] wealthpark投稿の整理
- [ ] 不要なカスタム投稿タイプの削除
- [ ] 画像最適化プラグインの検討

### 優先度：低（検討）

- [ ] ローカル環境へのRedis導入
- [ ] データベースインデックスの最適化
- [ ] 本番環境でのキャッシュプラグイン導入検討

---

## 📝 ベストプラクティス

### データベースメンテナンス

```bash
# 定期実行推奨（月1回）

# 1. トランジェント削除
wp transient delete-all

# 2. リビジョン削除（慎重に）
wp post delete $(wp post list --post_type='revision' --format=ids) --force

# 3. 孤立したpostmeta削除
wp db query "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT ID FROM wp_posts);"

# 4. テーブル最適化
wp db optimize
```

### 本番デプロイ前のチェックリスト

- [ ] バックアップ作成済み
- [ ] データベース変更の影響範囲確認
- [ ] ローカル環境でテスト完了
- [ ] プラグイン互換性確認

---

## 🔗 関連リンク

- [README.md](./README.md) - プロジェクト概要
- [Kinsta Redis Cache](https://kinsta.com/help/redis-cache/) - 本番環境のキャッシュ設定
- [WordPress Database Optimization](https://wordpress.org/support/article/optimization/)

---

## 📅 更新履歴

- **2025-11-25**: 初版作成
  - Flamingoデータ肥大化の課題を発見
  - ローカル環境でのデータベース削減実施（93%削減達成）
  - トランジェント削除による最適化完了
