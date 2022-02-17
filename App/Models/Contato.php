<?php

	namespace App\Models;

	class Contato {

		protected $db;

		public function __construct(\PDO $db) {
			$this->db = $db;
		}

		public function getContatos() {
			
			$query = "select nome, email, telefone
				from tb_contatos
			";
			return $this->db->query($query)->fetchAll();
		}
	}

?>