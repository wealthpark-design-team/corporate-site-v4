# WealthPark Corporate Site v4

WealthPark株式会社のコーポレートサイト（WordPress版）

## 概要

サーバー制約により、Next.js版からWordPress密結合型にダウングレードしたプロジェクトです。

- **旧プロジェクト**: `/Users/kaya.matsumoto/projects/wealthpark/web/company` (Next.js + ヘッドレスCMS)
- **本プロジェクト**: `/Users/kaya.matsumoto/projects/wealthpark/web/corporate-site-v4` (WordPress従来型)

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
│   │   ├── themes/        # テーマ（ここで新テーマを開発）
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

参考: Next.js版のデザイン → `/Users/kaya.matsumoto/projects/wealthpark/web/company`

## 便利なコマンド

### WP-CLI（WordPress CLI）

```bash
# WP-CLIコンテナに入る
docker exec -it corporate-v4-wpcli bash

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

### 1. ローカル開発

```bash
# 新テーマを開発
wordpress/wp-content/themes/corporate-site-v4/
```

### 2. ステージング環境（Kinsta dev）へアップロード

**SFTP経由:**
```bash
# Kinsta管理画面 → dev環境 → SFTP/SSH タブから接続情報を取得
# FileZillaやCyberduckで接続して、テーマディレクトリをアップロード
```

**SSH + rsync経由（より高速）:**
```bash
rsync -avz -e "ssh -p 8822" \
  ./wordpress/wp-content/themes/corporate-site-v4/ \
  user@host:/www/xxx/public/wp-content/themes/corporate-site-v4/
```

### 3. dev環境でテーマを有効化

1. dev環境のWordPress管理画面にアクセス
2. **外観** → **テーマ** → 新テーマを有効化
3. 動作確認

### 4. Live環境へプッシュ

**方法A: Kinsta管理画面の「Push to Live」機能**
1. Kinsta管理画面 → dev環境 → **Push to Live**
2. **ファイルのみ**を選択（DBは選択しない）
3. 実行

**方法B: 直接Live環境にアップロード**
- SFTP/SSHでLive環境に直接アップロード

## ⚠️ 重要な注意点

### 画像ファイル（uploads）について

- **ローカル環境にはuploadsディレクトリがありません**（容量削減のため）
- 画像は本番サーバー（https://wealth-park.com/wp-content/uploads/...）から表示されます
- テーマ開発時は、WordPressの標準関数（`wp_get_attachment_image()`, `the_post_thumbnail()`等）を使用してください

### デプロイ時の注意

- ✅ **テーマファイルのみ**をデプロイ
- ❌ **データベースは触らない**（既存のコンテンツを保持）
- ❌ **旧テーマを即座に削除しない**（切り戻しに備える）

### バックアップ

デプロイ前に必ずKinstaで手動バックアップを作成してください。

## 容量

- **開発環境**: 約1.8GB（軽量化セットアップ）
- **完了後**: 削除可能（全容量解放）

```bash
# 開発完了後、環境を完全削除
docker-compose down -v
cd ..
rm -rf corporate-site-v4
```

## Git管理

```bash
# 初回コミット
git add .
git commit -m "Initial setup: WordPress development environment"
git push -u origin main

# テーマ開発後
git add wordpress/wp-content/themes/corporate-site-v4/
git commit -m "Add new theme"
git push
```

## トラブルシューティング

### サイトにアクセスできない

```bash
# コンテナの状態を確認
docker-compose ps

# ログを確認
docker-compose logs wordpress
docker-compose logs db
```

### データベース接続エラー

```bash
# コンテナを再起動
docker-compose restart

# それでもダメなら完全再構築
docker-compose down -v
docker-compose up -d
```

### パーミッションエラー

```bash
# WordPressディレクトリの権限を修正
chmod -R 755 wordpress/
```

## ライセンス

Private - WealthPark株式会社
