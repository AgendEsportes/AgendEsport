<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class espacos extends Model
{
    protected $table = 'espacos';
    protected $fillable = [
        'nome',
        'desc',
        'disponibilidade',
    ];
}
