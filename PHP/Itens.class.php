 
<?php

class Itens
{
                                                   
    public function __construct(private int $id_itens = "",
    private float $preco_unitario= 0.00,
    private int $quantidade = 0){}
  
    //métodos gets 
    
    public function getId_Itens()
    {
        return $this->id_itens;
    }
 
    public function getPreco_Unitario()
    {
        return $this->preco_unitario;
    }

    public function getQuantidadle()
    {
        return $this->quantidade;
    }
  
   
    /* métodos sets*/

    public function setId_Produto($id_Itens)
    {
        $this->id_produto = $id_itens;
    }
    
    public function setPreco_Unitario($preco_unitario)
    {
        $this->preco_unitario = $preco_unitario;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    
   
}
?>