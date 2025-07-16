<?php 

namespace App\Frontend\controllers;
use core\controller;

class UserpanelController extends controller{

	public function index(){
		$this->view("userpanel/index");
	}

}


 ?>