<?php
	class Paciente{
		private $nome;
		private $sobrenome;
		private $cpf;
		private $sexo;
		private $telefone;
		private $endereco;

		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
	}
?>