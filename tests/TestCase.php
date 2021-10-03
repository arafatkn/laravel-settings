<?php

namespace Arafatkn\LaravelSettings\Tests;

use Arafatkn\LaravelSettings\SettingServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            SettingServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}