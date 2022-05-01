<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['url','artista_id'];

    //Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\Artista');
    }
}
