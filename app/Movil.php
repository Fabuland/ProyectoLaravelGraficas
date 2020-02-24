<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand', 'company','model','price'
    ];
}
