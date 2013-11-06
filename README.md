Laravel Social
==============

A social component for Laravel which leverages on Laravel's [Facades](http://laravel.com/docs/facades).

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
$user = Social\Facebook::getUser();
```

Laravel Social currently supports [Facebook](https://github.com/facebook/facebook-php-sdk) and [Laravel 4](http://laravel.com/).

Installation
-------------
1. Add the [package](https://packagist.org/packages/zejesago/laravel-social) in your `composer.json` file, then execute a `php composer.phar update` (or `composer update`) command from your root directory.
2. Register the package, typically, by adding `'Zejesago\Laravel\Social\SocialServiceProvider'` in the `providers` array in `app/config/app.php`.
3. (Optional) Add an alias in the `aliases` array in `app/config/app.php`. E.g. `'Social\Facebook' => 'Zejesago\Laravel\Social\Facebook'`.
4. Run `php artisan config:publish zejesago/laravel-social` to create your app-specific configuration, where you can set your app ID and secret.

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
