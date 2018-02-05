<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EstadoCivil;
use App\Sexo;
use App\Ocupacion;


class AjaxController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function estado(){
    	$Estados = EstadoCivil::all();
    	return view("config.estadosciviles",compact('Estados'));
    }

    public function ocupacion(){
    	$Ocupaciones = DB::table('ocupaciones')->get();
    	return view("config.ocupaciones",compact('Ocupaciones'));
    }

    public function sexo(){
    	$Sexos = DB::table('sexos')->get();
    	return view("config.sexos",compact('Sexos'));
    }
}
