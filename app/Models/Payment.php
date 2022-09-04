<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['moviment_id', 'price', 'cpfcliente', 'namecliente', 'vehiclemodel', 'vehicleplate', 'discount', 'inputed_at', 'leaved_at'];

    public function moviment(){
        return $this->belongsTo(Moviment::class);
    }
}
