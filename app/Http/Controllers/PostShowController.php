<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($post)
    {
        dd($post);
    }
}
