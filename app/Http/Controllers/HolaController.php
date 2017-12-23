<?php 


namespace Miette\Http\Controllers;


class HolaController extends Controller{

	public function chao($nombre){
		return "Chao {$nombre}!";
	}
}