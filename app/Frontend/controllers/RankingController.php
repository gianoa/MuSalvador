<?php 
	namespace App\Frontend\Controllers;
	use core\controller; 

	class RankingController extends controller{

		public function index(){
			$this->view('ranking/index');
		}

	}

 ?>