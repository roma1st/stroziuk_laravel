<?php


namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

 class PostController 
{
    
    public function index()
    {
    $posts = BlogPost::with(['user', 'category'])->get();
    
    return $posts;
    }


    public function show($id)
    {
        $post = BlogPost::with(['user','category']) -> find($id);

        if (!$post) {
            return response()->json(['message' => 'Пост не знайдено'], 404);
        }

        return $post;
    }

}
