<?php

namespace realtydev\AnalyticsTracker\Tests\Sources;

use Illuminate\Http\Request;
use realtydev\AnalyticsTracker\Sources\RequestParameter;
use realtydev\AnalyticsTracker\Tests\TestCase;

class RequestParameterTest extends TestCase
{
    /** @test */
    public function it_can_get_a_request_parameter()
    {
        $request = new Request([
            'foo' => 'bar',
        ]);

        $this->assertEquals('bar', (new RequestParameter($request))->get('foo'));
    }
}
