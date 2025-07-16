<?php 
namespace App\Frontend\controllers;
use core\controller; 

class CharacterController extends controller{

	public function index(){
		$this->view('character/index');
	} 
}


?>