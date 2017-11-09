<?php 


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Casa;

class CasaController extends Controller{

	public function getListaCasas(){
		$casa = new Casa(1,'Muy bien cuidada', 'https://images.adsttc.com/media/images/58c6/9db3/e58e/ce27/8c00/020a/newsletter/Casa_Kwantes_MVRDV_HR7.jpg?1489411495');

		$casa2 = new Casa(2,'Muy buena ubicación', 'https://www.construyehogar.com/wp-content/uploads/2016/02/Idea-fachada-casa-dos-pisos-moderna-coralhomes.com_.au-.jpg');

		$casas = array($casa,$casa2);

		return view('casas', ['casas'=> $casas]);
	}


}

 ?>