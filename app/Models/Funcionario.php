<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cargo'
    ];

    public function cnh()
    {
        return $this->hasOne(Cnh::class);
    }
} 