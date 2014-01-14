<?php namespace Rgrigga\Tattoo;

use Illuminate\Support\ServiceProvider;

class TattooServiceProvider extends ServiceProvider {

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
		$this->package('rgrigga/tattoo','tattoo');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		
        $this->app->bindShared('tattoo', function($app)
		{
			return new Tattoo($app);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('tattoo');
	}

}