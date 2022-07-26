<?php
//conectando o nosso codigo com o banco de dados do xamppp
$server = "localhost";
$user = "root";
$pass = "";
$bd = "opendevs";

$conn = mysqli_connect($server, $user, $pass, $bd);
//testando a conexão
if($conn):
    //echo"conectado";
else:
    echo "Error!";
endif;

//função para corrigir a data para o estilo pt-br
function mostra_data($data){
    $d = explode('-', $data);
    $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
    return $escreve;
}
?>