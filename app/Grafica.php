<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafica extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'modelo', 'compania','marca','precio'
    ];
}
