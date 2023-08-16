<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    use HasFactory;
    protected $fillable=['idadminitrador','nombre','apellido','numerodocumento','tipo'];
    protected $primaryKey='idadminitrador';
}
