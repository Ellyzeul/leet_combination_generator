<?php

namespace App\Http\Controllers;

use App\Models\Leet;

class LeetController extends Controller
{
    public static function generate(string $word)
    {
        $content = Leet::generate($word);

        $response = view('main', [
            "combinations" => $content
        ]);

        return $response;
    }
}
