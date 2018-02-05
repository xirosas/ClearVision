<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
	protected $table = 'estadosciviles';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
    	'estado',
    ];

    protected $hidden =[
    	 'id',
    ];
}
