<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicoes extends Model
{
    use HasFactory;

    protected $fillable = ['informacoes_id', 'tipo', 'descricao', 'quantidade'];

    public function Informacoes()
    {
        return $this->belongsTo(Informacoes::class);
    }
}
