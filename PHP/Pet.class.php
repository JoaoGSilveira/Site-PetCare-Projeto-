<?php

	class Pet
	{

		public function __construct(
			private int $idpet = 0,
			private string $data_nasc = "",
			private string $nome = "",
			private string $raca = "",
			private int $petidcli = 0,
			private string $petstatus = ""
		){}

        /*Getter's*/
		
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


        /*Setter's*/

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


			/**
			 * Get the value of petidcli
			 */ 
			public function getPetidcli()
			{
						return $this->petidcli;
			}

			/**
			 * Set the value of petidcli
			 *
			 * @return  self
			 */ 
			public function setPetidcli($petidcli)
			{
						$this->petidcli = $petidcli;

						return $this;
			}

			/**
			 * Get the value of petstatus
			 */ 
			public function getPetstatus()
			{
						return $this->petstatus;
			}

			/**
			 * Set the value of petstatus
			 *
			 * @return  self
			 */ 
			public function setPetstatus($petstatus)
			{
						$this->petstatus = $petstatus;

						return $this;
			}
	}
?>