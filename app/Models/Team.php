<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
    public function studium()
    {
        return $this->belongsTo(Studium::class);
    }
    
}
