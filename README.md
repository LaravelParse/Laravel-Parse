Laravel Parse
=============

Laravel Parse was created by, and is maintained by [Prosper Otemuyiwa](https://github.com/unicodeveloper), and is a [Parse SDK](https://github.com/ParsePlatform/parse-php-sdk) bridge for [Laravel 5](http://laravel.com). Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/LaravelParse/Laravel-Parse/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

<p align="center">
<a href="https://styleci.io/repos/23192065"><img src="https://styleci.io/repos/23192065/shield" alt="StyleCI Status"></img></a>
<a href="https://travis-ci.org/LaravelParse/Laravel-Parse"><img src="https://img.shields.io/travis/LaravelParse/Laravel-Parse/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/LaravelParse/Laravel-Parse/releases"><img src="https://img.shields.io/github/release/LaravelParse/Laravel-Parse.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## NOTICE

Effective immediately, [Prosper Otemuyiwa](https://github.com/unicodeveloper) will take as project lead on this package.

The package will be rebranded to `laravel-parse/parse`, for a 3.0 release.


## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Laravel Parse, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require laravel-parse/parse
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "laravel-parse/parse": "^3.0"
    }
}
```

Once Laravel Parse is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'LaravelParse\Parse\ParseServiceProvider'`


## Configuration

Laravel Parse requires configuration/

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/parse.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

There are five config options:

##### Parse App Id

This option (`'app_id'`) is where you may specify your parse app id. The default value for this setting is `'your-app-id'`.

##### Parse Rest Key

This option (`'rest_key'`) is where you may specify your parse rest key. The default value for this setting is `'your-rest-key'`.

##### Parse Master Key

This option (`'master_key'`) is where you may specify your parse master key. The default value for this setting is `'your-master-key'`.

##### Parse Server URL

This option (`'server_url'`) is where you may specify your parse server url. The default value for this setting is `'https://api.parse.com/'`.

##### Parse Mount Point

This option (`'mount_point'`) is where you may specify your parse mount point. The default value for this setting is `'1'`.

#### Parse Session Handler

This option (`'session'`) is where you may specify your parse session handler. The default value for this setting is `'laravel'`.

## Usage

This package is only responsible for the automatic initialisation of the parse client. See the parse docs at https://github.com/ParsePlatform/parse-php-sdk.


## Security

If you discover a security vulnerability within this package, please send an e-mail to Prosper Otemuyiwa at prosperotemuyiwa@gmail.com. All security vulnerabilities will be promptly addressed.


## License

Laravel Parse is licensed under [The MIT License (MIT)](LICENSE).
