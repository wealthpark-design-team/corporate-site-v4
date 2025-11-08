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

### セットアップ

すでにセットアップ済みです。以下のコマンドで起動できます：

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

## テーマ開発

### 現在のテーマ

- `wordpress/wp-content/themes/wp-next-landing-page/` - 本番で稼働中のテーマ

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
  ./wordpress/wp-content/themes/corporate-site-v4/ \
  ユーザー名@ホスト名:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v4/

# 例:
rsync -avz -e "ssh -p 8822" \
  ./wordpress/wp-content/themes/corporate-site-v4/ \
  wealthpark@xxx.kinsta.cloud:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v4/
```

---

### ステップ4: dev環境で動作確認

1. **dev環境のWordPress管理画面にアクセス**
   - URL: Kinsta管理画面の「情報」タブに記載
   - 本番環境と同じ管理者アカウントでログイン

2. **テーマを有効化**
   - 管理画面 → **外観** → **テーマ**
   - `corporate-site-v4` を見つけて **有効化**

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
  ./wordpress/wp-content/themes/corporate-site-v4/ \
  ユーザー名@ホスト名:/www/wealthparkincltd_xxx/public/wp-content/themes/corporate-site-v4/
```

---

### ステップ6: 本番環境で動作確認

1. **本番環境のWordPress管理画面にアクセス**
   - https://wealth-park.com/wp-admin

2. **テーマを有効化**
   - 管理画面 → **外観** → **テーマ**
   - `corporate-site-v4` を **有効化**

3. **フロントエンドで最終確認**
   - https://wealth-park.com にアクセス
   - 以下を確認：
     - ✅ トップページが正常に表示される
     - ✅ 全ページのレイアウトが正しい
     - ✅ 画像が表示される（本番のuploadsから読み込み）
     - ✅ フォームが動作する
     - ✅ 多言語切り替えが動作する

4. **問題がある場合の切り戻し**
   - 管理画面 → **外観** → **テーマ**
   - 旧テーマ（`wp-next-landing-page`）を **有効化**
   - 即座に元の状態に戻ります

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
