Laravel Parse
=============


[![Build Status](https://img.shields.io/travis/GrahamCampbell/Laravel-Parse/master.svg?style=flat)](https://travis-ci.org/GrahamCampbell/Laravel-Parse)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Laravel-Parse.svg?style=flat)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/GrahamCampbell/Laravel-Parse.svg?style=flat)](https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Parse)
[![Software License](https://img.shields.io/badge/license-Apache%202.0-brightgreen.svg?style=flat)](LICENSE.md)
[![Latest Version](https://img.shields.io/github/release/GrahamCampbell/Laravel-Parse.svg?style=flat)](https://github.com/GrahamCampbell/Laravel-Parse/releases)


## Introduction

Laravel Parse was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a [Parse SDK](https://github.com/ParsePlatform/parse-php-sdk) bridge for [Laravel 4.1+](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Parse/releases), [license](LICENSE.md), [api docs](http://docs.grahamjcampbell.co.uk), and [contribution guidelines](CONTRIBUTING.md).


## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.2+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Parse, simply require `"graham-campbell/parse": "~0.1"` in your `composer.json` file. You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Parse is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.

* `'GrahamCampbell\Parse\ParseServiceProvider'`

You can register the Parse facade in the `aliases` key of your `app/config/app.php` file if you like.

* `'Parse' => 'GrahamCampbell\Parse\Facades\Parse'`


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

Apache License

Copyright 2014 Graham Campbell

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
