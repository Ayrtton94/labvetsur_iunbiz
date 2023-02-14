<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =['id', 'nombre', 'linea_id', 'categoria_id', 'color', 'imagen', 'precio', 'fecha_ini', 'status', 'ean','code_father', 'code_mother', 'code_son'];
}
