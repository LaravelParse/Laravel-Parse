<?php

/*
 * This file is part of Laravel Parse.
 *
 * (c) Graham Campbell <graham@alt-three.com>
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
 * @author Graham Campbell <graham@alt-three.com>
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

        if (class_exists('Illuminate\Foundation\Application', false)) {
            $this->publishes([$source => config_path('parse.php')]);
        } elseif (class_exists('Laravel\Lumen\Application', false)) {
            $this->configure('parse');
        }

        $this->mergeConfigFrom($source, 'parse');
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
