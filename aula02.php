<link rel="stylesheet" href="style.css">
<?php
/* CEPROIRR - CENTRO PROFISSIONAL DE INFORMÁTICA
 * SEJA BEM-VINDO AO CURSO DE PHP BÁSICO.
 * CURSO CRIADO POR DALMO SILVA MENDES
 * SITE: CEPROIRR.COM.BR
 * Fazer Doação
 * Banco do Brasil
 * Agência: 0250-X
 * Conta: 87.489-2
 */
/*
  Aula: Declaração de Variaveis e saída
 * Testado no PHP8
 */

$ola1 = "Olá!";
$primeiro_nome = "Dalmo";
$segundoNome = "Silva";
$_1cidade = "Boa Vista";
$_2uf = "RR";
$tel = "991206763";
$Tel = "991206763";
$FONE = "(95)99120-6763";

echo "<div class='php'>";

echo "<h1>$ola1</h1>";
echo "Meu nome é $primeiro_nome $segundoNome,
 moro na cidade de $_1cidade-$_2uf. 
 meu contato é $tel, $Tel e $FONE";

echo "<hr>";

$ola2 = "Olá!";
$usu_primeiro_nome = "Dalmo";
$usu_segundo_nome = "Silva";
$usu_cidade = "Boa Vista";
$usu_uf = "RR";
$usu_tel = "(95)-991206763";


echo "<h1>$ola2</h1>";
echo "Meu nome é $usu_primeiro_nome $usu_segundo_nome,
 moro na cidade de $usu_cidade-$usu_uf. 
 Meu contato é $usu_tel";

echo "</div>";
