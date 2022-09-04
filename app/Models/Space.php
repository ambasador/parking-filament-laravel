<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $fillable = ['parking_id', 'externalid', 'active'];

    public function parking(){
        return $this->belongsTo(Parking::class);
    }

    public function moviment(){
      return $this->hasOne(Moviment::class);
    }
    public function isBusy(){
        
        $moviments = Moviment::where('space_id', $this->id)->get();

        if(!$moviments){
            return false;
        }

        foreach($moviments as $moviment){

            if($moviment->inputed_at && !$moviment->leaved_at){

                return true;

            }

        }
        
        return false;

    }
}
