<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esportes extends Model
{
    protected $table = 'esportes';
    protected $fillable = [
        'nome',
        'desc',
        'disponibilidade',
    ];
}
