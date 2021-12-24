<link rel="stylesheet" href="style.css">
<?php /* 
CeproiRR - Centro Profissional de Informática
Curso Web Developer PHP - Fullstack Macuxi
Professor: Dalmo Silva Mendes, Boa Vista-RR, 2021 */

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
  Aula: Uso do IF e Else, IF e ELSE IF e ELSE
 * Testado no PHP7,8
 */

?>
<?php
// Aula 07

echo "<div class='php'>";
echo "<h3>Uso do IF e Else 1: Validação de Idade</h3>";

$nome = "Deyvid";
//$idade = 11;
$idade = 18;

if($idade >= 18){
	echo "OK {$nome}! Você tem {$idade} anos." . "<br>";
	echo "É maior de idade, portanto, pode entrar na festa!";
} else {
	echo "OK {$nome}! Você tem {$idade} anos." . "<br>";
	echo "É menor de idade, portanto, não pode entrar na festa!";
}

echo '<hr>';

echo '<h3>Uso do IF e Else 2: Validação de Variável</h3>';
$var = "true";

if($var == "true"){
	echo "<div style='background: green; padding: 10px; color:fff;'>
	A variável é {$var}.</div>";
}else{
	echo "<div style='background: red; padding: 10px; color:fff;'>
	A variável é {$var}.</div>";
}

echo '<hr>';

echo '<h3>Uso do IF & ELSE IF 3: Blocos Sequenciais</h3>';

$num1 = 2; // numero base
$num2 = 5;

//$operador = 'soma';
//$operador = 'subtracao';
//$operador = 'divisao';
//$operador = 'multiplicacao';
//$operador = 'resto';
//$operador = 'exponenciacao';
$operador ='';

if($operador == 'soma'){
	$calc = $num1 + $num2;
	echo 'O resultado da soma é: '. $calc;
}
else if($operador == 'subtracao'){
	$calc = $num2 - $num1;
	echo 'O resultado da subtração é: '. $calc;
}
else if($operador == 'divisao'){
	$calc = $num2 / $num1;
	echo 'O resultado da divisão é: '. $calc;
}
else if($operador == 'multiplicacao'){
	$calc = $num1 * $num2;
	echo 'O resultado da multiplicação é: '. $calc;
}
else if($operador == 'resto'){
	$calc = $num1 % $num2;
	echo 'O resultado do resto da divisão é: '. $calc;
}
else if($operador == 'exponenciacao'){
	$calc = $num1 ** $num2;
	echo 'O resultado da exponenciação é: '. $calc;
} else {
	echo 'Ops! Você não escolheu uma operação, tente novamente.';
}

echo '<hr>';

echo '<h3>Uso do IF, Else e AND: Validação de Usuário</h3>';
$usu_nivel = 1; // $usu_nivel = 2;
$usu_email = 'dsilvamendes@gmail.com';
$usu_nome = 'Dalmo';

if(isset($usu_email) AND isset($usu_nome) AND isset($usu_nivel)){
if($usu_nivel === 1){
	echo "<div style='background: green; padding: 10px; color: white;'>
		  Olá, {$usu_nome}, seja bem-vindo ao Painel Administrativo.<br>";
	echo "Nível: {$usu_nivel}, E-mail: {$usu_email}.</div>";
}else {
	echo "<div style='background: red; padding: 10px; color: white;'>
	Área restrita a Administradores. Você não tem Acesso!</div>";
}
}

echo "</div>";
?>