<?php

    namespace GMR\classes;

    use GMR\interfaces;

	require_once("GMR/interfaces/grau-de-importancia.php");
	require_once("GMR/interfaces/endereco-cobranca.php");

	abstract class Cliente implements interfaces\grauDeImportanciaCliente,interfaces\enderecoCobranca{

		private $nome;
		private $cpf;
		private $endereco;
		private $telefone;
		private $grauDeImportancia;
		private $enderecoCobranca;

		public function __construct($nome,$cpf,$endereco,$telefone){

			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->telefone = $telefone;
			$this->enderecoCobranca = "Não informado";
		}

		public function setEnderecoCobranca($endereco){

			$this->enderecoCobranca = $endereco;
		}

		public function getNome(){

			return $this->nome;
		}

		public function getCpf(){

			return $this->cpf;
		}

		public function getEndereco(){

			return $this->endereco;
		}

		public function getTelefone(){

			return $this->telefone;
		}

		public function setGrauDeImportancia($valor){

			$this->grauDeImportancia = $valor;
		}

		public function getGrauImportancia(){

			return $this->grauDeImportancia;
		}

		public function getEnderecoCobranca(){

			return $this->enderecoCobranca;
		}

		public function toString(){

			return "nome: " . $this->nome . "<hr>".
			"telefone: " . $this->telefone. "<hr>" .
			"endereço: " . $this->endereco. "<hr>" .
			"cpf: " . $this->cpf . "<hr>" .
			"Grau de importância: " . $this->grauDeImportancia . "<hr>" .
			"Endereço de cobrança: " . $this->enderecoCobranca;
		}
	}