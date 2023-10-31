<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Song;
use App\Models\Singer;


class SingerController extends Controller
{
    public function add_singer(){
        $singer = new Singer();
        $singer->name = 'adnan sami';
        $singer->save();

        $songids = [1,2,4];
        $singer->songs()->attach($songids); 
    }

    // show singer usig song id
    public function show_singer($id){
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
