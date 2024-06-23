<?php

    class Servico
    {                     
        public function __construct(
            private int $id_servico = 0,
            private string $descricao = "",
            private string $servico_status = ""
        ){}
    
        //Getter's
        
        public function getIdServico()
        {
            return $this->id_servico;
        }
    
        public function getDescricao()
        {
            return $this->descricao;
        }
        

        //Setter's

        public function setIdServico($id_servico)
        {
            $this->id_servico = $id_servico;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

            /**
             * Get the value of servico_status
             */ 
            public function getServico_status()
            {
                        return $this->servico_status;
            }

            /**
             * Set the value of servico_status
             *
             * @return  self
             */ 
            public function setServico_status($servico_status)
            {
                        $this->servico_status = $servico_status;

                        return $this;
            }
    }
?>