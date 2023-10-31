<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    
    // inverse method
    public function songs(){
        return $this->belongsToMany(Song::class, 'singer_songs');
    }
}
