Laravel Facebook
==============

A Facebook component for Laravel which leverages on Laravel's [Facades](http://laravel.com/docs/facades).

Normally:
```php
$facebook = new Facebook(array(
  'appId'  => 'YOUR_APP_ID',
  'secret' => 'YOUR_APP_SECRET',
));

// Get User ID
$user = $facebook->getUser();
```

Now:
```php
// Get User ID
$user = Z\Facebook::getUser();
```

Laravel Facebook currently supports [Facebook 3.2](https://github.com/facebook/facebook-php-sdk) and [Laravel 4.0](http://laravel.com/).

Installation
-------------
1. Add the [package](https://packagist.org/packages/zejesago/laravel-facebook) in your `composer.json` file, then execute a `php composer.phar install` (or `composer install`) command from your root directory.
2. Register the package, typically, by adding `'Zejesago\Laravel\Facebook\ServiceProvider'` in the `providers` array in `app/config/app.php`.
3. (Optional) Add an alias in the `aliases` array in `app/config/app.php`. E.g. `'Z\Facebook' => 'Zejesago\Laravel\Facebook\Facade'`.
4. Run `php artisan config:publish zejesago/laravel-facebook` to create your app-specific configuration, where you can set your app ID and secret.

Testing
-------------
When doing unit testing, you may encounter some session errors thrown when instatiating Facebook.

Include the following snippet in `phpunit.xml`:
```php
<php>
    <server name="HTTP_HOST" value="localhost"/>
    <server name="REQUEST_URI" value="/"/>
    <server name="path" value="localhost"/>
</php>
```
then run your tests with the `--stderr` flag to prevent HTTP header generation interruptions.
