<?php

	class Pet
	{

		public function __construct(private int $idpet = 0,
		private string $data_nasc = "",
		private string $nome = "",
		private string $raca = "",
		private $agencia= null) {}

         /* sets */
		public function getIdPet()
		{
			return $this->idpet;
		}

		public function getDataNasc()
		{
			return $this->data_nasc;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getRaca()
		{
			return $this->raca;
		}
			
		public function getAgencia()
		{
			return $this->agencia;
		}


          /* sets */
		public function setRaca($raca)
		{
			$this->raca = $raca;
		}
		public function setIdPet($idpet)
		{
			$this->idpet = $idpet;
		}
		public function setDataNasc($data_nasc)
		{
			$this->data_nasc = $data_nasc;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		
		public function setRaca($raca)
		{
			$this->raca = $raca;
		}
		
		public function setAgencia($agencia)
		{
			$this->agencia = $agencia;
		}
	
	}
?>