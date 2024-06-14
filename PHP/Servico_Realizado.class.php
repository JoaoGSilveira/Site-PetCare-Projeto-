<?php

class Servico_Realizado
{                      
    public function __construct(
        private int $id_servico_realiazado = 0,
        private array $servico = array()
    ){}
  
    //métodos gets 
    
    public function getId_Servico_realizado()
    {
        return $this->id_servico_realizado;
    }
        
    public function getServico()
    {
        return $this->Servico;
    }
 
    /* métodos sets*/

    public function setId_Servico_realizado($id_servico_realiazado)
    {
        $this->id_servico_realiazado = $id_servico_realiazado;
    }
    
    public function setServico($servico)
    {
        $this->servico[] = $servico;
    }

}
?>