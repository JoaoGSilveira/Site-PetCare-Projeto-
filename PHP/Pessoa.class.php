<?php

	abstract class Pessoa
	{
		public function __construct(
			protected string $nome = "", 
			protected string $cpf = "",
			protected string $telefone = "",
			protected string $logradouro = ""
		){}
        
		//Getter's

		public function getNome()
		{
			return $this->nome;
		}
        public function getCpf()
		{
			return $this->cpf;
		}

		public function getTelefone()
		{
			return $this->telefone;
		}

        public function getLogradouro()
		{
			return $this->logradouro;
		}
		

        //Setter's

		public function setNome($nome)
		{
			$this->nome = $nome;
		}
        public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}

        public function setLogradouro($logradouro)
		{
			$this->logradouro = $logradouro;
		}
	}
?>