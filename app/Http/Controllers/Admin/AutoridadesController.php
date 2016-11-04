<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Autoridades;
use App\Dependencias;

class AutoridadesController extends Controller
{
    //

     public function index(Request $request)
    {
     
        $autoridades = Autoridades::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);

        return view('admin.autoridades.index', compact('autoridades'));

        
    }

    public function create()
    {
        
        $dependencias = Dependencias::orderBy('id', 'cargo')->pluck('name', 'id');
        return view('admin.autoridades.create', compact('autoridades', 'dependencias'));
    }

    public function store(Request $request)
    {


        $data = [
            'cargo'          =>str_slug($request->get('cargo')),
            'name'          =>$request->get('name'),
            'primer_apellido'   => $request->get('primer_apellido'),
            'segundo_apellido'       => $request->get('segundo_apellido'),
            'fecha_nacimiento'         => $request->get('fecha_nacimiento'),
              'email'         => $request->get('email'),
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
          $dependencias = Dependencias::orderBy('id', 'desc')->pluck('name', 'id');
        $autoridades = Autoridades::orderBy('id', 'desc')->pluck('name', 'id');
        return view('admin.autoridades.edit', compact('dependencias', 'autoridades'));
         
    }

    

   public function update(Request $request, Autoridades $autoridades)
    {
        $autoridades->fill($request->all());
        $autoridades->name = str_slug($request->get('name'));
                $updated = $autoridades->save();
        return redirect()->route('admin.autoridades.index');

    }

    public function destroy(Autoridades $autoridades)
    {
        $deleted = $autoridades->delete();

        return redirect()->route('admin.autoridades.index');
    }
}
