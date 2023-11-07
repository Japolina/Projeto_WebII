<?php
$nome = "Érica";
$anoNasc = 2004;
$idade = 2023 - $anoNasc;
$altura = 1.60;
$peso = 0.1;
$imc = $peso / pow($altura,2);
//$imc = $peso / ($altura * $altura);

echo"<h1 style='color: purple; text-align: center;'> Olá $nome, me disseram que você tem $idade </h1>";
echo"Seu peso é de $peso e sua altura $altura <br>";
echo "O seu IMC é $imc";
