<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
 protected $fillable =[    
         "classes_id"
    
    ];

     protected $table = 'sections';

    public function classDetail()
    {
        return $this->belongsTo(Classes::class,'classes_id','id');
    }
}
