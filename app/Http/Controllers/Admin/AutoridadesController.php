<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutoridadesController extends Controller
{
    //

     public function index(Request $request)
    {
     
        $autoridades = Autoridades::first($request->get('nombre'))->orderBy('id', 'desc')->paginate(5);
        return view('admin.autoridades.index', compact('autoridades'));

        
    }

    public function create()
    {
        
        $dependencias = Dependencias::orderBy('id', 'cargo')->pluck('nombre', 'id');
        return view('admin.autoridades.create', compact('autoridades', 'dependencias'));
    }

    public function store(Request $request)
    {


        $data = [
            'cargo'          =>str_slug($request->get('cargo')),
            'nombre'          =>$request->get('nombre'),
            'primer_apellido'   => $request->get('primer_apellido'),
            'segundo_apellido'       => $request->get('segundo_apellido'),
            'fecha_nacimiento'         => $request->get('fecha_nacimiento'),
            'uuid'         => $request->get('uuid'),
           'dependencia_id'   => $request->get('dependencia_id')
            
        ];

        $autoridades = Autoridades::create($data);
        return redirect()->route('admin.autoridades.index');
        
    }

   public function show()
    {
        
    }

    public function edit(Autoridades $autoridades)
    {
         $autoridades = Autoridades::orderBy('id', 'desc')->pluck('nombre', 'id');
        $dependencias = Dependencias::orderBy('id', 'desc')->pluck('nombre', 'id');
        return redirect()->route('admin.autoridades.edit', compact('autoridades', 'dependencias'));
    }

    

   public function update(Request $request, Autoridades $autoridades)
    {
        $autoridades->fill($request->all());
        $autoridades->nombre = str_slug($request->get('cargo'));
                $updated = $autoridades->save();
        return redirect()->route('admin.autoridades.index');

    }

    public function destroy(Autoridades $autoridades)
    {
        $deleted = $autoridades->delete();

        return redirect()->route('admin.autoridades.index');
    }
}
