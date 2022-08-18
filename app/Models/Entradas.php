<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    protected $fillable = ['autor_id','titulo','contenido'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class);
    }
}
