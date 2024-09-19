<?php
/* conexao com o bd */
$servername = "baseteste.srv.br";//servidor
$username = "basetestesrv_u_edvaldo";//seu usuario
$password = "piorsaladomundo";//sua senha
$database = "baseteste_edvaldo";//sua base de dados
//ver usuarios em donpad/piorsaladomundo

$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("Falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//checa se a conexão com o banco de dados foi um sucesso.
?>