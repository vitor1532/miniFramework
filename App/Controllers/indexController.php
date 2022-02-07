<?php

	namespace App\Controllers;
    $caminho = '../App/Views/index/';
    class IndexController {

        //public $caminho='../App/Views/index/';

		public function index() {
            
            //require_once $this->caminho.'index.phtml';
            $this->render('index');
		}

		public function sobreNos() {
			//require_once $this->caminho.'sobreNos.phtml';
            $this->render('sobreNos');
		}

		public function contato() {
			//require_once $this->caminho.'contato.phtml';
            $this->render('contato');
		}

		public function teste() {

			require_once "../App/Views/teste.php";
			//echo 'ainda não deu';
		}

        public function render($view) {
            require_once "../App/Views/index/".$view.".phtml";
        }

	}





?>