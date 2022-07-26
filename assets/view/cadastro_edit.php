<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Alteração de cadastro</title>
    <link rel="stylesheet" href="../css/cadastroStyles.css" />
</head>

<body>
<?php
    //criando o GETT
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM usuario WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);
     ?>
     
    <header>
        <a href="<?php echo 'index.php'?>"><span class="logo">
                <ion-icon id="football" name="football-outline"></ion-icon>
            </span></a>
        <a class="textBox2" href="<?php echo 'index.php'?>">
            <h1>OpenDevs</h1>
        </a>
        <ul>
            <li><a class="textBox2" href="<?php echo 'listaUser.php'?>">Voltar para a lista de usuários</a></li>
            <li><a class="textBox2" href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
            <h2>Alteração de cadastro - Usuário</h2>
            <form action="edit_script.php" method="post">
                <!--Nome-->
                <div class="input-field">
                    <label for="">Nome completo:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required autocomplete="off" required value="<?php echo $linha['nome']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--E-mail-->
                <div class="input-field">
                    <label for="">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required required value="<?php echo $linha['email']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--Telefone-->

                <div class="input-field">
                    <label for="">Telefone</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required required value="<?php echo $linha['telefone']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--Endereço-->

                <div class="input-field">
                    <label for="">Endereço: </label>
                    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" required required value="<?php echo $linha['endereco']; ?>">
                    <div class="underline"></div></br>
                </div>

                <!--data de nascimento-->

                <div class="input-field">
                    <label for="">Data de nascimento:</label>
                    <input type="date" id="dt_nascimento" name="dt_nascimento" placeholder="01/01/0001" required required value="<?php echo $linha['dt_nascimento']; ?>">
                    <div class="underline"></div></br>
                </div>
                
                <div class="botoes">
                    <button class="cadastro-btn" type="submit">Salvar alterações</button>
                    <input type="hidden" name="id" required value="<?php echo $linha['id']; ?>">
                </div>
            </form>
   
   
    
    <script src="../javascript/validacao_cpf.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>