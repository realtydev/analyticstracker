<?php

namespace realtydev\AnalyticsTracker\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use realtydev\AnalyticsTracker\AnalyticsTrackerServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            AnalyticsTrackerServiceProvider::class,
        ];
    }
}
