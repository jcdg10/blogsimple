<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entradas;
use App\Models\Comentarios;

class BlogController extends Controller
{
    public function index()
    {	
    	$entradas = Entradas::orderBy('entradas.id','DESC')->select('entradas.id as entradas_id','users.id as users_id', 'users.name','entradas.titulo','entradas.contenido','entradas.created_at')->join('users', 'users.id', '=', 'entradas.autor_id')->paginate(5);
    	return view('blog.index', compact('entradas'));
    }

    public function entrada($id)
    {
    	$entrada = Entradas::where('entradas.id', $id)->select('entradas.id as entradas_id','users.id as users_id', 'users.name','entradas.titulo','entradas.contenido','entradas.created_at')->join('users', 'users.id', '=', 'entradas.autor_id')->first();
        $comentarios = Comentarios::where('comentarios.entradas_id', $id)->select('comentarios.id as comentarios_id','users.id as users_id', 'users.name','comentarios.comentario','comentarios.created_at')->join('users', 'users.id', '=', 'comentarios.autor_id')->get();

    	//if($entrada){
    		return view('blog.entrada', compact('entrada','comentarios'));
    	//}
    	/*else{
    		return \Response::view('blog.errors.404', array(), 404);
    	}*/
    	
    }
}
