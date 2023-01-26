<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    protected $table = 'usuario';

    public function rules() {
        return [
            'nome' => 'required'
        ];
    }
}
