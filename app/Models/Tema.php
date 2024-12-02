<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    // app/Models/Tema.php


    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function subtemas()
    {
        return $this->hasMany(Subtema::class);
    }
}


