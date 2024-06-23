<?php

    abstract class Conexao{
        public function __construct(protected $db=null){
            
            $dba = "mysql:host=localhost;dbname=petcare;";

            $this->dba = new PDO($dba, "root", "");
        }
    }

?>