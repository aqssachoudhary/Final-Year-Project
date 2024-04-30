<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionYearStudent extends Model
{
    use HasFactory;
     protected $table='session_years_student';

     public function user()
{
    return $this->belongsTo(User::class, 'student_id');
}
}
