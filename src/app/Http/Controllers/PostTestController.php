<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostTestController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function __invoke(Request $request)
    {
        return [
            'date' => [
                'year' => 2022,
                'month' => 4,
                'day' => 6,
            ],
            'title' => 'test response!',
            'level' => 'high'
        ];
    }
}
