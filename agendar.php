<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Pessoa.class.php";
    require_once "PHP/cliente.class.php";
    require_once "PHP/ClienteDAO.php";
    require_once "PHP/Servico.class.php";
    require_once "PHP/ServicoDAO.php";
    require_once "PHP/Pet.class.php";
    require_once "PHP/PetDAO.php";
    require_once "PHP/Agenda.class.php";
    require_once "PHP/AgendaDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msg = array("","","","","","","","");

    if($_POST){

        if(empty($_POST['tiposervico'])){
            $msg[0] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['horario'])){
            $msg[1] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['data'])){
            $msg[2] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['petagendado'])){
            $msg[3] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['valorservico'])){
            $msg[4] = "* Campo obrigatório!";
            $erro = true;
        }

        if (!$erro) {

            $agenda = new Agenda(
                0,
                $_POST['tiposervico'],
                $_POST['horario'],
                $_POST['data'],
                $_POST['petagendado'],
                $_POST['valorservico']
            );

            $agendaDAO = new AgendaDAO();
            $inseriragenda = $agendaDAO->inserir($agenda);

            header("location:listar_produtos.php");
        }
    }
?>

<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Agendamento</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Painel de ADM</a> > Agendamento</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Agendamento de Serviço</h1>
                <form action="#" method="POST">

                    <div>
                        <label class="subtitlecadastro" for="tiposervico">Tipo Servico*</label>
                        <select id="tiposervico" name="tiposervico" class="inputcadastro">
                        <option value="">Escolha um serviço</option>
                        <?php
                
                            $servico = new Servico(servico_status:"Ativo");
                                
                            $ServicoDAO = new ServicoDAO();
                                
                            $servicoativos = $ServicoDAO->buscar_servicos_ativos($servico);

                            foreach($servicoativos as $servicos)
                            {
                                if(isset($_POST["tiposervico"]) && $_POST["tiposervico"] == $servicos->id_servico){
                                    echo "<option value='{$servicos->id_servico}' selected>{$servicos->descricao}</option>";
                                }
                                else{
                                    echo "<option value='{$servicos->id_servico}'>{$servicos->descricao}</option>";
                                }
                            } 
                        ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="horario">Horário*</label>
                        <select id="horario" name="horario" class="inputcadastro">
                            <option value = "">Selecione um horário</option>
                            <?php

                                $start = new DateTime('08:00');
                                $end = new DateTime('18:00');
                                $interval = new DateInterval('PT30M');

                                $selected_horario = isset($_POST['horario']) ? $_POST['horario'] : '';

                                for ($time = $start; $time <= $end; $time->add($interval)) {
                                    $option_value = $time->format('H:i');
                                    $selected = ($option_value == $selected_horario) ? 'selected' : '';
                                    echo '<option value="' . $option_value . '" ' . $selected . '>' . $option_value . '</option>';
                                }

                            ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo isset($msg[1]) && $msg[1] != "" ? $msg[1] : '';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="data">Data (Dia/Mês):*</label>
                        <input type="date" id="data" name="data" class="inputcadastro" value="<?php echo isset($_POST['data'])?$_POST['data']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="petagendado">Pet*</label>
                        <select id="petagendado" name="petagendado" class="inputcadastro">
                        <option value="">Escolha um pet</option>
                        <?php
                
                            $pet = new Pet(petstatus:"Ativo");
                                
                            $PetDAO = new PetDAO();
                                
                            $petativos = $PetDAO->buscar_pet_ativos($pet);

                            foreach ($petativos as $pet) {
                                $selected = isset($_POST["petagendado"]) && $_POST["petagendado"] == $pet->id_pet ? 'selected' : '';
                                echo "<option value='{$pet->id_pet}' $selected>{$pet->nome_pet} (Tutor: {$pet->nome_dono})</option>";
                            }
                        ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="valorservico">Valor*</label>
                        <input type="number" step="0.01" id="valorservico" name="valorservico" class="inputcadastro" placeholder="Digite o preço do serviço" value="<?php echo isset($_POST['valorservico'])?$_POST['valorservico']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
                    </div>

                    <button class="botaocadastro" type="submit" value="Cadastrar">Agendar</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>