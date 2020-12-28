<?php

namespace realtydev\AnalyticsTracker\Tests\Sources;

use Illuminate\Http\Request;
use realtydev\AnalyticsTracker\Sources\CrossOriginRequestParameter;
use realtydev\AnalyticsTracker\Tests\TestCase;

class CrossOriginRequestParameterTest extends TestCase
{
    /** @test */
    public function it_can_get_a_request_parameter_if_the_request_was_cross_origin()
    {
        $request = new Request([
            'foo' => 'bar',
        ]);
        $request->headers->set('Referer', 'https://cross-origin-domain.com/');

        $this->assertEquals('bar', (new CrossOriginRequestParameter($request))->get('foo'));
    }

    /** @test */
    public function it_cant_get_a_request_parameter_if_the_request_was_not_cross_origin()
    {
        $request = new Request([
            'foo' => 'bar',
        ]);
        $request->headers->set('HOST', 'realtydev.be');
        $request->headers->set('Referer', 'https://realtydev.be/');

        $this->assertNull((new CrossOriginRequestParameter($request))->get('foo'));
    }
}
