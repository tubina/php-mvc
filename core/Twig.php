<?php

namespace core;

class Twig {
 
    private $twig;
	private $functions = [];

	public function loadTwig() {
		$this->twig = new \Twig\Environment($this->loadViews(), [
			'debug' => true,
			// 'cache' => '/cache',
			'auto_reload' => true,
		]);

		return $this->twig;
	}

	private function loadViews() {
		return new \Twig\Loader\FilesystemLoader('../app/views/');
	}

	public function loadExtensions(){
		return $this->twig->addExtension(new Project_Twig_Extension());
	}

	private function functionsToView($name, \Closure $callback){
		return new \Twig\TwigFunction($name, $callback);
	}

	public function loadFunctions(){
		require '../app/functions/twig.php';

		foreach($this->functions as $key => $value){
			$this->twig->addFunction($this->functions[$key]);
		}
	}

}