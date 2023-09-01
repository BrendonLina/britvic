<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'veiculo_id',
    ];

    // public function veiculo()
    // {
        
    // }

    // public function usuarios()
    // {

    // }
}
