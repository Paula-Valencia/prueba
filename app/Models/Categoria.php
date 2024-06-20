<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $filiable=[
        'name','color'
    ];
    public function ordenes(){
        return $this->hasMany(Plato::class);
    }
    public function platos(){
        return $this->hasMany(Plato::class);
    }
    
}
