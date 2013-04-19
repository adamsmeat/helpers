<?php namespace Adamsmeat\Helpers;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class HelpersFacade extends LaravelFacade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'helpers'; }

}