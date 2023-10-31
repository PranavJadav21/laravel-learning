<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        // dd($response->collect());

        return view('welcome',['data'=>$response->collect()]);
    }

    public function getPostById($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        // dd($response->collect());

        return view('singlepost',['data'=>$response->collect()]);
    }

    public function addPost(){
        $response = Http::post('https://reqres.in/api/users', ["name"=>"vijay",
        "job"=>"developer"]);
        dd($response->json());
    }

    public function updatePost($id){
        $response = Http::put('https://reqres.in/api/users'.$id, ["name"=>"milan",
        "job"=>"fonrted developer"]);
        dd($response->json());
    }

    public function deletePost($id){
        $response = Http::delete('https://reqres.in/api/users'.$id);
        dd($response);
    }

    public function getInfo(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/1')['title'];
        // dd($response->json());
        dd($response);
    }
}
