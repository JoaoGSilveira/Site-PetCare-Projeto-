 
  <?php

class Produto
{   public function __construct(
        private int $idproduto = 0, 
        private string $nome = "", 
        private string $descricao = "", 
        private float $preco = 0.00, 
        private int $estoque = 0, 
        private string $imagem = "",
        private string $animal = "",
        private string $status = "",
        private $marca = null,
        private $categoria_produto = null
    ){}
   
    //métodos gets 
    
    public function getIdProduto()
    {
        return $this->idproduto;
    }
 
    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function getCategoria_produto()
    {
        return $this->categoria_produto;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getStatus()
    {
        return $this->status;
    }
  


    /* métodos sets*/

    public function setIdProduto($idprooduto)
    {
        $this->idproduto = $idproduto;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
    public function setCategoria_produto($categoria_produto)
    {
        $this->categoria_produto = $categoria_produto;
    }


    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
}
?>