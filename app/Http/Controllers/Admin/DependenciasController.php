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
        
            $this->validate($request, [
          'name' => 'required',
            'uuid' => 'required',

        ]);

        $data = [
        
            'name' =>$request->get('name'),
            'uuid'  => $request->get('uuid')
            
        ];

        $dependencias = Dependencias::create($data);
        return redirect()->route('admin.dependencias.index');
    }

   public function edit(Dependencias $dependencias)
    {
        return view('admin.dependencias.edit', compact('dependencias'));
    }

 public function update(Request $request, Dependencias $dependencias)
    {
        $dependencias->fill($request->all());
        $updated = $dependencias->save();
      
        $dependencias = Dependencias::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);
        return view('admin.dependencias.index', compact('dependencias'));
    }


 public function destroy(Request $request, Dependencias $dependencias)
    {
        $deleted = $dependencias->delete();
        $dependencias = Dependencias::name($request->get('name'))->orderBy('id', 'desc')->paginate(5);
        return view('admin.dependencias.index', compact('dependencias'));
    }

 
}
