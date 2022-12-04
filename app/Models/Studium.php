<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Studium extends Model
{
    use HasFactory;
    protected $table = "studiums";
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
