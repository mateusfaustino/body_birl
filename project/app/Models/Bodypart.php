<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodypart extends Model
{
    
    use HasFactory;
    public function unit()
    {
        return $this->hasOne(Unit::class);
    }

    public function users(){
        $this->belongsToMany(User::class);
    }
}
