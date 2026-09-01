<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $fillable = ['nome'];

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'bairro_projeto');
    }
}
