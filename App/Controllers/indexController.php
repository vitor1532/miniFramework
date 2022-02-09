<?php

	namespace App\Controllers;
    //$caminho = '../App/Views/index/';
    class IndexController {

        private $view;

        public function __construct() {
            $this->view = new \stdClass();// stdClass -> standart Class
        }

        //public $caminho='../App/Views/index/';

		public function index() {
            $this->view->dados = ['armario', 'cama', 'cadeira'];

            //require_once $this->caminho.'index.phtml';
            $this->render('index');
		}

		public function sobreNos() {
            $this->view->dados = ['Smartphone', 'Notebook', 'Mouse'];
            //require_once $this->caminho.'sobreNos.phtml';
            $this->render('sobreNos');
		}

		public function contato() {
            $this->view->dados = ['telefone'];
            //require_once $this->caminho.'contato.phtml';
            $this->render('contato');
		}

		public function teste() {

			require_once "../App/Views/teste.php";
			//echo 'ainda não deu';
		}

        public function render($view) {
            $classeAtual = get_class($this);

            $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);
            $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

            require_once "../App/Views/".$classeAtual."/".$view.".phtml";
        }

	}

?>