<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionYear extends Model
{
    use HasFactory;
    
     protected $table='session_years';

      public function subjects()
    {
        return $this->hasMany(SessionYearSubject::class, 'session_years_id');
    }

  public function students()
{
    return $this->hasMany(SessionYearStudent::class, 'session_years_id');
}

}
