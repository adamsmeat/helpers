# Adamsmeat/Helpers

Extensions for L4 helpers yet to be implemented in a composer package. A helper for its helpers.

#### Helpers and Pimple

Helpers class extends [Pimple](git://github.com/fabpot/Pimple.git). You can easily add your own closures

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
