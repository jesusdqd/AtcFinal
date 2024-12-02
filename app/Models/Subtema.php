<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtema extends Model
{



    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'tema_id'];

    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
}


