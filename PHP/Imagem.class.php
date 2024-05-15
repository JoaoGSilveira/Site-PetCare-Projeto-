 
<?php
class Imagem
{
               //private string $imagem = "",

    public function __construct(private string $imagem = "",
    private string $descricao= "",
    ){}
  
    //métodos gets 
    
    public function getId_Imagem()
    {
        return $this->id_imagem;
    }
 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /* métodos sets*/

    public function setId_Imagem($id_imagem)
    {
        $this->id_imagem = $id_imagem;
    }
  
    public function setDescricao($descricao)    
    {
        $this->descricao = $descricao;
    }
   
  
}
?>