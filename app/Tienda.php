<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'marca', 'direccion','email'
    ];
}
