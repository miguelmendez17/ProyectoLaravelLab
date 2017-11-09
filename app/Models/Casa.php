<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Casa extends Model{
	public $id;
	public $descripcion;
	public $link;

	function __construct($id, $descripcion, $link){
		$this->id = $id;
		$this->descripcion = $descripcion;
		$this->link = $link;
	}
}


 ?>