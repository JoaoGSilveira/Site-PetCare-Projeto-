<!DOCTYPE php>
<php lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Produto para Gatos</title>
</head>
<body>
    <nav class="navbar1">
        <div class="logo-container">
            <div class="brand-name">PetCare</div>
            <img src="icon/CachorroCasinha.png" alt="logo">
        </div>
        <div class="search-bar">
            <div class="search-input">
                <input type="text" placeholder="O que você deseja hoje?" class="pesquisanav1">
                <img src="icon/searchicon.png" alt="search-icon" class="search-icon">
            </div>
        </div>
        <div>
            <a href="favorito.php"><img src="icon/favorito.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="compras.php"><img src="icon/compras.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="login.php"><img src="icon/login.png" height=30px class="loginico"></a>
        </div>
        <div class="user-actions">
            <a href="login.php"><span class="strongazul">Entrar</span> ou<br><span class="strongazul">Cadastrar-se</span></a>
        </div>
    </nav>
    <nav class="navbar2">
        <ul class="menunav2">
            <a href="index.php"><li class="textmenunav2">inicio</li></a>
            <a href="sobrenos.php"><li class="textmenunav2">Sobre Nós</li></a>
            <a href="produtogatos.php"><li class="textmenunav2">Produtos para Gatos</li></a>
            <a href="produtocaes.php"><li class="textmenunav2">Produtos para Cães</li></a>
            <a href="servicos.php"><li class="textmenunav2">Serviços</li></a>
        </ul>
    </nav>
    <main class="fixsidemenu">
        <div class="mapasite">
            <p class="wherelocal2">Onde estou?</p>
            <p class="wherelocal2"><a href="index.php">inicio</a> > Produtos para gatos</p>
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

        <h2 class="titlecategoria2">Produtos para gatos:</h2>
        <div class="conteinerpudutos">
            <span class="framelinha1">
                <img src="foto produtos/camagato.jpg" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Cama Túnel Gato Grande com Brinquedo de jogo de tubo</p>
                <p class="textproducts">R$ 168,00</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/brinquedosproduto.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Kit 10 Mini Brinquedos Gatos Recreação Catnip Ratinhos</p>
                <p class="textproducts">R$ 41,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/sachewhiskas.jpg" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Sachê Whiskas carne ao molho para Gatos Adultos Castrados</p>
                <p class="textproducts">R$ 3,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/comedouro-automatico-para-gatos-com-gravador-de-voz.jpg.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Alimentador Automático De Gatos 3L Com Câmera</p>
                <p class="textproducts">R$ 170,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
        </div>

        <div class="conteinerpudutos">
            <span class="framelinha1">
                <img src="foto produtos/3027903162_1.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Fonte Bebedouro Para Gatos Água Corrente Azul 110v</p>
                <p class="textproducts">R$ 134,10</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/Areia_Higiênica_Pipicat_Floral_para_Gatos_4KG_-_Giulia_Rocha.jpg" height="220px" width="200px" class="produtoimg">
                <p class="textproducts">Areia Higiênica Pipicat floral 4KG</p>
                <p class="textproducts">R$ 20,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/petisco_friskies_party_mix_gatos_adultos_cordeiro_carne_suina_e_carne_40g_2081_1_a64e6473386f5f8b1f48c0719deb6275_20230223123527.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Petisco friskies party mix Gatos Adultos Cordeiro</p>
                <p class="textproducts">R$ 6,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/camabox.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Cama Box Pet Sleep Gatos 50x50x20</p>
                <p class="textproducts">R$ 131,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
        </div>

        <div class="conteinerpudutos">
            <span class="framelinha1">
                <img src="foto produtos/3fce70e40a.webp" height="220px" width="170px" class="produtoimg">
                <p class="textproducts">Moletom GRAFITE E AMARELO roupa para gato</p>
                <p class="textproducts">R$ 79,99</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/arranhador.webp" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Arranhador Gatos 3 Bases Grande com Penas e Rede</p>
                <p class="textproducts">R$ 170</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/coleira.jpg" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Coleira de peitoral completa para gatos</p>
                <p class="textproducts">R$ </p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
            <span class="framelinha1">
                <img src="foto produtos/granplusgatos.jpg" height="220px" width="220px" class="produtoimg">
                <p class="textproducts">Ração para gatos GRAN PLUS 3KG CARNE</p>
                <p class="textproducts">R$ 59,90</p>
                <div class="comprabuton">Adicionar ao Carrinho<img src="icon/CarrinhoCompra.png" height="20px" class="fotocompra"></div>
            </span>
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
                        produto.style.display = 'inline';
                    } else {
                        produto.style.display = 'none';
                    }
                });
            });
        });
    </script>
    
</body>
</php>