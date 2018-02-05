<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'sexos';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
    	'sexo',
    ];

    protected $hidden =[
    	 'id',
    ];
