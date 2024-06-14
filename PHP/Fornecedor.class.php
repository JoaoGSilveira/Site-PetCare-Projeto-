<?php

class Fornecedor extends Pessoa
{
                            
    public function __construct(
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

}
?>