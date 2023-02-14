<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocePlazaE extends Model
{
    protected $table = 'doce_plazae';
    use HasFactory;
    protected $fillable=[
        'nombre',
        'imagen',
    ];
}
