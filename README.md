# laravel-graphql-test

```bash

git clone 

composer install

cp .env.example .env

// config your database

php artisan migrate --seed

php artisan serve

```
open http://127.0.0.1:8000/graphql-ui


参考
https://learnku.com/articles/8115/using-graphql-one-in-laravel-get-data
一步一步来 一直报版本问题 composer require 安装不上 遂以作者旧版本为模板 修改

.env  含mysql 配置文件 larval database, 以.env.example为模板