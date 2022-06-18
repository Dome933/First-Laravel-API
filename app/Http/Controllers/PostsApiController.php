<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostsApiController extends Controller
{
    public function index() 
    {
        return Post::all();
    }

    public function createNewPost()
    {
        Post::validateInputData();

        $input_data = Post::getInputData();
        
        return Post::create($input_data);
    }

    public function updatePost(Post $post)
    {
        Post::validateInputData();

        $input_data = Post::getInputData();
        $success = $post->update($input_data);

        return Post::showResponseStatus($success);
    }

    public function deletePost(Post $post)
    {
        $success = $post->delete();

        return Post::showResponseStatus($success);
    }
}
