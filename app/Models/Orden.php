<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    protected $filiable=[
        'mesa_id','estado',
    ];
    public function mesas(){
        return $this->belongsTo(Mesa::class);
    }
    public function platos(){
        return $this->belongsTo(Plato::class)->withPivot('cantidad');
    }
}
