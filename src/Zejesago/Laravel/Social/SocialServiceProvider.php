<?php namespace Zejesago\Laravel\Social;

use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('zejesago/laravel-social', null, __DIR__.'/../../..');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('Zejesago\Laravel\Social\Facebook', function($app) {
        	return new \Facebook(array(
        		'appId'      => $app['config']->get('laravel-social::facebook.appId'),
        		'secret'     => $app['config']->get('laravel-social::facebook.secret'),
        		'fileUpload' => $app['config']->get('laravel-social::facebook.fileUpload'),
        	));
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}