<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espaco extends Model
{
    use HasFactory;
    protected $fillable = ['disponivel', 'esporte'];

    public function rules() {
        return [
            'disponivel' => 'required',
            'esporte' => 'required'
        ];
    }

    public function esporte() {
        return $this->belongsTo('App\Models\Esporte');
    }
}