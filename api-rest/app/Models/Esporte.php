<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esporte extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules(){
        return [ 
            'nome' => 'required|unique:esportes|min:3',
            'imagem' => 'required'
        ];

    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.unique' => 'O nome do esporte já existe',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres'
        ];

    }


}
