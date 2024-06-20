<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatosOrdens extends Model
{
    use HasFactory;
    public function ordenes(){
        return $this->belongsToMany(Orden::class);
    }
    public function platos(){
        return $this->belongsTo(Plato::class)->withPivot('cantidad');
    }
}
