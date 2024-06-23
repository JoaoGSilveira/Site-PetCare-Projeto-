<?php

class Fornecedor extends Pessoa
{
                            
    public function __construct(
        private int $id_fornecedor = 0,
        private string $cnpj = "", 
        private string $razao_social ="" ,
        private array $produto= array(),
        $nome = "", 
        $cpf = "", 
        $telefone = "", 
        $endereco = ""
    )
    {
        parent:: __construct($nome, $cpf, $telefone, $endereco);
    }
  
    //métodos gets 
    public function getRazãoSocual()
    {
        return $this->razão_social;
    }

    public function getProduto()
    {
        return $this->produto;
    }


    /* métodos sets*/
    public function setRazao_social($razão_social)
    {
        $this->razao_social = $razao_social;
    }

    public function setProduto($produto)
    {
        $this->produto[] = $produto;
    }


        /**
         * Get the value of id_fornecedor
         */ 
        public function getId_fornecedor()
        {
                return $this->id_fornecedor;
        }

        /**
         * Set the value of id_fornecedor
         *
         * @return  self
         */ 
        public function setId_fornecedor($id_fornecedor)
        {
                $this->id_fornecedor = $id_fornecedor;

                return $this;
        }
}
?>