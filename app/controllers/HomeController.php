<?php

namespace app\controllers;
 
class HomeController {
    
    public function index(){

        print_r('controllerr indeeeex');

    }
    public function show($request){

        var_dump($request->next);
        echo"show";
        
    }
    public function create(){

        
    }
    public function store(){

        
    }
    public function update(){

        
    }
    public function delete(){

        
    }
}