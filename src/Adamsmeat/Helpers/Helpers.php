<?php namespace Adamsmeat\Helpers;

use Pimple;
use dflydev\markdown\MarkdownExtraParser;
use Adamsmeat\Helpers\Fuel\Core\Arr;


class Helpers extends Pimple {

	public function __construct($app, array $values = array())
	{
        parent::__construct();

        $this['markdown'] = $this->share(function () {
        	return new MarkdownExtraParser();
        });

        $this['fuel_arr'] = $this->share(function () {
        	return new Arr();
        });       

        // allow override
        foreach ($values as $key => $value) {
            $this[$key] = $value;
        }      
	}

    public function subhelper($key)
    {
       return $this[$key];
    }

    public function me()
    {
       return $this;
    }

}