<?php namespace Adamsmeat\Helpers;

use Illuminate\Support\ServiceProvider;
use Adamsmeat\Helpers\Helpers;
use Adamsmeat\Helpers\Fuel\Core\Arr as FuelArr;

class HelpersServiceProvider extends ServiceProvider {

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
		$this->package('adamsmeat/helpers');
		require __DIR__.'/../../routes.php';		
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['helpers'] = $this->app->share(function($app)
        {
			return new Helpers($app);
        });	
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('helpers');
	}

}