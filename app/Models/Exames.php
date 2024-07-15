<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
    use HasFactory;

    protected $table = 'exames';

    protected $fillable = [
        'id',
        'nome',
        'icone'
    ];
}
