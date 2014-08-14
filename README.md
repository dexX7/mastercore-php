# mastercoin/mastercore-php

This project is a PHP wrapper for [Master Core](https://github.com/mastercoin-MSC/mastercore).

Usage
-----

To use the RPC wrapper you basically need to do the following:
```php
use Mastercoin\MasterCore\MasterCoreRpc;

...

$mastercore = new MasterCoreRpc('http://rpcuser:rpcpass@rpchost:rpcport');
$mastercore->...
```

Please take a look at the [example](examples/simple.php) and the interface [documentation](src/MasterCore/MasterCoreInterface.php).

Additional information are available in the official [Master Core API documentation](https://github.com/mastercoin-MSC/mastercore/blob/62f036c524/doc/apidocumentation.md).

Installation
------------

The recommended way to install this library is by using [composer](http://getcomposer.org/) and [packagist](https://packagist.org/packages/mastercoin/mastercore-php).

If not already done, install [composer](https://getcomposer.org/doc/00-intro.md):
```bash
curl -sS https://getcomposer.org/installer | php
```

To use this project as a **library**, create or edit the file `composer.json` and add:
```json
{
    "require": {
        "mastercoin/mastercore-php": "~0.1"
    }
}
```

And [execute](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies) within your project dir:
```bash
php composer.phar install
```

To create mastercore-php as a new **project**, execute the following command:
```bash
php composer.phar create-project mastercoin/mastercore-php
```

Based on your system `composer` and `php composer.phar` might be used synonymously.

Dependencies
------------

For the Bitcoin Core base and RPC connection [nbobtc/bitcoind-php](https://github.com/nbobtc/bitcoind-php) ([packagist](https://packagist.org/packages/nbobtc/bitcoind-php)) is used.
