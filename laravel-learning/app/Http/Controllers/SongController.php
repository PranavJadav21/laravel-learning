<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song(){
        $song = new Song();
        $song->title = "goood bye";

        $song->save();
    }

    // show song using singer id
    public function show_song($id){
        $song = Singer::find($id)->songs;
        return $song;
    }
}
