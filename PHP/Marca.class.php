<?php

class Marca
{
                                                   
    public function __construct(
        private int $id_marca = 0, 
        private string $nome = "",
        private string $status = ""
    ){}
  
    //métodos gets 
    
    public function getIdMarca()
    {
        return $this->id_marca;
    }
 
    public function getNome()
    {
        return $this->nome;
    }

    public function getStatus()
    {
        return $this->status;
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
    
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
?>