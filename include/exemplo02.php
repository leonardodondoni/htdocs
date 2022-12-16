<?php

/* include "inc/exemplo01.php"; */
require_once "inc/exemplo01.php";
require_once "inc/exemplo01.php";

//include funciona mesmo que o que esteja importanto não exista ou 
//tenha erro, require obriga que o arquivo existe a funcione.


$resultado = somar(10, 20);

echo $resultado;
?>