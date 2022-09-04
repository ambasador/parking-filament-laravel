<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cnpj'];
    public function space(){
        return $this->hasMany(Space::class);
      }
}
