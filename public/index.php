<?php
 
require "../bootstrap.php";
use core\Controller;
use core\Method;
use core\Parameters; 

try {

    //verifica se o controller existe 
    //e devolve ja instanciado 
    $controller = new Controller; 
    $controller = $controller->load();
    
    //verifica se o metodo existe 
    //e devolve o metodo ou o index
    $method = new Method;
    $method = $method->load($controller);
  
    $parameters = new Parameters;
    $parameters = $parameters->load();
  
    //chama o metodo dentro do controller que 
    //ja foi instanciado e passa o parametro
    //SomeController->index($parameters);
    $controller->$method($parameters);
 
}catch(\Exception $e){
    echo $e->getMessage();
}