<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = 'dispositivos';
    protected $primaryKey = 'id_dispositivo';
    protected $fillable = ['modelo', 'id_estado_energia'];

    public function estadoEnergia()
    {
        return $this->belongsTo(EstadoEnergia::class, 'id_estado_energia', 'id_estado_energia');
    }
}
