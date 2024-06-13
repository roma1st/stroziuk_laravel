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

}
