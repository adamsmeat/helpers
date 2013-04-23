<?php namespace Adamsmeat\Helpers;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class HelpersFacade extends LaravelFacade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'helpers'; }



    public static function __callStatic($method, $args) {
        // subhelper
        if (empty($args))
            return LaravelFacade::getFacadeApplication()->helpers->subhelper($method);
    }
}