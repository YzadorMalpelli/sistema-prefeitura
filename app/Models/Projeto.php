<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'data_inicio',
        'data_fim',
        'orcamento',
        'secretaria_id',
    ];

    public function secretaria()
    {
        return $this->belongsTo(Secretaria::class);
    }


    public function bairros()
    {
        return $this->belongsToMany(Bairro::class, 'bairro_projeto');
    }
    }