<?php

use Carbon\Carbon;

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        $carbon = Carbon::parse($date);

        return $carbon->translatedFormat('d F Y');
    }
}
