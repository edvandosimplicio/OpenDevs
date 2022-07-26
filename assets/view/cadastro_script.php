<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastroStyles.css" />
</head>

<body>
    <header>
        <a href="<?php echo 'index.php'?>"><span class="logo">
                <ion-icon id="football" name="football-outline"></ion-icon>
            </span></a>
        <a class="textBox2" href="<?php echo 'index.php'?>">
            <h1>OpenDevs</h1>
        </a>
        <ul>
            <li><a class="textBox2" href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
        <?php
          include "conexao.php";

          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $telefone = $_POST['telefone'];
          $endereco = $_POST['endereco'];
          $dt_nascimento = $_POST['dt_nascimento'];
          
          //CRIANDO POST
          $sql = "INSERT INTO `usuario` (`nome`, `email`, `telefone`, `endereco`, `dt_nascimento`) VALUES ('$nome','$email','$telefone','$endereco', '$dt_nascimento')";
          
          if(mysqli_query($conn, $sql)):
            echo "$nome, cadastrado(a) com sucesso em nosso sistema!";
          else:
            echo "$nome, infelizmente não conseguimos cadastra-lo(a) em nosso sistema.";
          endif;
          ?>
   </div>       
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>