<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = ['libro_id', 'usuario_id', 'fecha_prestamo', 'fecha_devolucion'];
}
