Laravel Parse
=============

Laravel Parse was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a [Parse SDK](https://github.com/ParsePlatform/parse-php-sdk) bridge for [Laravel 5](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Parse/releases), [license](LICENSE), [api docs](http://docs.grahamjcampbell.co.uk), and [contribution guidelines](CONTRIBUTING.md).

![Laravel Parse](https://cloud.githubusercontent.com/assets/2829600/4432307/c14e116c-468c-11e4-9ec7-987502964de9.PNG)

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
"graham-campbell/parse": "~2.0"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Parse is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'GrahamCampbell\Parse\ParseServiceProvider'`

#### Looking for a laravel 4 compatable version?

Checkout the [1.0 branch](https://github.com/GrahamCampbell/Laravel-Parse/tree/1.0), installable by requiring `"graham-campbell/parse": "~1.0"`.


## Configuration

Laravel Parse requires configuration/

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/parse.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

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
