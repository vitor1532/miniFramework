<?php

	namespace App\Controllers;

    use MF\Controller\Action;

    class IndexController extends Action {

        //public $caminho='../App/Views/index/';

		public function index() {
            $this->view->dados = ['armario', 'cama', 'cadeira'];

            //require_once $this->caminho.'index.phtml';
            $this->render('index', 'layout1');
		}

		public function sobreNos() {
            $this->view->dados = ['Smartphone', 'Notebook', 'Mouse'];
            //require_once $this->caminho.'sobreNos.phtml';
            $this->render('sobreNos', 'layout1');
		}

		public function contato() {
            $this->view->dados = ['telefone'];
            //require_once $this->caminho.'contato.phtml';
            $this->render('contato', 'layout2');
		}

		public function teste() {

			require_once "../App/Views/teste.php";
		}

	}

?>