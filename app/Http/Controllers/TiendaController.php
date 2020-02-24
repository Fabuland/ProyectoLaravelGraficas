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
            'name' => ['required','unique:tiendas,name'],
            'company' => 'required',
            'address' => 'required',
            'email' => 'required',
        ], [
            'name.required' => 'El nombre de la tienda es obligatorio',
            'comapany.required' => 'El nombre de la compañía es obligatorio',
            'address.required' => 'La dirección es obligatoria',
            'email.required' => 'El email es obligatorio',
            'name.unique' => 'El nombre ya esta en uso',
        ]);

        Tienda::create([
            'name' => $data['name'],
            'company' => $data['company'],
            'address' => $data['address'],
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
            'name' => 'required',
            'company' => 'required',
            'address' => 'required',       
            'email' => 'required',
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'company.required' => 'El campo compañia es obligatorio',
            'address.required' => 'La dirección es obligatoria',
            'email.required' => 'El email es obligatorio',
            'name.unique' => 'El nombre ya esta en uso',          
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
