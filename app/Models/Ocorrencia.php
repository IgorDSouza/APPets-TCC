<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;
    protected $table = 'ocorrencia';
    protected $fillable = [
        'tipo_ocorrencia',
        'conteudo_solucao',
        'titulo_ocorrencia',
        'usuario_id',
    ];
}
