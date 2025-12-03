# WealthPark Corporate Site v4

WealthPark株式会社のコーポレートサイト（WordPress版）

## 🚧 現在、移植作業中

**プロジェクトの背景：**
1. 本番サイト（https://wealth-park.com）をリニューアルするため、Next.js版を開発（`/Users/kaya.matsumoto/projects/wealthpark/web/company`）
2. Next.jsは企画に合わないため、WordPress版へダウングレード
3. **現在の作業：Next.js版のデザイン・機能をWordPress版に移植中**

**重要：**
- 参照すべきサイト：Next.js版（`/Users/kaya.matsumoto/projects/wealthpark/web/company`）
- 本番サイト（https://wealth-park.com）は古いサイトのため参照しない

---

## 📚 ドキュメント

- **[WordPress パフォーマンス最適化・リファクタリング](./WORDPRESS_OPTIMIZATION.md)** - パフォーマンス改善、データベース最適化、発見された課題のまとめ

---

## 概要

Next.js版で作成したデザインをWordPressテーマとして再現しています。

## 開発プラン

### 移行方針: 全ページ一括作成 → テーマ切り替え

**参考サイト:**
- Next.js版: `/Users/kaya.matsumoto/projects/wealthpark/web/company`
- このサイトのデザインをWordPressテーマとして再現

**開発フロー:**
```
1. ローカル環境で新テーマ（corporate-site-v4）を完全に作成
   ├── トップページ
   ├── 会社概要ページ
   ├── 採用ページ
   ├── ブログ一覧/詳細
   ├── ニュース一覧/詳細
   ├── 🆕 DXコンサルティングページ（新規追加）
   └── その他全ページ

2. dev環境（Kinsta）で徹底的にテスト
   └── 全ページの動作確認

3. Live環境にテーマをアップロード
   └── この時点では本番サイトに影響なし（旧テーマのまま表示）

4. 管理画面でテーマを切り替え
   └── 外観 → テーマ → corporate-site-v4 → 有効化

5. 問題があれば即座に切り戻し
   └── 外観 → テーマ → wp-next-landing-page → 有効化
```

**メリット:**
- ✅ 本番に影響を与えずに開発・アップロード可能
- ✅ 切り替えは管理画面でボタン1つ（即座に反映）
- ✅ 切り戻しも管理画面でボタン1つ（1秒で完了）
- ✅ 新旧テーマが共存可能

**注意点:**
- データベースは新旧テーマで共通（投稿データ、ユーザー、設定は変わらない）
- 完全にテストしてから本番切り替えを推奨

---

## 技術スタック

- **CMS**: WordPress 6.8.3
- **PHP**: 8.1
- **データベース**: MySQL 8.0
- **開発環境**: Docker Compose
- **本番環境**: Kinsta

## 開発環境

### 必要なツール

- Docker Desktop

### 🚀 初回セットアップ（新規メンバー向け）

#### ステップ1: リポジトリをクローン

```bash
git clone git@github.com-wealthpark:wealthpark/corporate-site-v4.git
cd corporate-site-v4
```

#### ステップ2: データベースダンプをダウンロード

以下のリンクから `wealthparkincltd.sql` をダウンロードし、プロジェクトルートに配置してください：

**📥 ダウンロードリンク:** [Google Drive - wealthparkincltd.sql](https://drive.google.com/file/d/1X5NSWYlyE1yCHhc8e08YJCbOaOP8Ain8/view?usp=drive_link)

```bash
# プロジェクトルートに配置
# corporate-site-v4/wealthparkincltd.sql
```

#### ステップ3: セットアップスクリプトを実行

```bash
./setup.sh
```

このスクリプトが自動的に以下を実行します：
- Docker環境の確認
- データベースダンプの確認
- Dockerコンテナの起動
- データベースのインポート
- セットアップの検証

**完了！** http://localhost:8080 にアクセスできます。

---

### 日常的な使い方（セットアップ済みの場合）

```bash
# コンテナ起動
docker-compose up -d

# コンテナ停止
docker-compose down

# コンテナ削除（データベースも削除）
docker-compose down -v
```

### アクセス

- **フロントエンド**: http://localhost:8080
- **管理画面**: http://localhost:8080/wp-admin
- **データベース**: localhost:3307

### 管理者ログイン情報

本番環境と同じアカウントでログインできます。

## プロジェクト構造

```
corporate-site-v4/
├── docker-compose.yml      # Docker構成
├── wordpress/              # WordPressファイル
│   ├── wp-content/
│   │   ├── themes/        # テーマ（ここで開発）
│   │   ├── plugins/       # プラグイン
│   │   └── uploads/       # ⚠️ 除外済み（本番から表示）
│   ├── wp-config.php      # WordPress設定
│   └── ...
├── .gitignore
└── README.md
```

## 🆕 新規追加ページ

### DXコンサルティングページ

**URL:** `/dx/`（例: http://localhost:8080/ja/dx/）

**概要:**
WealthParkのDXコンサルティング事業を紹介する新規ページ。v4で唯一の大きな新規コンテンツ追加となります。

**実装内容:**
- **テンプレート:** `page_dx.php`
- **CSS:** `dx/css/dx-style.css`
- **JavaScript:** 会社概要ページと同じモーダルウィンドウ機能（`modal-multi.js`）

**ページ構成:**
1. **ヒーローセクション** - 灰色グラデーション背景、キャッチコピー、CTAボタン
2. **3つの特徴** - WealthParkのDXコンサルティングの強み
3. **プロジェクト事例** - Parkブログの「DXコンサルティングサービス事例」タグの記事を動的表示
4. **コンサルタント紹介** - 村上朝一氏など、チームメンバーをモーダルウィンドウ付きで表示
5. **採用情報** - DXコンサルタント職の求人情報

**技術仕様:**
- レスポンシブデザイン対応（PC・タブレット・モバイル）
- 会社概要ページと同じヘッダー・フッター・モーダルUI
- プロジェクト事例はWordPressの`park`カスタム投稿タイプから自動取得
- 画像は本番環境から自動読み込み（ローカル環境でも表示）

**WordPress設定:**
- ページID: 47943
- スラッグ: `dx`
- テンプレート: `page_dx.php`（WordPress管理画面で自動選択可能）

**注意事項:**
- 他の既存ページはデザイン修正のみ（コンテンツ変更なし）
- このページが**v4の主要な差分**となります

---

## テーマ開発

### 現在のテーマ状況

| テーマ名 | 状態 | 説明 |
|---------|------|------|
| `wp-next-landing-page` | 本番で稼働中 | 現在のコーポレートサイト（旧テーマ） |
| `corporate-site-v5` | 開発中 | 新デザインのテーマ（v4→v5にリネーム済み） |
| `corporate-site-v4` | 未使用 | 初期テーマ（現在は使用していない） |

### ⚠️ 重要：デプロイとテーマ切り替えの流れ

**このプロジェクトでは、テーマファイルを本番環境にアップロードしても、即座には反映されません。**

#### デプロイの仕組み

```
1. ローカル開発
   └── corporate-site-v5 テーマを編集

2. dev環境にアップロード
   └── テーマファイルをKinstaのdev環境にコピー

3. dev環境でテーマ切り替え（テスト）
   └── 管理画面 → 外観 → テーマ → corporate-site-v5 を有効化

4. Live環境にアップロード
   └── テーマファイルをKinstaのLive環境にコピー
   └── ⚠️ この時点では旧テーマ（wp-next-landing-page）のまま表示される

5. 本番でテーマ切り替え（公開）
   └── 管理画面 → 外観 → テーマ → corporate-site-v5 を有効化
   └── ✅ この瞬間に新デザインが公開される
```

#### メリット

- ✅ 本番環境に影響を与えずにテーマファイルをアップロード可能
- ✅ テーマ切り替えは管理画面でボタン1つ（即座に反映）
- ✅ 問題があれば即座に旧テーマに切り戻し可能（1秒で完了）
- ✅ 新旧テーマが共存するため、段階的なリリースが可能

#### 注意点

- データベースは新旧テーマで共通（投稿データ、ユーザー、設定は変わらない）
- 完全にテストしてから本番切り替えを推奨
- 旧テーマ（wp-next-landing-page）は切り替え後も1ヶ月程度残しておく（切り戻し用）

### 新テーマ作成

```bash
# 新テーマディレクトリを作成
cd wordpress/wp-content/themes
mkdir corporate-site-v4
cd corporate-site-v4

# 必要なファイルを作成
touch style.css index.php functions.php
```

### 画像の扱い方

ローカル環境には `uploads` ディレクトリがありません（容量削減のため）。
画像は本番サーバーから自動的に読み込まれます。

**重要**: テーマ開発時は必ずWordPressの標準関数を使用してください：

```php
// ✅ 良い例: WordPress標準関数を使う
<?php the_post_thumbnail('full'); ?>
<?php echo wp_get_attachment_image($attachment_id, 'large'); ?>

// ❌ 悪い例: パスを直接指定
<img src="/wp-content/uploads/2024/01/image.jpg">
```

**仕組み:**
- `functions.php` で環境を自動判定（localhost判定）
- ローカル環境: 本番サーバーの画像を読み込む
- 本番環境: 通常通り動作（フィルター無効化）

## 便利なコマンド

### WP-CLI（WordPress CLI）

```bash
# プラグイン一覧
docker exec corporate-v4-wpcli wp plugin list --allow-root

# テーマ一覧
docker exec corporate-v4-wpcli wp theme list --allow-root

# テーマを有効化
docker exec corporate-v4-wpcli wp theme activate corporate-site-v4 --allow-root

# データベースバックアップ
docker exec corporate-v4-wpcli wp db export /var/www/html/backup.sql --allow-root
```

### データベース操作

```bash
# MySQLに接続
docker exec -it corporate-v4-db mysql -uwordpress -pwordpress wordpress

# データベースのエクスポート
docker exec corporate-v4-db mysqldump -uwordpress -pwordpress wordpress > backup.sql

# データベースのインポート
docker exec -i corporate-v4-db mysql -uwordpress -pwordpress wordpress < backup.sql
```

## 開発環境の最適化

### パフォーマンス改善のためのプラグイン無効化

**ローカル環境では以下のプラグインを無効化しています：**

開発環境ではパフォーマンス最適化のため、外部通信を行うプラグインをローカル環境でのみ無効化しています。

#### 🚨 必須：外部通信プラグインの無効化（劇的効果）

```bash
# リロード時間: 16秒 → 0.3秒 に改善
docker exec corporate-v4-wpcli wp plugin deactivate \
  jetpack \
  wordfence \
  akismet \
  wordfence-login-security \
  --allow-root
```

**無効化の理由:**
- **jetpack**: WordPress.comとの通信試行 → タイムアウト（約5秒）
- **wordfence**: 外部脅威データベースとの通信 → タイムアウト（約7秒）
- **akismet**: スパムチェックAPI通信 → タイムアウト（約3秒）
- **wordfence-login-security**: Wordfenceと同様の通信

**効果:** ページリロード時間が **16秒 → 0.3秒**（98%改善）

#### 補助：その他の無効化プラグイン

```bash
# 軽量なプラグインの無効化（パフォーマンス改善効果は小）
docker exec corporate-v4-wpcli wp plugin deactivate \
  debug-bar \
  stream \
  intercom \
  check-email \
  --allow-root
```

**無効化したプラグイン:**
- **debug-bar**: 開発用デバッグツール
- **stream**: アクティビティログ記録
- **intercom**: 外部チャットサービス
- **check-email**: メール送信ログ記録

**重要:**
- これらの無効化は**ローカル環境のみ**に適用されます
- 本番環境のプラグイン設定には**一切影響しません**
- テーマファイルには関係ないため、デプロイ対象外です
- **jetpack, wordfence, akismetは本番環境では必要**なため、本番では有効のまま

### その他の最適化

**トランジェント削除（定期メンテナンス）:**
```bash
# 古いキャッシュを削除してパフォーマンス改善
docker exec corporate-v4-wpcli wp transient delete-all --allow-root
```
- 開発環境が重くなった場合に実行
- 不要なキャッシュ（トランジェント）を削除
- autoloadedデータを軽量化（420KB → 195KB程度）

**functions.php の警告修正（完了済み）:**
- `functions.php:619` のHTTP_HOST警告を修正済み
- WP-CLI実行時の警告を削減

### 本番デプロイ時の注意事項

**本番環境では全てのプラグインが有効のまま動作します。**

1. **テーマ切り替え後の確認事項:**
   - すべてのプラグインが正常に動作するか確認
   - 特にセキュリティプラグイン（Wordfence）の動作確認
   - メール送信機能の動作確認（Contact Form 7）

2. **本番でプラグインを無効化する場合:**
   - 本番管理画面から手動で無効化する必要があります
   - ローカルでの無効化は本番に反映されません
   - **推奨**: テーマ切り替え後、不要なプラグインを段階的に無効化

3. **必須プラグイン（本番で必ず有効にする）:**
   - Wordfence（セキュリティ）
   - Contact Form 7（問い合わせフォーム）
   - qtranslate-x（多言語対応）
   - Yoast SEO（SEO最適化）

---

## デプロイフロー

### 前提条件

- Kinsta管理画面へのアクセス権限
- SFTP/SSH接続情報（Kinsta管理画面から取得）

---

### ステップ1: ローカルで開発・テスト

```bash
# テーマファイルを開発
cd wordpress/wp-content/themes/corporate-site-v4/

# ローカル環境で動作確認
# http://localhost:8080 にアクセス
```

**確認項目:**
- ✅ ページが正常に表示される
- ✅ 画像が本番サーバーから読み込まれている
- ✅ レイアウトが崩れていない
- ✅ 多言語切り替えが動作する（/ja, /en）

---

### ステップ2: Git管理

```bash
# テーマファイルをコミット
git add wordpress/wp-content/themes/corporate-site-v4/
git commit -m "Update theme: [変更内容を記載]"
git push
```

---

### ステップ3: dev環境（ステージング）へアップロード

#### 方法A: SFTP経由（GUI推奨）

1. **Kinsta管理画面を開く**
   - https://my.kinsta.com にログイン
   - **WealthPark Inc., Ltd.** → **dev環境** を選択

2. **SFTP接続情報を取得**
   - 左メニュー → **情報** または **SFTP/SSH** タブ
   - 以下の情報をコピー：
     - **ホスト**: `xxx.kinsta.cloud`
     - **ユーザー名**: `wealthpark-dev` など
     - **ポート**: `8822`
     - **パスワード**: 表示 or リセット

3. **FileZilla/Cyberduckで接続**
   - 上記の情報を入力して接続
   - リモートパス: `/www/wealthparkincltd_xxx/public/wp-content/themes/`
   - ローカルの `corporate-site-v4/` フォルダをドラッグ&ドロップ

#### 方法B: SSH + rsync経由（コマンドライン）

```bash
# Kinstaの接続情報を使用（ポート8822を指定）
rsync -avz -e "ssh -p 8822" \
  ./wordpress/wp-content/themes/corporate-site-v5/ \
  ユーザー名@ホスト名:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v5/

# 例:
rsync -avz -e "ssh -p 8822" \
  ./wordpress/wp-content/themes/corporate-site-v5/ \
  wealthpark@xxx.kinsta.cloud:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v5/
```

---

### ステップ4: dev環境で動作確認

1. **dev環境のWordPress管理画面にアクセス**
   - URL: Kinsta管理画面の「情報」タブに記載
   - 本番環境と同じ管理者アカウントでログイン

2. **テーマを有効化**
   - 管理画面 → **外観** → **テーマ**
   - `corporate-site-v5` を見つけて **有効化**

3. **フロントエンドで確認**
   - dev環境のURLにアクセス
   - 以下を確認：
     - ✅ デザインが正しく表示される
     - ✅ 画像が本番サーバーから読み込まれている
     - ✅ リンクが正常に動作する
     - ✅ フォーム送信が動作する（Contact Form等）

4. **関係者に確認依頼**
   - dev環境のURLを共有
   - デザイン・機能の承認を得る

---

### ステップ5: Live環境（本番）へデプロイ

#### ⚠️ デプロイ前の必須作業

1. **Kinstaで手動バックアップを作成**
   - Kinsta管理画面 → **Live環境** → **バックアップ**
   - **今すぐバックアップ** をクリック
   - 完了を待つ（数分かかる場合があります）

#### 方法A: Kinsta「Push to Live」機能（推奨）

1. **Kinsta管理画面を開く**
   - **dev環境** を選択

2. **Push to Live を実行**
   - 上部メニューまたは右上の **「Push to Live」** ボタンをクリック

3. **プッシュ範囲を選択**
   - ✅ **ファイル**: チェックを入れる
   - ❌ **データベース**: **絶対にチェックを入れない**
   - ⚠️ データベースをプッシュすると本番のコンテンツが消えます

4. **実行**
   - **Push to Live** ボタンをクリック
   - 完了を待つ（数分〜10分程度）

#### 方法B: 直接Live環境にアップロード

dev環境と同じ手順で、Live環境のSFTP/SSH情報を使ってアップロード。

```bash
# SFTP経由
# Kinsta管理画面 → Live環境 → SFTP/SSH タブから接続情報を取得
# FileZillaで接続してアップロード

# rsync経由
rsync -avz -e "ssh -p 8822" \
  ./wordpress/wp-content/themes/corporate-site-v5/ \
  ユーザー名@ホスト名:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v5/
```

---

### ステップ6: 本番環境でテーマ切り替え（公開）

⚠️ **重要：この時点でテーマファイルは本番環境にアップロード済みですが、まだ旧テーマ（wp-next-landing-page）が表示されています。**

#### テーマ切り替え手順

1. **本番環境のWordPress管理画面にアクセス**
   - https://wealth-park.com/ja/amaterasu18/（カスタムログインURL）

2. **現在のテーマを確認**
   - 管理画面 → **外観** → **テーマ**
   - 現在：`wp-next-landing-page` が有効（旧テーマ）
   - 確認：`corporate-site-v5` が表示されている（アップロード済み）

3. **新テーマに切り替え**
   - `corporate-site-v5` の **有効化** ボタンをクリック
   - ✅ **この瞬間に新デザインが本番サイトに公開されます**

4. **フロントエンドで最終確認**
   - https://wealth-park.com にアクセス
   - 以下を確認：
     - ✅ トップページが正常に表示される
     - ✅ 全ページのレイアウトが正しい
     - ✅ 画像が表示される（本番のuploadsから読み込み）
     - ✅ フォームが動作する（Contact Form）
     - ✅ 多言語切り替えが動作する（/ja, /en）
     - ✅ DXコンサルティングページが表示される（/ja/dx/）

5. **問題がある場合の切り戻し（即座に可能）**
   - 管理画面 → **外観** → **テーマ**
   - 旧テーマ（`wp-next-landing-page`）の **有効化** ボタンをクリック
   - ✅ **1秒で元の状態に戻ります**

6. **旧テーマの保管**
   - 切り替え成功後も、`wp-next-landing-page` は削除しない
   - 1ヶ月程度は残しておく（緊急時の切り戻し用）
   - 問題なければ、後日削除

---

### ⚠️ デプロイ完了後の注意事項

- **テーマ切り替えは慎重に行う**：平日の日中、アクセスが少ない時間帯を推奨
- **切り替え後は即座に確認**：主要ページを全てチェック
- **問題があれば即切り戻し**：管理画面でボタン1つで戻せます
- **旧テーマは保管**：1ヶ月程度は削除しない

---

## デプロイ時の重要な注意点

### ✅ やるべきこと

- **テーマファイルのみ**をアップロード
- デプロイ前に必ず **Kinstaでバックアップ作成**
- dev環境で十分にテスト
- 本番デプロイ後、すぐに動作確認
- 旧テーマは残しておく（1ヶ月後に削除）

### ❌ やってはいけないこと

- ❌ **データベースをプッシュしない**（コンテンツが消える）
- ❌ **Live環境で直接開発しない**（トラブル時にサイトが落ちる）
- ❌ **旧テーマを即座に削除しない**（切り戻しができなくなる）
- ❌ **バックアップなしでデプロイしない**

### 画像URL自動切り替えの仕組み

`functions.php` に以下のコードが含まれています：

```php
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    add_filter('upload_dir', function($uploads) {
        $uploads['baseurl'] = 'https://wealth-park.com/wp-content/uploads';
        $uploads['url'] = 'https://wealth-park.com/wp-content/uploads' . $uploads['subdir'];
        return $uploads;
    }, 10, 1);
}
```

**動作:**
- **ローカル環境** (`localhost`): 本番サーバーの画像を読み込む
- **本番環境** (`wealth-park.com`): フィルターが無効化され、通常動作

**デプロイ前の修正は不要です。** そのままデプロイしてOKです。

---

## トラブルシューティング

### 管理画面へのアクセス

本番データベースを使用しているため、カスタムログインURLが有効です。

**ローカル環境のログインURL:**
- http://localhost:8080/ja/amaterasu18/

**重要:**
- `/wp-admin` にアクセスすると本番サイトにリダイレクトされます
- 必ず上記のカスタムURLを使用してください
- ログイン情報は本番環境と同じアカウントです

### ローカル環境でサイトにアクセスできない

```bash
# コンテナの状態を確認
docker-compose ps

# ログを確認
docker-compose logs wordpress
docker-compose logs db

# コンテナを再起動
docker-compose restart
```

### 画像が表示されない（ローカル）

本番サーバー（https://wealth-park.com）が稼働しているか確認してください。
ローカル環境は本番サーバーから画像を読み込んでいます。

### 管理画面にアクセスすると本番サイトにリダイレクトされる

`wp-config.php` にローカル環境用のURL設定が必要です（**既に設定済み**）。

```php
// wp-config.php に以下を追加（DB設定の直後）
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');
```

**注意:**
- この設定はローカル環境専用です
- 本番環境にデプロイする際は、この設定を含めないでください
- テーマファイルのみをデプロイすれば問題ありません

### データベース接続エラー

```bash
# コンテナを完全再構築
docker-compose down -v
docker-compose up -d
```

### パーミッションエラー

```bash
# WordPressディレクトリの権限を修正
chmod -R 755 wordpress/
```

### 本番環境で画像が表示されない

1. 画像URLが正しいか確認（ブラウザの開発者ツールで確認）
2. `wp-content/uploads/` ディレクトリの権限を確認
3. Kinstaのサポートに問い合わせ

---

## 容量

- **開発環境**: 約1.8GB（軽量化セットアップ）
- **完了後**: 削除可能（全容量解放）

```bash
# 開発完了後、環境を完全削除
docker-compose down -v
cd ..
rm -rf corporate-site-v4
```

---

## Git管理

```bash
# 日常的な作業
git add wordpress/wp-content/themes/corporate-site-v4/
git commit -m "Update: [変更内容]"
git push

# 新しいブランチで作業する場合
git checkout -b feature/new-design
git add .
git commit -m "Add: new design"
git push -u origin feature/new-design
```

---

## ライセンス

Private - WealthPark株式会社
