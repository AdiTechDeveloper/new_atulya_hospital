<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $settings = Setting::first();

        if (!$settings) {
            return $default;
        }

        return $settings->{$key} ?? $default;
    }
}