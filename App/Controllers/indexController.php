<?php

	namespace App\Controllers;
    $caminho = '../App/Views/index/';
    class IndexController {

        public $caminho='../App/Views/index/';

		public function index() {

            require_once $this->caminho.'index.phtml';
		}

		public function sobreNos() {
			require_once $this->caminho.'sobreNos.phtml';
		}

		public function contato() {
			require_once $this->caminho.'contato.phtml';
		}

		public function teste() {

			require_once "../App/Views/teste.php";
			//echo 'ainda não deu';
		}

	}





?>