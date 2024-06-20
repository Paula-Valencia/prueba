<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $filiable=[
        'numero','capacidad',
    ];
    public function ordenes(){
        return $this->hasMany(Orden::class);
    }
}
