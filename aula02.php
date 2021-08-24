<link rel="stylesheet" href="style.css">
<?php /*CeproiRR - Centro Profissional de Informática
		Curso Web Developer PHP - Fullstack Macuxi
		Professor: Dalmo Silva Mendes, Boa Vista-RR, 2021 */ ?>
<?php
// Aula 02

$ola = "Olá!";
$primeiro_nome = "Dalmo";
$segundoNome = "Silva";
$_1cidade = "Boa Vista";
$_2uf = "RR";
$tel = "991206763";
$Tel = "991206763";
$FONE = "(95)99120-6763";

echo "<div class='php'>";

echo "<h1>$ola</h1>";
echo "Meu nome é $primeiro_nome $segundoNome,
 moro na cidade de $_1cidade-$_2uf. 
 meu contato é $tel, $Tel e $FONE";

echo "<hr>";

$ola = "Olá!";
$usu_primeiro_nome = "Dalmo";
$usu_segundo_nome = "Silva";
$usu_cidade = "Boa Vista";
$usu_uf = "RR";
$usu_tel = "(95)-991206763";


echo "<h1>$ola</h1>";
echo "Meu nome é $usu_primeiro_nome $usu_segundo_nome,
 moro na cidade de $usu_cidade-$usu_uf. 
 Meu contato é $usu_tel";

echo "</div>";
?>