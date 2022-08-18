<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = ['comentario','autor_id','entradas_id'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function entradas()
    {
        return $this->belongsToMany(Entradas::class);
    }
}
