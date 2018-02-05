<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
  	protected $table = 'ocupaciones';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
    	'ocupacion',
    ];

    protected $hidden =[
    	 'id',
    ];
}
