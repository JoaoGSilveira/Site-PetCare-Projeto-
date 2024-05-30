<?php

class Cliente extends Pessoa
{            

    public function __construct(private int $idcliente = 0 , 
    private string $email = "", 
    private string $senha = "",
    private string $bairro = "",
    private string $cep = "",
    private string $cidade = "",
    private string $uf = "",
    private string $numero = "",
    private string $tipo = "", // administrador ou usuario
    private array $pet = array(),
    private array $venda = array(),
    $nome = "", 
    $cpf = "", 
    $telefone = "", 
    $logradouro = "")
    {
        parent:: __construct($nome, $cpf, $telefone, $logradouro);
    }
  
    //métodos gets 
    public function getIdCliente()
    {
        return $this->idcliente;
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

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }
 
    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }
}

?>