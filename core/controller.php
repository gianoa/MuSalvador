<?php 
namespace core;

	class controller{

		protected function view($view,$data = []){
			$file = __DIR__ . '/../App/Views/'.$view.'.php';

			if (file_exists($file)) {
				extract($data);
				require $file;
			}else{
				http_response_code(500);
				die("Vista '$view' no encuentra en '$file'");
			}

		}

	}

 ?>