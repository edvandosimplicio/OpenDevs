<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jefferson Eduardo">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../css/styleHome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="sec">
        <header>
            <a href="<?php echo 'index.php'?>"><span class="logo">
                    <ion-icon id="football" name="football-outline"></ion-icon>
                </span></a>
            <a class="textBox2" href="<?php echo 'index.php'?>">
                <h1>OpenDevs</h1>
            </a>
            <ul>
                <li><a class="textBox2" href="<?php echo 'listaUser.php'?>">lista de usuários</a></li>
                <li><a class="textBox2" href="<?php echo 'cadastro.php'?>">cadastre-se</a></li>
            </ul>
        </header>

        <div class="content">
            <div class="textBox">
            <p><span>Você deseja aprender, se desenvolver e ter uma chance de trabalhar com programação?</span></p>    
            <h2><span><a type="button" class="textBox2" href="<?php echo 'cadastro.php'?>">Cadastre-se!</a></span></h2>
                <p>Somos um projeto beneficente com o objetivo de buscar
                    o máximo de pessoas com o grande desejo de obter conhecimento
                    no mundo da programação, mas que, infelizmente, tem uma renda 
                    muito baixa para conseguir um estudo técnico ou superior. 
                    Esta finalmente é a sua grande oportunidade! o nosso projeto
                    te oferece a proposta de conseguir realizar os seus sonhos. 
                    Entre nesse mundo conosco! tudo só depende de você.
                </p>
                
            </div>

            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1" checked>
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="imgSlide first">
                        <img src="../image/1.png" alt="OpenDevs">
                    </div>
                    <div class="imgSlide2">
                        <img src="../image/2.png" alt="">
                    </div>
                    <div class="imgSlide3">
                        <img src="../image/3.png" alt="">
                    </div>
                    <div class="imgSlide4">
                        <img src="../image/4.png" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
            </div>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript">
        var counter = 2;
        setInterval(function(){
            document.getElementById('radio' +  counter).checked=true;
            counter++;
            if(counter > 4){
                counter = 1;   
            }
        }, 5000);   
    </script>
</body>

</html>