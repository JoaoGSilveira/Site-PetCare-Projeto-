<?php

	class Pet
	{
		public function __construct(
			private int $idpet = 0,
			private string $data_nasc = "",
			private string $nome = "",
			private string $raca = "",
			private int $petidcli = 0,
			private string $petstatus = "",
			private string $tipopet = ""
		){}

        //Getter's
		
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

		public function getPetidcli()
		{
			return $this->petidcli;
		}

		public function getPetstatus()
		{
			return $this->petstatus;
		}

		public function getTipopet()
		{
			return $this->tipopet;
		}


        //Setter's

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

		public function setPetidcli($petidcli)
		{
			$this->petidcli = $petidcli;

			return $this;
		}

		public function setPetstatus($petstatus)
		{
			$this->petstatus = $petstatus;

			return $this;
		}

		public function setTipopet($tipopet)
		{
			$this->tipopet = $tipopet;

			return $this;
		}
	}
?>