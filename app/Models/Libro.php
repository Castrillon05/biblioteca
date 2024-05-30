<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model

{
    protected $fillable = ['titulo', 'autor', 'isbn', 'fecha_publicacion', 'cantidad_disponible'];
}
