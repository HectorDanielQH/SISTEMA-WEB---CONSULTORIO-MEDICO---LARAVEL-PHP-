<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{

    use HasFactory;

    public $table = "especialidades";

    use HasFactory;

    protected $fillable = [
        'nombre_especialidad'
    ];

    public function medicos(){
        return $this->hasMany(Medico::class, 'id');
    }

    public function tipos(){
        return $this->belongsTo(Tipo::class, 'especialidad_id');
    }
}
