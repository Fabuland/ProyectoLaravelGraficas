<?php

namespace App\Http\Controllers;

use App\Grafica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GraficaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $graficas = Grafica::all();

        $title = 'Listado de graficas';

        return view('graficas.index', compact('title', 'graficas'));
    }

    public function show(Grafica $grafica)
    {
        return view('graficas.show', compact('grafica'));
    }

    public function create()
    {
        return view('graficas.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => ['required','unique:graficas,nombre'],
            'modelo' => 'required',
            'compania' => 'required',
            'marca' => 'required',
            'precio' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'modelo.required' => 'El modelo es obligatorio',
            'compania.required' => 'La compania es obligatoria',
            'marca.required' => 'La marca es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'nombre.unique' => 'El nombre de la grafica ya esta en uso',
        ]);

        Grafica::create([
            'nombre' => $data['nombre'],
            'modelo' => $data['modelo'],
            'compania' => $data['compania'],
            'marca' => $data['marca'],
            'precio' => $data['precio']
        ]);

        return redirect()->route('graficas.index');
    }

    public function edit(Grafica $grafica)
    {
        return view('graficas.edit', ['grafica' => $grafica]);
    }

    public function update(Grafica $grafica)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'modelo' => 'required',
            'compania' => 'required',
            'marca' => 'required',          
            'precio' => 'required',
        ],[
            'nombre.required' => 'El campo nombre es obligatorio',
            'modelo.required' => 'El campo modelo es obligatorio',
            'compania.required' => 'El campo compania es obligatorio',
            'marca.required' => 'La marca es obligatoria',
            'precio.required' => 'El campo salida es obligatorio',          
        ]);

        $grafica->update($data);

        return redirect()->route('graficas.show', ['grafica' => $grafica]);
    }

    function destroy(Grafica $grafica)
    {
        $grafica->delete();

        return redirect()->route('graficas.index');
    }
}
