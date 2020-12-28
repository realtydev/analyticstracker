<?php

namespace realtydev\AnalyticsTracker\Sources;

use realtydev\AnalyticsTracker\Helpers\Request;

class CrossOriginRequestHeader extends RequestHeader
{
    public function get(string $key): ?string
    {
        if (! Request::isCrossOrigin($this->request)) {
            return null;
        }

        return parent::get($key);
    }
}
