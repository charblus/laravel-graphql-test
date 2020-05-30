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
如果你不想通过 gui，也就是 graphiql 进行可视化测试，可直接请求地址的形式进行访问
http://127.0.0.1:8000/graphql
http://127.0.0.1:8000/graphql?query=query+FetchUsers{users{id,email}}

基本上在使用 graphql 作为 API 语言后，所请求的接口只有一个，就是` /graphql `，除非你在自定义别的接口。

一般请求的 url 规则如下：
```
请求 url: 端口 /graphql?query = 请求方式（query 还是 mutation）+ 方法名 {返回字段或者是请求参数}

```
参考
https://learnku.com/articles/8115/using-graphql-one-in-laravel-get-data
一步一步来 一直报版本问题 composer require 安装不上 遂以作者旧版本为模板 修改

.env  含mysql 配置文件 larval database, 以.env.example为模板

http://127.0.0.1:8000/graphql-ui

```
{
  users {
    id
    name
    job {
      id
      name
      description
    }
  }
}

```
如果要查询某个特定 id 或者特定参数的 user ，则可以带参数进行查询  
```
{
  users(id:1) {
    id
    name
    job {
      id
      name
      description
    }
  }
}
```
限定 2 个用户
```
{
  users(limit:2) {
    id
    name
    job {
      id
      name
      description
    }
  }
}
```
创建用户
mutation users {
  createUser(name: "hello",email:"hello@hello.com",password: "12312321") {
    id
    email
  }
}
创建 Job, userId取创建用户 返回的id
mutation users {
  createJob(name: "hello",description:"开发工程师",userId: 9) {
    id
    description
  }
}
单查询一下
{
  users(id: 9){
    id
    name
    job{
      name
      description
    }
  }
}
修改
mutation {
  updateUser(id: 9, email:"origin@hello.com",name: "world") {
    id
    name
    email
    job {
      id
      name
      description
    }
  }
}


### composer 
composer require XXXX
composer global require XXXX

 composer dump-autoload   
  composer clearcache    