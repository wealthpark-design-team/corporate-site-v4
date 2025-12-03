# ローカル開発環境セットアップ

所要時間：約10分

---

## ✅ 前提条件

- Docker Desktop がインストール済み
- GitHubアクセス権限あり（WealthPark組織）

---

## 🚀 セットアップ手順（3ステップ）

### ステップ1: リポジトリをclone

```bash
git clone git@github.com-wealthpark:wealthpark-design-team/corporate-site-v4.git
cd corporate-site-v4
```

---

### ステップ2: データベースダンプをダウンロード

**📥 [Google Driveからダウンロード](https://drive.google.com/file/d/1X5NSWYlyE1yCHhc8e08YJCbOaOP8Ain8/view?usp=drive_link)**

- ファイル名：`wealthparkincltd.sql`
- サイズ：308MB
- 配置場所：プロジェクトルート直下

```bash
# ダウンロード後、以下のようになっていればOK
corporate-site-v4/
├── wealthparkincltd.sql  ← ここに配置
├── docker-compose.yml
├── setup.sh
└── ...
```

---

### ステップ3: セットアップスクリプトを実行

```bash
./setup.sh
```

このスクリプトが自動的に以下を実行します：
- Docker環境チェック
- Dockerコンテナ起動
- データベースインポート（数分かかります）
- セットアップ検証

---

## ✅ 完了！

以下のURLにアクセスできます：

- **フロントエンド**: http://localhost:8080
- **管理画面**: http://localhost:8080/ja/amaterasu18/
  - ログイン情報：本番環境と同じアカウント

---

## 🛠️ トラブルシューティング

### Dockerが起動していない

```bash
# Docker Desktopを起動してから、再度setup.shを実行
./setup.sh
```

### データベースダンプが見つからない

```bash
# wealthparkincltd.sql がプロジェクトルート直下にあるか確認
ls -lh wealthparkincltd.sql

# ない場合は、Google Driveから再ダウンロード
```

### ポート8080が既に使用中

```bash
# docker-compose.yml の 8080 を別のポート（例：8081）に変更
# 36行目: - "8081:80"

# 再起動
docker-compose down
docker-compose up -d
```

### その他の問題

README.mdの「トラブルシューティング」セクション（531行目〜）を参照するか、
@kaya.matsumoto に連絡してください。

---

## 📚 詳細情報

プロジェクトの詳細や開発方針については、[README.md](./README.md) を参照してください。
