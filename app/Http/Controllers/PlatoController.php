<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
   public function index(){
    $platos = Plato::with('categoria')->get();
    return view('platos.index', compact('platos'));
   }
   
   public function store(Request $request){
    $plato = Plato::create($request->all());
    return redirect()->route('platos.index');
   }

   public function update(Request $request, Plato $plato){
    $plato->update($request->all());
    return redirect()->route('platos.index');
   }
   public function destroy(Plato $plato){
    $plato->delete();
    return redirect()->route('platos.index');
   }
}
