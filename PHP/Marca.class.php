<?php

class Marca
{
                                                   
    public function __construct(
        private int $id_marca = 0, 
        private string $nome = "",
        private string $status = ""){}
  
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
  

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }
}
?>