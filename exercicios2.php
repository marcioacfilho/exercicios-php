<?php
//Faça um programa que exiba todos os números impares entre 0 e 100.

$numero = 1;
while ($numero <= 100) {
  if ($numero % 2 == 1) {
    echo "$numero ";
  }
  $numero++;
  $numero++;
}

?>