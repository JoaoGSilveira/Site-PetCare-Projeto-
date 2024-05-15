<?php
	abstract class Pessoa
	{
		public function __construct(protected string $nome = "", 
        protected string $cpf = "",
        protected string $telefone = "",
        protected string $endereco = ""){}
        
		/* get */ 

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

        public function getEndereco()
		{
			return $this->endereco;
		}

        /* set */

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

        public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}
	}
?>