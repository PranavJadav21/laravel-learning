<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Author;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post($id){
        $author = Author::find($id);
        $post = new Post();
        $post->title = 'Title 2';
        $post->description = 'Description 3';
        $author->post()->save($post); 
    }
    public function show_post($id){
        $post = Author::find($id)->post;
        return $post;
    }

}
