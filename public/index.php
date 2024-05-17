<?php
 
require "../bootstrap.php";
use core\Controller;
use core\Method;
use core\Parameters; 

try {

    $controller = new Controller; 
    $controller = $controller->load();
    
    $method = new Method;
    $method = $method->load($controller);

    $parameters = new Parameters;
    $parameters = $parameters->load();
  
    //SomeController->index($parameters);
    $controller->$method($parameters);
 
}catch(\Exception $e){
    echo $e->getMessage();
}