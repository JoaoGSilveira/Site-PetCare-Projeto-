<?php

require_once "PHP/Conexao.class.php";
require_once "PHP/Pessoa.class.php";
require_once "PHP/cliente.class.php";
require_once "PHP/ClienteDAO.php";

$erro = false;

$msg = array("","","","","","","","","","","","","");

if($_POST){
    if(empty($_POST['nomecompleto'])){
        $msg[0] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['email'])){
        $msg[1] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['celular'])){
        $msg[2] = "* Campo obrigatório!";
        $erro = true;
    }

    if(strlen($_POST['celular']) < 11){
        $msg[2] = "Esse número de celular não é valido!";
        $erro = true;
    }

    if(empty($_POST['cpf'])){
        $msg[3] = "* Campo obrigatório!";
        $erro = true;
    }

    if(strlen($_POST['cpf']) < 11){
        $msg[3] = "Esse CPF não é valido!";
        $erro = true;
    }

    if(empty($_POST['senha'])){
        $msg[4] = "* Campo obrigatório!";
        $erro = true;
    }

    if(strcmp($_POST['senha'], $_POST['confirmarsenha']) != 0){
        $msg[5] = "As senhas não correspondem!";
        $erro = true;
    }

    if(empty($_POST['confirmarsenha'])){
        $msg[5] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['cidade'])){
        $msg[6] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['estado'])){
        $msg[7] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['logradouro'])){
        $msg[8] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['bairro'])){
        $msg[9] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['numero'])){
        $msg[10] = "* Campo obrigatório!";
        $erro = true;
    }

    if(empty($_POST['cep'])){
        $msg[11] = "* Campo obrigatório!";
        $erro = true;
    }

    if(!$erro){
        $cliente = new Cliente(
            0,
            $_POST['email'],
            md5($_POST['senha']),
            $_POST['bairro'],
            $_POST['cep'],
            $_POST['cidade'],
            $_POST['estado'],
            $_POST['numero'],
            "Cliente",
            array(),
            array(),
            $_POST['nomecompleto'],
            $_POST['cpf'],
            $_POST['celular'],
            $_POST['logradouro']
        );

        $clienteDAO = new ClienteDAO();

        $clienteInserido = $clienteDAO->inserir($cliente);

        header("location:login.php");
    }
}

?>


<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar-se</title>

    <script>
    function formatarCelular(celular) {
        celular = celular.replace(/[^\d]/g, '');
        if (celular.length === 11) {
            return '(' + celular.substring(0, 2) + ')' + celular.substring(2, 7) + '-' + celular.substring(7);
        } else {
            return celular;
        }
    }

    function formatarCPF(cpf) {
        cpf = cpf.replace(/[^\d]/g, '');
        if (cpf.length === 11) {
            return cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + cpf.substring(6, 9) + '-' + cpf.substring(9);
        } else {
            return cpf;
        }
    }

    function aplicarFormatacao() {
        var celular = document.getElementById('celular').value;
        var cpf = document.getElementById('cpf').value;

        if (celular.trim() !== '') {
            document.getElementById('celular').value = formatarCelular(celular);
        }
        if (cpf.trim() !== '') {
            document.getElementById('cpf').value = formatarCPF(cpf);
        }
    }
</script>


</head>

<body class="bodylogin">
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
            <a href="login.php"><span class="strongazul">Entrar</span> ou<br><span
                    class="strongazul">Cadastrar-se</span></a>
        </div>
    </nav>
    <nav class="navbar2">
        <ul class="menunav2">
            <a href="index.php">
                <li class="textmenunav2">inicio</li>
            </a>
            <a href="sobrenos.php">
                <li class="textmenunav2">Sobre Nós</li>
            </a>
            <a href="produtogatos.php">
                <li class="textmenunav2">Produtos para Gatos</li>
            </a>
            <a href="produtocaes.php">
                <li class="textmenunav2">Produtos para Cães</li>
            </a>
            <a href="servicos.php">
                <li class="textmenunav2">Serviços</li>
            </a>
        </ul>
    </nav>
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Login</a> > Cadastro</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Criar sua conta</h1>
                <form action="#" method="POST">
                    <div>
                        <label class="subtitlecadastro" for="nomecompleto">Nome Completo*</label>
                        <input type="text" id="nomecompleto" name="nomecompleto" class="inputcadastro" placeholder="Digite seu nome" value="<?php echo isset($_POST['nomecompleto'])?$_POST['nomecompleto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="email">E-mail*</label>
                        <input type="email" id="email" name="email" class="inputcadastro" placeholder="Digite seu E-mail" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro" for="celular">Celular*</label>
                        <input type="tel" id="celular" name="celular" onblur="aplicarFormatacao()" maxlength="11" class="inputcadastro" placeholder="Digite seu celular" value="<?php echo isset($_POST['celular'])?$_POST['celular']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="cpf">CPF*</label>
                        <input type="text" id="cpf" name="cpf" onblur="aplicarFormatacao()" maxlength= "11" class="inputcadastro" placeholder="Digite seu CPF/CNPJ" value="<?php echo isset($_POST['cpf'])?$_POST['cpf']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="senha">Senha*</label>
                        <input type="password" id="senha" name="senha" class="inputcadastro" placeholder="Digite sua senha aqui" value="<?php echo isset($_POST['senha'])?$_POST['senha']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro" for="confirmarsenha">Confirmar Senha*</label>
                        <input type="password" id="confirmarsenha" name="confirmarsenha" class="inputcadastro" placeholder="Digite sua senha aqui novamente" value="<?php echo isset($_POST['confirmarsenha'])?$_POST['confirmarsenha']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[5] != ""?$msg[5]:'';?></div>
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro" for="cidade">Cidade*</label>
                        <input type="text" id="cidade" name="cidade" class="inputcadastro" placeholder="Digite sua cidade" value= "<?php echo isset($_POST['cidade'])?$_POST['cidade']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[6] != ""?$msg[6]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="estado">Estado*</label>
                        <select id="estado" name="estado" class="inputcadastro">
                            <option value="">Selecione o estado</option>
                            <option value="AC" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'AC') ? 'selected' : ''; ?>>Acre (AC)</option>
                            <option value="AL" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'AL') ? 'selected' : ''; ?>>Alagoas (AL)</option>
                            <option value="AP" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'AP') ? 'selected' : ''; ?>>Amapá (AP)</option>
                            <option value="AM" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'AM') ? 'selected' : ''; ?>>Amazonas (AM)</option>
                            <option value="BA" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'BA') ? 'selected' : ''; ?>>Bahia (BA)</option>
                            <option value="CE" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'CE') ? 'selected' : ''; ?>>Ceará (CE)</option>
                            <option value="DF" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'DF') ? 'selected' : ''; ?>>Distrito Federal (DF)</option>
                            <option value="ES" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'ES') ? 'selected' : ''; ?>>Espírito Santo (ES)</option>
                            <option value="GO" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'GO') ? 'selected' : ''; ?>>Goiás (GO)</option>
                            <option value="MA" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'MA') ? 'selected' : ''; ?>>Maranhão (MA)</option>
                            <option value="MT" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'MT') ? 'selected' : ''; ?>>Mato Grosso (MT)</option>
                            <option value="MS" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'MS') ? 'selected' : ''; ?>>Mato Grosso do Sul (MS)</option>
                            <option value="MG" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'MG') ? 'selected' : ''; ?>>Minas Gerais (MG)</option>
                            <option value="PA" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'PA') ? 'selected' : ''; ?>>Pará (PA)</option>
                            <option value="PB" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'PB') ? 'selected' : ''; ?>>Paraíba (PB)</option>
                            <option value="PR" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'PR') ? 'selected' : ''; ?>>Paraná (PR)</option>
                            <option value="PE" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'PE') ? 'selected' : ''; ?>>Pernambuco (PE)</option>
                            <option value="PI" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'PI') ? 'selected' : ''; ?>>Piauí (PI)</option>
                            <option value="RJ" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'RJ') ? 'selected' : ''; ?>>Rio de Janeiro (RJ)</option>
                            <option value="RN" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'RN') ? 'selected' : ''; ?>>Rio Grande do Norte (RN)</option>
                            <option value="RS" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'RS') ? 'selected' : ''; ?>>Rio Grande do Sul (RS)</option>
                            <option value="RO" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'RO') ? 'selected' : ''; ?>>Rondônia (RO)</option>
                            <option value="RR" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'RR') ? 'selected' : ''; ?>>Roraima (RR)</option>
                            <option value="SC" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'SC') ? 'selected' : ''; ?>>Santa Catarina (SC)</option>
                            <option value="SP" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'SP') ? 'selected' : ''; ?>>São Paulo (SP)</option>
                            <option value="SE" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'SE') ? 'selected' : ''; ?>>Sergipe (SE)</option>
                            <option value="TO" <?php echo (isset($_POST['estado']) && $_POST['estado'] == 'TO') ? 'selected' : ''; ?>>Tocantins (TO)</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[7] != ""?$msg[7]:'';?></div>
                    </div>


                    <div>
                        <label class="subtitlecadastro" for="logradouro">Logradouro*</label>
                        <input type="text" id="logradouro" name="logradouro" class="inputcadastro" placeholder="Digite sua logradouro" value= "<?php echo isset($_POST['logradouro'])?$_POST['logradouro']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[8] != ""?$msg[8]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="bairro">Bairro*</label>
                        <input type="text" id="bairro" name="bairro" class="inputcadastro" placeholder="Digite seu bairro" value= "<?php echo isset($_POST['bairro'])?$_POST['bairro']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[9] != ""?$msg[9]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="numero">Número*</label>
                        <input type="number" id="numero" name="numero" class="inputcadastro" placeholder="Digite o número da sua casa" value= "<?php echo isset($_POST['numero'])?$_POST['numero']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[10] != ""?$msg[10]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="cep">CEP*</label>
                        <input type="number" id="cep" name="cep" class="inputcadastro" placeholder="Digite seu CEP" value= "<?php echo isset($_POST['cep'])?$_POST['cep']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[11] != ""?$msg[11]:'';?></div>
                    </div>
                    <button class="botaocadastro" type="submit" value="Cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>