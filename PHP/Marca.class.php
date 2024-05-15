<?php

class Marca
{
                                                   
    public function __construct(private int $id_marca = "", private string $nome = ""){}
  
    //métodos gets 
    
    public function getIdMarca()
    {
        return $this->id_marca;
    }
 
    public function getNome()
    {
        return $this->nome;
    }

    /* métodos sets*/

    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;
    }
  
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
  
}
?>