<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaFamosa extends Model
{
    protected $table = 'historias_famosas';
    protected $fillable = ['titulo', 'contenido', 'imagen'];
}
