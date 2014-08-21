<?php

/**
 * This file is part of Laravel Parse by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://bit.ly/UWsjkb.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Parse;

use Illuminate\Support\ServiceProvider;
use Parse\ParseClient;

/**
 * This is the parse service provider class.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Parse/blob/master/LICENSE.md> Apache 2.0
 */
class ParseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('graham-campbell/parse', 'graham-campbell/parse', __DIR__);

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
        return array(
            //
        );
    }
}
