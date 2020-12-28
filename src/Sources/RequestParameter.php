<?php

namespace realtydev\AnalyticsTracker\Sources;

use Illuminate\Http\Request;

class RequestParameter
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(string $key): ?string
    {
        return $this->request->get($key);
    }
}
