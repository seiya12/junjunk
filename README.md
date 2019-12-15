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

## インストール

```
$ git clone https://github.com/SD22-team/junjunk.git
```

## 環境設定
### .envの設定
新規に```.env```を作成し、```.env.sample```を作成した```.env```にコピー後、最終行に以下のコードを追加
```
GOOGLE_CLIENT_ID=970778285473-0s06gqg3lkpedskt6mmae5o61m79ejf9.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=z7lBgwak-scMz7WDmaCowhA2
GOOGLE_CALLBACK_URL=/login/google/callback

GITHUB_CLIENT_ID=50bafab3b241aefa1274
GITHUB_CLIENT_SECRET=8189e4ab6177fefe2ff9c35731c0bcc3387a2544
GITHUB_CALLBACK_URL=/login/github/callback
```

DB_HOST, DB_USERNAME, DB_PASSWORDをを自分の環境に合わせる
（恐らく他はみんな一緒）<br>
(例)
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=junjunk
DB_USERNAME=root
DB_PASSWORD=secret
```

### DBの作成
「junjunk」という名前のDatabaseを作って下さい。その後、
```
composer dump-autoload
```
```
php artisan migrate --seed
```
を実行してテーブルを作成して下さい。
すでにテーブルを作成している場合は、
```
php artisan migrate refresh --seed
```
これでエラーが表示される場合は
```
php artisan migrate fresh --seed
```
を実行して下さい。
これでデータベースにテーブルが作成されます。

### Serverの起動
junjunkフォルダに移動して
```
php artisan serve
```

Laradockなど、Dockerで環境構築している場合は
```
php artisan serve --host 0.0.0.0
```
その後、localhost:8000にアクセスするとTOPページが表示されます。

### Gitの運用
issueにassignする場合は```feature/fix-01```のように```feature/fix-issue番号``` でbranchを切って下さい。<br>
また、PRを投げる際はコメントの最下行で```close #issue番号```と記述すると、PRがMergeされた後に自動でissueが消去されます。

## Author

[@KHiroki86_](https://twitter.com/KHiroki86_)

## License

[MIT](http://b4b4r07.mit-license.org)
