<?php

class Agencia
{                         
    public function __construct(private int $idagencia = 0,
        private string $data_nasci = "", 
        private string $horario = "",
        
        private array $servico_realiazado = array()) {}
  
    //métodos gets 
    
    public function getIdAgencia()
    {
        return $this->idagencia;
    }
    public function getData_Nasci()
    {
        return $this->data_nasci;
    }
    public function getHorario()
    {
        return $this->horario;
    }

    public function getServico_realiazado()
    {
        return $this->servico_realiazado;
    }

    /* métodos sets*/

    public function setIdAgencia($idagencia)
    {
        $this->idagencia = $idagencia;
    }
    public function setData_Nasci($data_nasci)
    {
        $this->data_nasci = $data_nasci;
    }
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function setServico_realiaado($servico_realiazado)
    {
        $this->servico_realiaado[] = $servico_realiazado;
    }


}
?>