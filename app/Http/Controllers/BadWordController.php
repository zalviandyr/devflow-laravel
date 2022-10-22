<?php

namespace App\Http\Controllers;

use App\Services\BadWordFilterService;

class BadWordController extends Controller
{
    public function __invoke()
    {
        // $result = BadWordFilterService::filter('Mengasu anak ini dan babi');
        // $result = BadWordFilterService::filter('Babi gulinsg');
        $result = BadWordFilterService::filter('MemBaBi buta');

        return response()->json($result);
    }
}
