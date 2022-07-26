<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jefferson Eduardo" />
    <title>Exclusão de cadastro</title>
    <link rel="stylesheet" href="../css/cadastroStyles.css" />
</head>

<body>
    <header>
        <a href="<?php echo 'index.php'?>"><span class="logo">
                <ion-icon id="football" name="football-outline"></ion-icon>
            </span></a>
        <a href="<?php echo 'index.php'?>">
            <h1>OpenDevs</h1>
        </a>
        <ul>
        <li><a href="<?php echo 'listaUser.php'?>">Voltar para lista de usuários</a></li>
            <li><a href="<?php echo 'index.php'?>">Pagina Inicial</a></li>
            
        </ul>
    </header>


    <!--CADASTRO DE USUÁRIO-->

    <div class="center">
        <main class="container">
        <?php
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          
          //CRIANDO DELET/excluir
          $sql = "DELETE from `usuario` WHERE id =  $id";
          
          if(mysqli_query($conn, $sql)):
            echo "$nome, excluído(a) com sucesso em nosso sistema!";
          else:
            echo "$nome, infelizmente não conseguimos excluir seus dados em nosso sistema :(";
          endif;
          ?>
   </div>       
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>