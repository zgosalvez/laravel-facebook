<?php namespace Zejesago\Laravel\Facebook;

use Facebook\Facebook;

class FacebookServiceProvider extends \Illuminate\Support\ServiceProvider {

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('zejesago/laravel-facebook', null, __DIR__.'/../../..');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('Zejesago\Laravel\Facebook', function($app) {
        	return new Facebook(array(
        		'app_id'     => $app['config']->get('laravel-facebook::facebook.appId'),
        		'app_secret' => $app['config']->get('laravel-facebook::facebook.secret'),
        	));
        });
	}

}