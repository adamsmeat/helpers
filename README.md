# Adamsmeat/Helpers

Extensions for L4 helpers yet to be implemented in a composer package. A helper for its helpers.

#### Info

Helpers class extends Pimple. [git://github.com/fabpot/Pimple.git]

The following shows subservices mapped to their key:

- markdown: dflydev\markdown\MarkdownExtraParser

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

#### Classes

The following classes are included and used by default with the following keys

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