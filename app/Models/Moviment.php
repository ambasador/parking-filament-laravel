<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
    use HasFactory;
    protected $fillable = ['vehicle_id', 'space_id', 'partner_id', 'inputed_at', 'leaved_at'];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
      }
      public function space(){
        return $this->belongsTo(Space::class);
      }
      public function partner(){
        return $this->belongsTo(Partner::class);
      }
      public function payment(){
        return $this->hasOne(Payment::class);
      }
}
