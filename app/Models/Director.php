<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $table='documento';
    protected $primaryKey='id_documento';

    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'documento',
    ];
}
