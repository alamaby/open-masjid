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
        // Try getting from Config first, then fallback to env() directly
        // This handles cases where App.php might not have the property yet on the server
        $assetURL = $config->assetURL ?? env('app.assetURL');

        // Clean the path: remove leading slashes and 'public/' prefix
        $cleanPath = preg_replace('#^public/#', '', ltrim($path, '/'));

        if (! empty($assetURL)) {
            return rtrim($assetURL, '/') . '/' . $cleanPath;
        }

        // Fallback: If no assetURL is set (Localhost), we assume assets are in 'public/'
        // independent of whether valid base_url points to root or public.
        // We force 'public/' prefix here for consistency.
        return base_url('public/' . $cleanPath);
    }
}
