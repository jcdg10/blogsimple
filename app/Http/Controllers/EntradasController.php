<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = Entradas::orderBy('entradas.id','DESC')->select('entradas.id as entradas_id','users.id as users_id', 'users.name','entradas.titulo','entradas.contenido','entradas.created_at')->join('users', 'users.id', '=', 'entradas.autor_id')->get();
        return view('administrador.entradas.index', compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.entradas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "titulo" => 'required|unique:entradas',
            "contenido" => "required"
        ],
            [
                'titulo.required' => 'Ingresa el título',
                'titulo.unique' => 'El título debe ser único',
                'contenido.required' => 'Debes ingresar el contenido de la entrada',
            ]
        );

        $entrada = new  Entradas();
        $entrada->autor_id = Auth::id();
        $entrada->titulo = $request->titulo;
        $entrada->contenido = $request->contenido;
        $entrada->save();

        Session::flash('message', 'Entrada creada');
        return redirect()->route('entradas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function show(Entradas $entradas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrada = Entradas::where('id',$id)->first();
        return view('administrador.entradas.edit', compact('entrada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "titulo" => 'required|unique:entradas',
            "contenido" => "required"
        ],
            [
                'titulo.required' => 'Ingresa el título',
                'titulo.unique' => 'El título debe ser único',
                'contenido.required' => 'Debes ingresar el contenido de la entrada',
            ]
        );

        $entrada = Entradas::find($id);
        $entrada->titulo = $request->titulo;
        $entrada->contenido = $request->contenido;
        $entrada->save();

        Session::flash('message', 'Entrada modificada');
        return redirect()->route('entradas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entradas = Entradas::where('id', $id)->delete();

        Session::flash('delete-message', 'Entrada eliminada');
        return redirect()->route('entradas.index');
    }
}
