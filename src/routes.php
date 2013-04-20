<?php

Route::get('helpers', function()
{
	$multi_dim_arr = array(
		'red' => array(
			'like' => 'apple', 
			'nolike' =>'strawberry',
			'cherry', // php auto applies integers as string keys, cherry will have '0' key
			'0' => 'cherry0string', // since you specified '0', it will override above
			0 => 'cherry0int', // php autoconverts, so this will override above too
		),
	);

	var_dump(array(
		$helpers = App::make('helpers'),
		$fuel_arr = App::make('helpers.fuel_arr'),
		$fuel_arr->flatten($multi_dim_arr, '.'),
		$helpers['markdown']->transform('#h1'),
		$helpers['fuel_arr']->flatten(Config::get('app'), '.'),
	));

});