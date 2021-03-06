# 環境設定
## インストール
```
$ git clone https://github.com/SD22-team/junjunk.git
```
## .envの設定
新規に```.env```をルートディレクトリに作成。<br>
```.env.sample```を```.env```にコピー後、最終行に以下のコードを追加
```
GOOGLE_CLIENT_ID=970778285473-0s06gqg3lkpedskt6mmae5o61m79ejf9.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=EWAD_ykDGRaO6XMIKdW3A43v
GOOGLE_CALLBACK_URL=/login/google/callback

GITHUB_CLIENT_ID=50bafab3b241aefa1274
GITHUB_CLIENT_SECRET=8189e4ab6177fefe2ff9c35731c0bcc3387a2544
GITHUB_CALLBACK_URL=/login/github/callback

STRIPE_KEY=pk_test_ksgoKkZu1VxCb8bVFQHWkL4V00zmwXcht5
STRIPE_SECRET=sk_test_vmvnO4Dnh57dT2Mpfg2Gx11Q005wou7kFu

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=ap-northeast-1
AWS_BUCKET=junjunk
```

DB_HOST, DB_USERNAME, DB_PASSWORDなどを自分の環境に合わせる<br>

(例)
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=junjunk
DB_USERNAME=root
DB_PASSWORD=secret
```

## DBの作成
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
php artisan migrate:refresh --seed
```
これでエラーが表示される場合は
```
php artisan migrate:fresh --seed
```
を実行して下さい。
これでデータベースにテーブルが作成されます。

## Serverの起動
Serverを起動する前に暗号化用のキーを作成。
```
php artisan key:generate
```
storageフォルダとのシンボリックリンクも作成
```
php artisan storage:link
```
junjunkフォルダに移動して
```
php artisan serve
```

Laradockなど、Dockerで環境構築している場合は
```
php artisan serve --host 0.0.0.0
```
その後、localhost:8000にアクセスするとTOPページが表示されます。

## Gitの運用
issueにassignする場合は```feature/fix-01```のように```feature/fix-issue番号``` でbranchを切って下さい。<br>
また、PRを投げる際はコメントの最下行で```close #issue番号```と記述すると、PRがMergeされた後に自動でissueが消去されます。
