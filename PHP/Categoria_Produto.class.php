 
<?php

class Categoria_Produto
{
                                                   
    public function __construct(
        private int $idcategoria = 0, 
        private string $descritivo = "",
        private string $status = ""
    ){}
  
    //métodos gets 
    
    public function getIdCategoria()
    {
        return $this->idcategoria;
    }
 
    public function getDescritivo()
    {
        return $this->descritivo;
    }

    /* métodos sets*/

    public function setIdCategoria($categoria)
    {
        $this->idcategoria = $idcategoria;
    }
    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
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