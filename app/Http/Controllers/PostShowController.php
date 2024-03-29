<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Make sure to import the Post model if not already imported

class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
