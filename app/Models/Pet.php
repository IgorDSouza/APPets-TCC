<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'raca',
        'altura',
        'comprimento',
        'raca',
        'idade',
        'peso',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
  
    protected $table='pet';
}
