<?php namespace Zejesago\Laravel\Facebook;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

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
        	return new \Facebook(array(
        		'appId'      => $app['config']->get('laravel-facebook::appId'),
        		'secret'     => $app['config']->get('laravel-facebook::secret'),
        		'fileUpload' => $app['config']->get('laravel-facebook::fileUpload'),
        	));
        });
	}

}