<?php

    class Servico
    {                     
        public function __construct(
            private int $id_servico = 0,
            private string $descricao = "",
            private float $preco = 0.00
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
        public function getPreco()
        {
            return $this->preco;
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
        public function setPreco($preco)
        {
            $this->preco = $preco;
        }
    }
?>