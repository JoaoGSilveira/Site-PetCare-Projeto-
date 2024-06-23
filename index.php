<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/ProdutoDAO.php";
    require_once "PHP/Produto.class.php";
?>

<!DOCTYPE php>
<php lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Início</title>
</head>
<body>
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal">inicio</p>
        </div>

        <h2 class="titlecategoria">Produtos:</h2>
        <?php
            
            $produtoDAO = new ProdutoDAO();

            $produtos = $produtoDAO->buscar_todos();

            $contador = 0;

            foreach ($produtos as $produto) {
                
                $contador++;

                if ($contador % 5 == 1) {
                    echo '<div class="containerlinha1">';
                }

                echo "<span class='framelinha1'>";
                echo "<img src='foto produtos/{$produto->imagem}' alt= 'Img Produto' height='220px' width='170px' class='produtoimg'>";
                echo "<p class='textproducts'>{$produto->nome}</p>";
                echo "<p class='textproducts'>R$ {$produto->preco}</p>";
                echo "<div class='comprabuton'>Adicionar ao Carrinho<img src='icon/CarrinhoCompra.png' height='20px' class='fotocompra'></div>";
                echo "</span>";

                if ($contador % 5 == 0 || $contador == count($produtos)) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </main>

    <footer class="footer">

    </footer>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchBar = document.querySelector('.pesquisanav1');
            const produtos = document.querySelectorAll('.framelinha1');

            searchBar.addEventListener('input', function() {
                const searchTerm = searchBar.value.trim().toLowerCase();

                produtos.forEach(function(produto) {
                    const nomeProduto = produto.querySelector('.textproducts').textContent.toLowerCase();
                    
                    if (nomeProduto.includes(searchTerm)) {
                        produto.style.display = 'block';
                    } else {
                        produto.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>
</php>