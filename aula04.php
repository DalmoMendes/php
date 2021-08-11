<link rel="stylesheet" href="style.css">
<?php
/* CEPROIRR - CENTRO PROFISSIONAL DE INFORMÁTICA
 * SEJA BEM-VINDO AO CURSO DE PHP BÁSICO.
 * CURSO CRIADO POR DALMO SILVA MENDES
 * SITE: CEPROIRR.COM.BR
 */
/*
  Aula:Os Quatro tipos escalares do PHP
// Fonte: https://www.php.net/manual/pt_BR/language.types.intro.php
 */
echo '<div class="php">';

$bool = "Verdadeiro ou falso - Booleanos";
$verdadeiro_flaso = "ceproirr.com.br";
echo "<h1>$bool</h1>";
	echo $verdadeiro_flaso . '<br>';
	var_dump((bool)$verdadeiro_flaso); echo "<br>";
	var_dump((bool)1); echo "<br>";
	var_dump((bool)0); echo "<br>";
echo '<hr>';


$string = "Texto - String";
$titulo = "Seja bem-vindo ao curso";
echo "<h1>$string</h1>";
	echo $titulo . '<br>';
	var_dump((string)$titulo); echo "<br>";
	var_dump(($titulo)); echo "<br>";
echo '<hr>';


$int = "Inteiro - int";
$idade = '21';
echo "<h1>$int</h1>";
	echo $int . '<br>';
	var_dump((int)$idade); echo "<br>";
	var_dump(($idade)); echo "<br>";
echo '<hr>';


$float = "Décimal - Ponto flutuante";
$total = 256.55;
$nota = 7.8;
echo "<h1>$float</h1>";
	echo $total . '<br>';
	var_dump((float)$total); echo "<br>";
	var_dump(($total)); echo "<br>";
	var_dump(($nota)); echo "<br>";
echo '<hr>';

/*

Booleanos: Este é o tipo mais simples. Um booleano expressa um valor de verdade. Ele pode ser true ou false.
Para especificar um booleano literal, use as palavras-chave true ou false. Ambas são case-insensitive.
Fonte: https://www.php.net/manual/pt_BR/language.types.boolean.php

Inteiros: Podem ser especificados em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2). 
O operador de negação pode ser usado para indicar um inteiro negativo.
A partir do PHP 7.4.0, inteiros literais podem conter sublinhados (_) entre os dígitos,
para melhorar a sua leitura. Estes sublinhados serão removidos pelo scanner do PHP.
Fonte: https://www.php.net/manual/pt_BR/language.types.integer.php

String: Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte. 
Isso significa que o PHP possui suporte a um conjunto de apenas 256 caracteres.
Nota String: A partir do PHP 7.0.0, não há restrições particulares em relação ao tamanho
de uma uma string em compilações de 64 bits. Em compilações de 32 bits e em versões
anteriores, uma string pode ter o tamanho de até 2GB (máximo de 2147483647 bytes).
Fonte: https://www.php.net/manual/pt_BR/language.types.string.php

Floats: Números de ponto flutuante (também conhecidos como "floats", "doubles" ou "números reais"),
podem ser especificados utilizando qualquer uma das seguintes sintaxes:
$a = 1.234;  $b = 1.2e3;  $c = 7E-10;  $d = 1_234.567; // a partir do PHP 7.4.0
Fonte: https://www.php.net/manual/pt_BR/language.types.float.php

*/

echo '</div>';
