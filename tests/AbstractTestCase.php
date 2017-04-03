<?php

/*
 * This file is part of Laravel Parse.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LaravelParse\Tests\Parse;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use LaravelParse\Parse\ParseServiceProvider;

/**
 * This is the abstract test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ParseServiceProvider::class;
    }
}
