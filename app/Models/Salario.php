<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    use HasFactory;


    protected $fillable = [
        'Salario',
        'Bono'
    ];

    public function medicos(){
        return $this->hasMany(Medico::class, 'id');
    }

    public function secretarias(){
        return $this->hasMany(Secretaria::class, 'id');
    }
}
