#### 起動

```
$ docker-compose up -d
$ docker-compose exec spectator_app bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

[http://localhost/](http://localhost/) にアクセス