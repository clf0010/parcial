<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'editoria', 'año', 'biblioteca', 'autor', 'tipo', 'area', 'dia'
    ];

}
