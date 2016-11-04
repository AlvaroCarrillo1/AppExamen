<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dependencias;
class DependenciasController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dependencias = Dependencias::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);
        return view('admin.dependencias.index', compact('dependencias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('admin.dependencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        
        $data = [
        
            'nombre' =>$request->get('nombre'),
            'uuid'  => $request->get('uuid')
            
        ];

        $dependencias = Dependencias::create($data);
        return redirect()->route('admin.dependencias.index');
    }

 public function destroy(Dependencias $dependencias)
    {
        $deleted = $dependencias->delete();
        $dependencias = Dependencias::all();
        //dd($provider);
        return view('admin.dependencias.index', compact('dependencias'));
    }

 
}
