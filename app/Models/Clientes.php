<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable=['idcliente','idciudad','iddepartamento','nombre','apellido','tipodocumento','numerodocumento']
    protected $primaryKey='idcliente';
}
