<?php

/*
 * This file is part of Laravel Parse.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Parse;

use Orchestra\Support\Providers\ServiceProvider;
use Parse\ParseClient;

/**
 * This is the parse service provider class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class ParseServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->addConfigComponent('graham-campbell/parse', 'graham-campbell/parse', realpath(__DIR__.'/../config'));

        ParseClient::initialize(
            $this->app->config->get('graham-campbell/parse::app_id'),
            $this->app->config->get('graham-campbell/parse::rest_key'),
            $this->app->config->get('graham-campbell/parse::master_key')
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            //
        ];
    }
}
