<?php

namespace App\Http\Controllers;

use App\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TiendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tiendas = Tienda::all();

        $title = 'Listado de tiendas';

        return view('tiendas.index', compact('title', 'tiendas'));
    }

    public function show(Tienda $tienda)
    {
        return view('tiendas.show', compact('tienda'));
    }

    public function create()
    {
        return view('tiendas.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => ['required','unique:tiendas,nombre'],
            'marca' => 'required',
            'direccion' => 'required',
            'email' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'marca.required' => 'La marca es obligatoria',
            'direccion.required' => 'La dirección es obligatoria',
            'email.required' => 'El precio es obligatorio',
            'nombre.unique' => 'El nombre de la dirección ya esta en uso',
        ]);

        Tienda::create([
            'nombre' => $data['nombre'],
            'marca' => $data['marca'],
            'direccion' => $data['direccion'],
            'email' => $data['email'],
            
        ]);

        return redirect()->route('tiendas.index');
    }

    public function edit(Tienda $tienda)
    {
        return view('tiendas.edit', ['tienda' => $tienda]);
    }

    public function update(Tienda $tienda)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'marca' => 'required',       
            'email' => 'required',
        ],[
            'nombre.required' => 'El campo nombre es obligatorio',
            'marca.required' => 'El campo marca es obligatorio',
            'email.required' => 'El email es obligatorio',          
        ]);

        $tienda->update($data);

        return redirect()->route('tiendas.show', ['tienda' => $tienda]);
    }

    function destroy(Tienda $tienda)
    {
        $tienda->delete();

        return redirect()->route('tiendas.index');
    }
}
