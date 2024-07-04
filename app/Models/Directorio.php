<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'codigoEntrada';
    public $incrementing = false;
}
