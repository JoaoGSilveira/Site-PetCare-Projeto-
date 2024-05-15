<?php

class Cliente extends Pessoa
{            

    public function __construct(private int $idcliente = 0 ,
    private string $nome = "", 
    private string $email = "", 
    private string $senha = "", 
    private string $tipo = "", // administrador ou usuario
    private array $pet = array(),
    private array $venda = array(),
    $nome = "", $cpf = "", $telefone = "", $endereco = "")
    {
        parent:: __construct($nome, $cpf, $telefone, $endereco);
    }
  
    //métodos gets 
    public function getIdCliente()
    {
        return $this->idcliente;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getPet()
    {
        return $this->pet;
    }

    public function getVenda()
    {
        return $this->venda;
    }

    /* métodos sets*/

    public function setiIdCliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setPet($pet)
    {
        $this->pet[] = $pet;
    }
    
    public function setVenda($venda)
    {
        $this->venda[] = $venda;
    }

}

?>