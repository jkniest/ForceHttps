# Force HTTPS Middleware

This package does only one thing: Redirect an unsecure request to a secure request!   
 For example: http://example.com will be https://example.com
 
## Installation


1) In order to install the ForceHttps package, just run the following command in the root directory of your laravel installation:

```shell
composer require jkniest/force-https
```

2) Open your `config/app.php` and add the following to the `providers` array:

```php
jkniest\ForceHttps\ForceHttpsServiceProvider::class,
```

3) Run the command below to publish the configuration file:

```shell
php artisan vendor:publish --tag="force-https"
```

4) Add the following line to your `.env` file:

```
FORCE_HTTPS=true
```

5) Open your `app/Http/Kernel.php` and ad the following to the `middleware` array:

```php
\jkniest\ForceHttps\ForceHttps::class,
```