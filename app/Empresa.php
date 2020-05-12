<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre', 'rfc', 'domicilio', 'municipio', 'estado', 'cp', 'activa'];
}
