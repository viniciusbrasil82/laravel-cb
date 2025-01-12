<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
    protected $fillable = [
        'tipo',
        'valor',
        'multa',
        'status',        
    ];
    //$table->int('cliente_id');      
    //$table->int('contrato_id');    
}
