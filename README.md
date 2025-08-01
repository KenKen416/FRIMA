# フリマアプリケーション「FRIMA」

このアプリケーションは Laravel を用いたフリーマーケットサービスです。ユーザー登録・ログイン、商品出品・購入、プロフィール管理などの機能を提供します。

---

## 主な機能

- 商品一覧表示（マイリスト切替可能）
- 商品の出品登録／詳細閲覧
- いいね機能（ユニーク制約）
- コメント機能
- 商品購入・配送先変更
- プロフィール編集（画像・住所・建物名含む）
- カテゴリーによる商品分類（多対多）
- バリデーションによる入力制御
- 認証機能（新規登録・ログイン）
---

## 環境構築（Docker 使用）

### 1. リポジトリをクローン
- git clone git@github.com:KenKen416/FRIMA.git
- cd FRIMA

### 2. Docker コンテナをビルド・起動
- docker compose up -d --build
### 3. Composer で依存パッケージをインストール
- docker compose exec php composer install
### 4. .env ファイルを作成
- cp src/.env.example src/.env
#### .env 設定についての注意
- .env の中身は docker-compose.yml の設定に合わせて、以下のように編集してください：
  - DB_CONNECTION=mysql
  - DB_HOST=mysql
  - DB_PORT=3306
  - DB_DATABASE=laravel_db
  - DB_USERNAME=laravel_user
  - DB_PASSWORD=laravel_pass

### 5. アプリケーションキーを生成
- docker compose exec php php artisan key:generate
### 6. ストレージのシンボリックリンクを作成
- docker compose exec php php artisan storage:link

### 7. マイグレーション＆初期データ投入
- docker compose exec php php artisan migrate --seed

---

## 使用技術・サービス
- docker : 環境構築
- Nginx：ポート80で公開
- PHP (8.x)：Laravelアプリケーション実行
- MySQL 8.0.29：データベース
- phpMyAdmin：ポート8080でアクセス可能
- Bootstrap4 :ページネーションに使用
- JavaScript : 画像プレビュー用

---
## ER図
- 
---
## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080
- 商品一覧：/

- 商品一覧（マイリスト）：/?tab=mylist
- 商品詳細：/item/{item_id}
- 商品出品：/sell
- 商品購入：/purchase/{item_id}
- 配送先変更：/purchase/address/{item_id}
- 会員登録：/register
- ログイン：/login
- プロフィール：/mypage
- プロフィール編集：/mypage/profile
- 購入履歴：/mypage?page=buy
- 出品履歴：/mypage?page=sell