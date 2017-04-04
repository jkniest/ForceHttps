# Force HTTPS Middleware

[![Packagist](https://img.shields.io/packagist/dt/jkniest/force-https.svg)](https://packagist.org/packages/jkniest/force-https)


This package only does one thing: Force a connection through _https_! If a user visit the site with an unsecure "http"-Request (example: http://example.com) he will be automatically redirected to a secure route (example: http**s**://example.com)

---

## Installation

1) In order to install the package, just run the following command in the root directory of your laravel installation:

```shell
composer require jkniest/force-https
```

2) Open the `config/app.php` file and add the following code to the `providers` array:

```php
jkniest\ForceHttps\ForceHttpsServiceProvider::class,
```

3) Run the command below to copy the configuration files to your `config` folder

```shell
php artisan vendor:publish --tag="force-https"
```

4) Add the following line to the `.env` file

```
FORCE_HTTPS=true
```

5) Open the `app/Http/Kernel.php` file and add the following code to the `middleware` array:

```php
\jkniest\ForceHttps\ForceHttps::class,
```

---

To disable the https-redirection (for example on staging servers) just change the `FORCE_HTTPS=true` in your `.env` file to `FORCE_HTTPS=false`

---

## License

The ForceHttps package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
