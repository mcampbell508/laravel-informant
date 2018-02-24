Package Skeleton
================

[![Build Status](http://img.shields.io/travis/mcampbell508/package-skeleton.svg)](https://travis-ci.org/mcampbell508/package-skeleton)
[![Total Downloads](http://img.shields.io/packagist/dm/mcampbell508/package-skeleton.svg)](https://packagist.org/packages/mcampbell508/package-skeleton)
[![Latest Stable Version](http://img.shields.io/packagist/v/mcampbell508/package-skeleton.svg)](https://packagist.org/packages/mcampbell508/package-skeleton)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/mcampbell508/package-skeleton/blob/master/LICENSE)


:package_description

- [Installation](#installation)
- [Usage](#usage)
- [Code Style](#code-style)
- [Testing](#testing)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


Installation
------------

Add the package-skeleton package to your `composer.json` file.

``` json
{
    "require": {
        "mcampbell508/package-skeleton": "1.0.*"
    }
}
```

Or via the command line in the root of your Laravel installation.

``` bash
$ composer require "mcampbell508/package-skeleton:1.0*"
```

Usage
-----

``` php
use MCampbell508\Skeleton;

$skeleton = new Skeleton();
echo $skeleton->echoPhrase('Hello, World!');

```

Code Style
-------

This project follows the following code style guidelines:

- [PSR-2](http://www.php-fig.org/psr/psr-2/) & [PSR-4](http://www.php-fig.org/psr/psr-4/) coding style guidelines.
- Some chosen [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) rules.


``` bash
$ php vendor/bin/php-cs-fixer fix
```


Testing
-------

``` bash
$ php vendor/bin/phpunit
```

Contributing
------------

Please see [CONTRIBUTING](https://github.com/mcampbell508/package-skeleton/blob/master/CONTRIBUTING.md) for details.


Credits
-------
- [All Contributors](https://github.com/mcampbell508/package-skeleton/contributors)

License
-------

The MIT License (MIT). Please see [License File](https://github.com/mcampbell508/package-skeleton/blob/master/LICENSE) for more information.
