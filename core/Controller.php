<?php 

namespace core;

use app\classes\Uri; 
use app\exceptions\ControllerNotExistException;

class Controller {

    private $uri;
    private $folder = '../app/controllers';
    private $namespace = 'app\controllers';
/*************/
    public function __construct(){
        $this->uri = Uri::uri();
    }
/*************/
    public function load(){
        if(!$this->isHome()){ 

            $controller = $this->isNotHome(); 
            $controller = $this->openFolder($controller);

            return $this->instantiateController($controller);
        }
       return $this->instantiateController('HomeController');
    } 
/*************/
    public function isHome(){
        return ($this->uri == '/');
    }
/*************/
    private function isNotHome(){
        if(substr_count($this->uri, '/') > 1){
            list($controller) = array_values(array_filter(explode('/', $this->uri)));
            return ucfirst($controller) . 'Controller';
        }
        return ucfirst(ltrim($this->uri, '/')) . 'Controller';
    }
/*************/
    public function openFolder($valor){  
        $folder = dir($this->folder);
        while(($arquivo = $folder->read()) !== false) {
            if($arquivo == $valor.'.php'){
                $arquivo = explode('.', $arquivo)[0]; 
                return $arquivo;
            }
        } 
        throw new ControllerNotExistException('Controller nao existe.');
    }
/*************/
    private function instantiateController($valor){ 
        $controller = $this->namespace . '\\' . $valor;
		return new $controller;
    }

}