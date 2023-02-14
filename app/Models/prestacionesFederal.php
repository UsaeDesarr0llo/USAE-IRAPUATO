<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestacionesFederal extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'pdf',
    ];
}
