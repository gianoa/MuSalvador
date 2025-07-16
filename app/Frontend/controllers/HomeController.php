<?php 

	namespace App\Frontend\Controllers;
	use core\controller;

	class HomeController extends controller{

		public function index() {
			$this->view('home/index');
		}
	}

 ?>