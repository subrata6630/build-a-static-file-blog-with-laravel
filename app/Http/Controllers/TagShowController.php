<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Assuming you have a Post model
use Sheets; // Assuming you have a class named Sheets

class TagShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $tag)
    {
        $posts = Sheets::collection(name: 'posts') // Corrected method name to "collection"
            ->all()
            ->filter(function ($post) use ($tag) {
                return in_array($tag, $post->tags);
            })

            // dd($posts);

            ->paginate(1);


        abort_if($posts->isEmpty(), code: 404);

        return view('tags.show', compact('posts', 'tag'));
    }
}
