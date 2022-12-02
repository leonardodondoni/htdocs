<?php

///////////Tipos básicos///////////

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;
//////////////Tipos compostos//////////////////////////
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];


$nascimento = new DateTime();

//var_dump($nascimento);
/////////////////////Tipos especiais//////////////////////////////////

$arquivo = fopen("exemplo03.php", "r");

//var_dump($arquivo);

//nulo ausência de valor
//vazio possui espaço reservado na memória

$nulo = NULL;

$vazio = "";

 ?>