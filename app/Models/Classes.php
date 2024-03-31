<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

     protected $table = 'classes';
         

    public function sectionsList(){

        return $this->hasMany(Sections::class);
    }
}
