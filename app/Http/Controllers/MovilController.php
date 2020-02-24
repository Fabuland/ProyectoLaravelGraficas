<?php

namespace App\Http\Controllers;

use App\Movil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MovilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $moviles = Movil::all();

        $title = 'Listado de moviles';

        return view('moviles.index', compact('title', 'moviles'));
    }

    public function show(Movil $movil)
    {
        return view('moviles.show', compact('movil'));
    }

    public function create()
    {
        return view('moviles.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required','unique:moviles,name'],
            'brand' => 'required',
            'company' => 'required',
            'model' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'El nombre es obligatorio',
            'brand.required' => 'La marca es obligatoria',
            'company.required' => 'La compañia es obligatoria',
            'model.required' => 'El modelo es obligatorio',
            'price.required' => 'El precio es obligatorio',
            'name.unique' => 'El nombre del movil ya esta en uso',
        ]);

        Movil::create([
            'name' => $data['name'],
            'brand' => $data['brand'],
            'company' => $data['company'],
            'model' => $data['model'],
            'price' => $data['price']
        ]);

        return redirect()->route('moviles.index');
    }

    public function edit(Movil $movil)
    {
        return view('moviles.edit', ['movil' => $movil]);
    }

    public function update(Movil $movil)
    {
        $data = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'company' => 'required',    
            'model' => 'required',      
            'price' => 'required',
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'brand.required' => 'El campo marca es obligatorio',
            'company.required' => 'El campo compañia es obligatorio',
            'model.required' => 'El modelo es obligatorio',
            'price.required' => 'El campo salida es obligatorio',
            'name.unique' => 'El nombre del movil ya esta en uso',          
        ]);

        $movil->update($data);

        return redirect()->route('moviles.show', ['movil' => $movil]);
    }

    function destroy(Movil $movil)
    {
        $movil->delete();

        return redirect()->route('moviles.index');
    }
}
