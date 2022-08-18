<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comentario = new  Comentarios();
        $comentario->autor_id = Auth::id();
        $comentario->entradas_id = $request->entradas_id;
        $comentario->comentario = $request->comentario;
        $comentario->save();

        Session::flash('message', 'Comentario agregado');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarios $comentarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentarios $comentarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentarios = Comentarios::where('id', $id)->delete();

        Session::flash('delete-message', 'Comentario eliminada');
        return redirect()->back();
    }
}
