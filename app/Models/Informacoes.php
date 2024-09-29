<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacoes extends Model
{
    protected $fillable = ['pesoatual','idade','altura','metapeso'];
}
