<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    protected $filiable=[
        'categoria_id','name','descripcion','precio',
    ];
    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }
    
    public function ordenes(){
        return $this->belongsToMany('App\Models\Orden');
    }
    
}
