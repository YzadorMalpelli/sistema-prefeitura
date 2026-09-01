<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'endereco'
    ];

    public function projetos()
{
    return $this->hasMany(Projeto::class);
 }
}