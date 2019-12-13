# ジャン×ジャンク
## 概要

ジャンク品専門のフリーマーケットサービス（SD22）

## 技術仕様

**フロントエンド**

- HTML
- CSS
    - Bootstrap4
- JavaScript

**バックエンド**

- PHP
    - Laravel

## 担当
- ゴリ
    - バックエンド
    - HTML
- せいや
    - データベース
- のぶ
    - CSS
- りっちゃん
    - CSS

## 環境設定
.envに以下のコードを追加
```
GOOGLE_CLIENT_ID=970778285473-0s06gqg3lkpedskt6mmae5o61m79ejf9.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=z7lBgwak-scMz7WDmaCowhA2
GOOGLE_CALLBACK_URL=/login/google/callback
```

DB_HOST, DB_USERNAME, DB_PASSWORDをを自分の環境に合わせる
（恐らく他はみんな一緒）
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=junjunk
DB_USERNAME=root
DB_PASSWORD=secret
```
junjunkフォルダに移動して
```
php artisan serve
```
Laradockなど、Dockerで環境構築している場合は
```
php artisan serve --host 0.0.0.0
```

## インストール

```
$ git clone https://github.com/SD22-team/junjunk.git
```

## Author

[@MuscleEngineer_](https://twitter.com/KHiroki86_)

## License

[MIT](http://b4b4r07.mit-license.org)
