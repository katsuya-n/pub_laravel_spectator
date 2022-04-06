#### 起動

```
$ docker-compose up -d
$ docker-compose exec spectator_app bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```

[http://localhost/](http://localhost/) にアクセス

#### API実行(curl)

```
$ curl http://localhost/api/status
$ curl -XPOST http://localhost/api/check
```

#### テスト実行

```
$ docker-compose exec spectator_app bash
$ php artisan test
```