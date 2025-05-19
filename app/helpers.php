<?php

if (!function_exists('get_alt_locale')) {
    /**
     * Get the alternate locale (not current one)
     *
     * @return string
     */
    function get_alt_locale()
    {
        return app()->getLocale() === 'id' ? 'en' : 'id';
    }
}

if (!function_exists('locale_name')) {
    /**
     * Get the locale name based on code
     *
     * @param string $locale
     * @return string
     */
    function locale_name($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        $names = [
            'en' => 'English',
            'id' => 'Indonesia',
        ];

        return $names[$locale] ?? $locale;
    }
}

if (!function_exists('format_bytes')) {
    /**
     * Format bytes to kb, mb, gb, tb
     *
     * @param int $size
     * @param int $precision
     * @return string
     */
    function format_bytes($size, $precision = 2)
    {
        if ($size > 0) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = ['bytes', 'KB', 'MB', 'GB', 'TB'];
            return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
        }

        return $size;
    }
}
