### JWT Token API

## Pull down JTW and set the verison

```
composer require tymon/jwt-auth
```

change composer.json
```
"require": {
        "php": "^7.1.3",
        "fideloper/proxy": "^4.0",
        "laravel/framework": "5.7.*",
        "laravel/tinker": "^1.0",
        "tymon/jwt-auth": "^1.0.0"
    }
```


## Publish the config

```
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```


## Run Secret

```
php arisan jwt:secret
```


