Laravel Parse
=============

Laravel Parse was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a [Parse SDK](https://github.com/ParsePlatform/parse-php-sdk) bridge for [Laravel 4.1/4.2](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Parse/releases), [license](LICENSE), [api docs](http://docs.grahamjcampbell.co.uk), and [contribution guidelines](CONTRIBUTING.md).

![Laravel Parse](https://cloud.githubusercontent.com/assets/2829600/4432306/c14b319a-468c-11e4-81e8-29754fa09a86.PNG)

<p align="center">
<a href="https://travis-ci.org/GrahamCampbell/Laravel-Parse"><img src="https://img.shields.io/travis/GrahamCampbell/Laravel-Parse/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse"><img src="https://img.shields.io/scrutinizer/g/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/GrahamCampbell/Laravel-Parse/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Laravel-Parse.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Parse, simply add the following line to the require block of your `composer.json` file:

```
"graham-campbell/parse": "~1.0"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Parse is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.

* `'GrahamCampbell\Parse\ParseServiceProvider'`

#### Looking for a laravel 5 compatable version?

Checkout the [master branch](https://github.com/GrahamCampbell/Laravel-Parse/tree/master), installable by requiring `"graham-campbell/parse": "~2.0"`.


## Configuration

Laravel Parse requires connection configuration.

To get started, first publish the package config file:

```bash
$ php artisan config:publish graham-campbell/parse
```

There are three config options:

##### Parse App Id

This option (`'app_id'`) is where you may specify your parse app id. The default value for this setting is `'your-app-id'`.

##### Parse Rest Key

This option (`'rest_key'`) is where you may specify your parse rest key. The default value for this setting is `'your-rest-key'`.

##### Parse Master Key

This option (`'master_key'`) is where you may specify your parse master key. The default value for this setting is `'your-master-key'`.


## Usage

This package is only responsible for the automatic initialisation of the parse client. See the parse docs at https://github.com/ParsePlatform/parse-php-sdk.


## License

Laravel Parse is licensed under [The MIT License (MIT)](LICENSE).
