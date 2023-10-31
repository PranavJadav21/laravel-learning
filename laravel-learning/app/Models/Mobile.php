<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;

class Mobile extends Model
{
    use HasFactory;

    // Inverse of one to one relationships
    
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
