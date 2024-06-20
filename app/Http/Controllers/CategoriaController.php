<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    public function store(Request $request){
        $categorias = Categoria::create($request->only('name', 'color'));
        return redirect()->route('categorias.index');
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->only('name', 'color'));
        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
    }

