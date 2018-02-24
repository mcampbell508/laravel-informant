Laravel Informant
================

[![Build Status](http://img.shields.io/travis/mcampbell508/laravel-informant.svg)](https://travis-ci.org/mcampbell508/laravel-informant)
[![Total Downloads](http://img.shields.io/packagist/dm/mcampbell508/laravel-informant.svg)](https://packagist.org/packages/mcampbell508/laravel-informant)
[![Latest Stable Version](http://img.shields.io/packagist/v/mcampbell508/laravel-informant.svg)](https://packagist.org/packages/mcampbell508/laravel-informant)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/mcampbell508/laravel-informant/blob/master/LICENSE)

As applications are always changing with every single pull/merge request that is merged into the main branch, if a team has
several developers, there could be a chance that the local applications for other developers may not reflect the application
state of the latest `master` version.

This package is designed for teams using Laravel and other dependencies such as Node modules - and the aim is to inform
developers about the state of their local application and whether they need to take actions that will help ensure the
application state reflects the latest merged version of an application.

![Example](./screenshots/errors.png)

- [Why use this package?](#why-use-this)
- [Installation](#installation)
- [Usage](#usage)
- [Code Style](#code-style)
- [Testing](#testing)
- [Note about Git Hooks](#note-about-git-hooks)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

Why use this?
------------

Here's a list of what **could** change on every merge:

- `composer.lock` has been modifed, a `composer install` will have to take place.
- `composer.json` has been modified, a `composer dumpauto` might have to take place.
- `package.json` OR `npm-skrinkwrap.json` OR  `yarn.lock` file has been modified, an appropriate command to make sure the frontend dependencies are available.
- Files in `resources/assets` could have been modified, meaning a command like `gulp` might have to be run.
- Database migrations could have been added.

This could help with situations like "My tests pass on CI, but not locally - what can I do?". The first step will probably be making sure the application and all of its dependencies are in sync with the `master` application version.

It is recommended to use this during **local development ONLY** and this package's service provider will have to be
registered manually.

Installation
------------

Add the laravel-informant package to your `composer.json` file.

``` json
{
    "require": {
        "mcampbell508/laravel-informant": "1.0.*"
    }
}
```

Or via the command line in the root of your Laravel installation.

``` bash
$ composer require "mcampbell508/laravel-informant:1.0*"
```

## Register the service provider

- If you would like to limit the environment
    - Within the `register` method of `app/Providers/AppServiceProvider.php` or where prefered...

```
$informantEnvironments = config('informant.service_providers.limit_environments');

if (empty($informantEnvironments) || in_array($this->app->environment(), $informantEnvironments)) {
    $this->app->register(\MattCampbell\Laravel\InformantServiceProvider::class);
}
```

> default values for `config('informant.service_providers.limit_environments')` are ['local', 'testing']

- **Or** if you do not want to limit the environment:
    - `config/app.php` service providers array...

```
\MattCampbell\Laravel\InformantServiceProvider::class,
```


## Publish vendor assets

- Publish the config file:

```
php artisan vendor:publish --provider="MattCampbell\Laravel\InformantServiceProvider"
```

Usage
-----

``` php
php artisan informant:status
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


Note about Git Hooks
--------------------

There are also tools such as [Git Hooks](http://githooks.com/) which could be used to make sure these things are tackled at source like when doing things like a `git rebase` and it is recommended to use these tools but this is outside the scope of this package.

- [Example Git Hook tool - Overcommit](https://github.com/brigade/overcommit)

Contributing
------------

Please see [CONTRIBUTING](https://github.com/mcampbell508/laravel-informant/blob/master/CONTRIBUTING.md) for details.


Credits
-------
- [All Contributors](https://github.com/mcampbell508/laravel-informant/contributors)

License
-------

The MIT License (MIT). Please see [License File](https://github.com/mcampbell508/laravel-informant/blob/master/LICENSE) for more information.
