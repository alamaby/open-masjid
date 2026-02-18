<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

if (! function_exists('asset_url')) {
    /**
     * Returns the Asset URL.
     *
     * @param string $path
     * @return string
     */
    function asset_url(string $path = ''): string
    {
        $config = config('App');

        // Check if assetURL is set and not empty
        if (! empty($config->assetURL)) {
            return rtrim($config->assetURL, '/') . '/' . ltrim($path, '/');
        }

        // Fallback to base_url
        return base_url($path);
    }
}
