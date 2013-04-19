# Adamsmeat/Helpers

Extensions for L4 helpers yet to be implemented in a composer package. A helper for its helpers.

#### Installation

```php
<?php
return array(
	'providers' => 'Adamsmeat\Helpers\HelpersServiceProvider',
	'aliases' => array(
		'Helpers' => 'Adamsmeat\Helpers\HelpersFacade',
	)
);
?>
```

#### Notes

You can use the follow accessors in App::make($key)

```php
<?php
array(
	'helpers' => 'Adamsmeat\Helpers\Helpers', // this will contain the common ones
	'helpers.fuel_arr' => 'Adamsmeat\Helpers\Fuel\Core\Arr', // Arr from FuelPHP framework 1.5
);
?>
```