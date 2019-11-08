<?php

use Illuminate\Support\Str;

if (!function_exists('supportsWebp')) {
    function supportsWebp() {
        return Str::contains($_SERVER['HTTP_USER_AGENT'], ['Trident','Safari',]) !== false;

    }
}