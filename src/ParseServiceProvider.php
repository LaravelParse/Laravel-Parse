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

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
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
        $this->setupConfig();

        $this->setupParse($this->app);
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/parse.php');

        $this->publishes([$source => config_path('parse.php')]);

        $this->mergeConfigFrom('parse', $source);
    }

    /**
     * Setup parse.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function setupParse(Application $app)
    {
        $config = $app->config->get('parse');

        ParseClient::initialize($config['app_id'], $config['rest_key'], $config['master_key']);
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
