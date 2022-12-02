<?php

//a variavel nome recebera todas as variaves recebidas atraves da URL, metodo GET.
//$GET sempre vai ser String
//para castar a varíavel (int)

//$nome = $_GET["a"];
$nome = (int)$_GET["a"];

//var_dump($nome);

// para obter o IP do cliente $ip = $_SERVER["REMOTE_ADDR"];

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>