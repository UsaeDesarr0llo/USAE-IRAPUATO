<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocePlazaF extends Model
{
    protected $table = 'doce_plazaf';
    use HasFactory;
    protected $fillable=[
        'nombre',
        'imagen',
    ];
}
