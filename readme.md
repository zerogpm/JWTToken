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
        "tymon/jwt-auth": "^1.0.0"   <----- change this
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

## Pull dow Cors

```
composer require barryvdh/laravel-cors
```

## Config Cors

If you want to allow CORS on a specific middleware group or route, add the HandleCors middleware to your group:

```
protected $middlewareGroups = [
    'web' => [
       // ...
    ],

    'api' => [
        // ...
        \Barryvdh\Cors\HandleCors::class,
    ],
];
```

The defaults are set in config/cors.php. Copy this file to your own config directory to modify the values. You can publish the config using this command:

```php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider" ```
