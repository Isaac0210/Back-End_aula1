<?php
/* faça um codigo em que calcule a tabuada do numero indicado em uma variavel com o nome de $tabuada, aplique o laço de reptição for*/
$numero = $_GET[('numero')] ?? '';

for ($i = 1; $i <= 10; $i++){
   echo "$numero X $i = ". ($i * $numero."<br>");
}

?>