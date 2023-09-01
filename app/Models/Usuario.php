<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'veiculo_id',
        'reserva'
    ];

    public function veiculos(){

        return $this->hasMany('App\Models\Veiculo');
        
        }
}
