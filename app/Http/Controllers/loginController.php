<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;


class loginController extends BaseController
{
	public function login(Request $req)
	{
		$username = $req->input('nombre');
		$apellido = $req->input('apellido');

		$checkinLogin = DB::table('usuario')->where(['nombre'=>$username,'apellido'=>$apellido])->get();
		
		if(count($checkinLogin)>0){
			echo "Exit";

		    $users = DB::table('usuario')->get();

		    foreach ($users as $user)
		    {
		        print_r($user->nombre);
		       	echo ("<br>");
		    }

		}
		else{
			echo "Error";
		}
	}


	public function insert(Request $req){
		$username = $req->input('nombreRegistrar');
		$apellido = $req->input('apellidoRegistrar');

		$data = array('nombre'=>$username,'apellido'=>$apellido);
		
		$success = DB::table('usuario')->insert($data);

		if(count($success)>0){
			echo ("exito");
		}
		else{
			echo ("no sirvió");
		}
	
	}

	public function delete()
    
}
