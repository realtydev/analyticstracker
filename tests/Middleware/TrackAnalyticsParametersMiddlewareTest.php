<?php

namespace realtydev\AnalyticsTracker\Tests\Middleware;

use Illuminate\Http\Request;
use realtydev\AnalyticsTracker\AnalyticsBag;
use realtydev\AnalyticsTracker\Middleware\TrackAnalyticsParametersMiddleware;
use realtydev\AnalyticsTracker\Tests\TestCase;

class TrackAnalyticsParametersMiddlewareTest extends TestCase
{
    /** @test */
    public function it_tries_to_add_any_analytics_parameters_to_the_analytics_bag()
    {
        $request = new Request();

        $this->mock(AnalyticsBag::class)->expects('putFromRequest')->once()->with($request);

        $middleware = app(TrackAnalyticsParametersMiddleware::class);

        $middleware->handle($request, fn (Request $request) => $request);
    }
}
