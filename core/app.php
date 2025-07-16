<?php 
	namespace core;
	use ReflectionMethod;

	class app{
		protected $controller;
		protected $method = "index";
		protected $params = [];

		public function __construct($context = 'frontend'){

			$this->controller = $context === 'admincp' ? 'DashboardController' : 'HomeController';

			$url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL)) : [];

			$baseNameSpace = 'App\\'.ucfirst($context).'\Controllers\\';
			$controllerName = !empty($url[0])? ucfirst($url[0]).'Controller' : $this->controller;
		    $controllerClass = $baseNameSpace.$controllerName;

		    if (class_exists($controllerClass)) {
		    	$this->controller = new $controllerClass;
		    	unset($url[0]);
		    }else{
		     require __DIR__ . '/../App/Views/error/error_404.php';
   			 exit;
		    }


		    if (isset($url[1]) && method_exists($this->controller, $url[1])) {
		    	$this->method = $url[1];
		    	unset($url[1]);
		    }

		    $this->params = $url ? array_values($url): []; 

		   
		    try{
		    	$reflection = new ReflectionMethod($this->controller,$this->method);
		    	$requiredParams = $reflection->getNumberOfRequiredParameters();
		    	$totalParams = $reflection->getNumberOfParameters();

		    	if (count($this->params) < $requiredParams || count($this->params) > $totalParams) {
		    		 http_response_code(404);
			        require __DIR__ . '/../App/Views/error/error_404.php';
			        exit;
		    	}

		    	call_user_func([$this->controller,$this->method],$this->params);

		    }catch(\ReflectionException $e){
		    	 http_response_code(404);
		    	 require __DIR__ . '/../App/Views/error/error_404.php';
   				 exit;

		    }

		    

		}
	}


 ?>