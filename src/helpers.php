<?php

use Illuminate\Support\Str;

if (!function_exists('supportsWebp')) {
    function supportsWebp() {
        return Str::contains($request->headers->get('user_agent'), ['Trident','Safari',]) !== false;
    }
}