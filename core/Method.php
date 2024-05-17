<?php

namespace core;

use app\classes\Uri;
use app\exceptions\MethodNotExistExeption;

class Method {

    private $uri;

    public function __construct() {
        $this->uri = Uri::uri();
    }

    public function load($controller) {
       $method = $this->getMethod();
       
       if(!method_exists($controller, $method)){
            throw new MethodNotExistExeption("Metodo nao existe: {$method}");
       } 
       return $method;
    }
 
    private function getMethod() {

		if (substr_count($this->uri, '/') > 1) {
			list($controller, $method) = array_values(array_filter(explode('/', $this->uri)));
			return $method;
		}

		return 'index';
	}


}