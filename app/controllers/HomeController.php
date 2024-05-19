<?php

namespace app\controllers;
use app\controllers\ContainerController;
 
class HomeController extends ContainerController{
    
    public function index(){

        print_r('controllerr indeeeex');

    }
    public function show($request){ 
        // var_dump($request->next);
        // echo"show";
        $this->view([
            'title' => 'Curso',
            'curso' => 'dustry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containi'
        ], 'home.home');
        
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