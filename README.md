# mastercoin/mastercore-php

This project is a PHP wrapper for [Master Core](https://github.com/mastercoin-MSC/mastercore).

Installation
------------

The recommended way to install this library is by using [composer](http://getcomposer.org/) and [packagist](https://packagist.org/packages/mastercoin/mastercore-php).

If not already done, install composer ([more details](https://getcomposer.org/doc/00-intro.md)):
```bash
curl -sS https://getcomposer.org/installer | php
```
Create the following `composer.json` file:
```json
{
    "require": {
        "mastercoin/mastercore-php": "~0.1"
    },
    "minimum-stability": "dev",
    "prefer-stable": true
}
```
And [execute](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies) within your project dir:
```bash
php composer.phar install
```
Or:
```bash
composer install
```

Usage
-----

To use the RPC wrapper you basically need to do the following:
```php
use Mastercoin\MasterCore\MasterCoreRpc;

...

$mastercore = new MasterCoreRpc('http://rpcuser:rpcpass@rpchost:rpcport');
$mastercore->...
```

Please take a look at the [complete example](https://github.com/dexX7/mastercore-php/blob/master/examples/simple.php)
and the [documentation](https://github.com/dexX7/mastercore-php/blob/master/src/MasterCore/MasterCoreInterface.php).
