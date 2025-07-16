<?php 
	spl_autoload_register(function($class){
		$base = str_replace('\\','/',$class);
		$file= __DIR__.'/'.$base.'.php';

		if (file_exists($file)) {
			require_once $file;
		}
	});

 ?>