<?php
require_once "PHP/Conexao.class.php";
require_once "navbar.php";
require_once "PHP/Produto.class.php";
require_once "PHP/ProdutoDAO.php";
require_once "PHP/CategoriaDAO.php";
require_once "PHP/Categoria_Produto.class.php";

$produtoDAO = new ProdutoDAO();
$categoriaDAO = new CategoriaDAO();

$produtos = $produtoDAO->buscar_todos();

$produtos_cachorros = array_filter($produtos, function($produto) {
    return $produto->animal === 'Cachorro' || $produto->animal === 'Ambos';
});
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Produtos para Cães</title>
</head>

<body>
    <main class="fixsidemenu">
        <div class="mapasite">
            <p class="wherelocal2">Onde estou?</p>
            <p class="wherelocal2"><a href="index.php">Início</a> > Produtos para cães</p>
        </div>
        <aside class="menulateral">
            <h2 class="categoriastitle">Categorias</h2>
            <ul class="itenscat">
                <a href="#"><li>Acessórios</li></a>
                <a href="#"><li>Alimentos</li></a>
                <a href="#"><li>Brinquedos</li></a>
                <a href="#"><li>Farmácia</li></a>
                <a href="#"><li>Higiene & Beleza</li></a>
                <a href="#"><li>Passeio & Viagem</li></a>
            </ul>
            <hr>
            <div class="itenscat">
                <h2 class="precomenul">Preço</h2>
                R$<input type="number" placeholder="600" class="inputfiltropreco"> - R$<input type="number" placeholder="600" class="inputfiltropreco">
            </div>
            <hr>
            <div class="itenscat">
                <h2 class="marcatitle">Marca</h2>
                <input type="search" placeholder="Whiskas, Friskies..." class="menulateralsearchmarca">
                <button class="aplicarbuttonmenul">Aplicar</button>
            </div>
        </aside>

        <h2 class="titlecategoria2">Produtos para cães:</h2>
        <div class="conteinerpudutos"></div>
        <?php
            if (!empty($produtos_cachorros)) {
                $contador = 0;
                foreach ($produtos_cachorros as $produto) {
                    if ($contador % 4 == 0) {
                        if ($contador > 0) {
                            echo '</div>';
                        }
                        echo '<div class="containerlinha1">';
                    }
                    echo "<span class='framelinha1'>";
                    echo "<img src='foto produtos/{$produto->imagem}' alt='Img Produto' height='220px' width='170px' class='produtoimg'>";
                    echo "<p class='textproducts'>{$produto->nome}</p>";
                    echo "<p class='textproducts'>R$ {$produto->preco}</p>";
                    echo "<div class='comprabuton'>Adicionar ao Carrinho<img src='icon/CarrinhoCompra.png' height='20px' class='fotocompra'></div>";
                    echo "</span>";
                    $contador++;
                }
                if ($contador % 4 != 0) {
                    echo '</div>';
                }
            } else {
                echo "<p>Não foram encontrados produtos para cães.</p>";
            }
        ?>
        </div>
    </main>

    <footer class="footer">
        <!-- Rodapé -->
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchBar = document.querySelector('.pesquisanav1');
            const produtos = document.querySelectorAll('.framelinha1');

            searchBar.addEventListener('input', function () {
                const searchTerm = searchBar.value.trim().toLowerCase();

                produtos.forEach(function (produto) {
                    const nomeProduto = produto.querySelector('.textproducts').textContent.toLowerCase();

                    if (nomeProduto.includes(searchTerm)) {
                        produto.style.display = 'inline';
                    } else {
                        produto.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>

</html>
