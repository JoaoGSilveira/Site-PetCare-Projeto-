<?php

    class Agenda
    {                         
        public function __construct(
            private int $id_agenda = 0,
            private int $tipo_servico = 0,
            private string $horario = "", 
            private string $data_ag = "",
            private int $id_pet = 0,
            private float $valorservico = 0.00
        ){}
    
        //Getter's

        public function getId_agenda()
        {
            return $this->id_agenda;
        }

        public function getHorario()
        {
            return $this->horario;
        }

        public function getData_ag()
        {
            return $this->data_ag;
        }

        public function getId_pet()
        {
            return $this->id_pet;
        }

        public function getValorservico()
        {
            return $this->valorservico;
        }

        public function getTipo_servico()
        {
            return $this->tipo_servico;
        }


        //Setter's

        public function setId_agenda($id_agenda)
        {
            $this->id_agenda = $id_agenda;

            return $this;
        }

        public function setHorario($horario)
        {
            $this->horario = $horario;

            return $this;
        }

        public function setData_ag($data_ag)
        {
            $this->data_ag = $data_ag;

            return $this;
        }

        public function setId_pet($id_pet)
        {
            $this->id_pet = $id_pet;

            return $this;
        }

        public function setValorservico($valorservico)
        {
            $this->valorservico = $valorservico;

            return $this;
        }

        public function setTipo_servico($tipo_servico)
        {
            $this->tipo_servico = $tipo_servico;

            return $this;
        }
    }
?>