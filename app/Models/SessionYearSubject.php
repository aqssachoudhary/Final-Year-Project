<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionYearSubject extends Model
{
    use HasFactory;
    protected $table='session_year_subject';

    

     public function sessionYear()
    {
        return $this->belongsTo(SessionYear::class, 'session_years_id');
    }
}
