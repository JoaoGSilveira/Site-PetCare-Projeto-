<?php

class Venda
{
                         
    public function __construct(
        private string $id_venda = "",
        private string $data = "",
        private array $itens = array()
    ){}
  
    //métodos gets 
    
    public function getId_Venda()
    {
        return $this->id_venda;
    }
 
    public function getData()
    {
        return $this->data;
    }
    public function getItens()
    {
        return $this->itnes;
    }



    /* métodos sets*/

    public function setId_Venda($id_venda)
    {
        $this->id_venda = $id_venda;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function setItens($itens)
    {
        $this->itens[] = $itens;
    }


}
   
   
?>