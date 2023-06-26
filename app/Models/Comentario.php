<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    /*RELACION INGRESDA*/
    public function Foto(){
        return $this->belongsTo(Foto::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
