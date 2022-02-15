<?php

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;
	use App\Models\Produto;

    class IndexController extends Action {

        //public $caminho='../App/Views/index/';

		public function index() {
            
            //$this->view->dados = ['armario', 'cama', 'cadeira'];

			//instancia de conexão
			$conn = Connection::getDb();

			//instancia de modelo
			$produto = new Produto($conn);

			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;

            //require_once $this->caminho.'index.phtml';
            $this->render('index', 'layout1');
		}

		public function sobreNos() {
            //$this->view->dados = ['Smartphone', 'Notebook', 'Mouse'];
            //require_once $this->caminho.'sobreNos.phtml';
            //instancia de conexão
			$conn = Connection::getDb();

			//instancia de modelo
			$produto = new Produto($conn);

			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
            $this->render('sobreNos', 'layout1');
		}

		public function contato() {
            //$this->view->dados = ['telefone'];
            //require_once $this->caminho.'contato.phtml';
            //instancia de conexão
			$conn = Connection::getDb();

			//instancia de modelo
			$produto = new Produto($conn);

			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
            $this->render('contato', 'layout2');
		}

		public function teste() {

			//$this->view->dados = ['Nintendo Switch', 'Playstation 4', 'Xbox'];
			//instancia de conexão
			$conn = Connection::getDb();

			//instancia de modelo
			$produto = new Produto($conn);

			$produtos = $produto->getProdutos();

			$this->view->dados = $produtos;
			$this->render('teste', 'layout3');

		}

	}

?>