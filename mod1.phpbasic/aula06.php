<link rel="stylesheet" href="style.css">
<?php /*CeproiRR - Centro Profissional de Informática
		Curso Web Developer PHP - Fullstack Macuxi
		Professor: Dalmo Silva Mendes, Boa Vista-RR, 2021 */ ?>
<?php
// Aula 06: Operadores Aritméticos: Simulando uma Calculadora
// https://www.php.net/manual/pt_BR/language.operators.arithmetic.php
/* Testado no PHP7,8 - Podemos usar
Exemplo:	Nome:	        Resultado:
+$a	        Identidade	    Conversão de $a para int ou float conforme apropriado.
-$a	        Negação	        Oposto de $a.
$a + $b	    Adição	        Soma de $a e $b.
$a - $b	    Subtração	    Diferença entre $a e $b.
$a * $b	    Multiplicação	Produto de $a e $b.
$a / $b	    Divisão	        Quociente de $a e $b.
$a % $b	    Módulo	        Resto de $a dividido por $b.
$a ** $b	Exponencial	    Resultado de $a elevado a $b. Introduzido no PHP 5.6.
 */



$n1 = 2;
$n2 = 4;

$soma = $n1 + $n2;
$subtracao = $n2 - $n1;
$divisao = $n2 / $n1;
$resto = $n2 % $n1;
$multiplicacao = $n1 * $n2;
$exponenciacao = $n1 ** $n2;
$identidade = +$n1;
$negacao = -$n1;


echo "<div class='php'>";

print '<h1>Operadores Aritméticos</h1>';
print '<hr>';

echo '<p>O resultado da soma é: <b>'.$soma.'</b><p>';
echo "<p>O resultado da subtração é: <b>{$subtracao}</b><p>";
echo "<p>O resultado da divisão é: <b>$divisao</b><p>";
echo "<p>O resultado do resto é: <b>$resto</b><p>";
echo "<p>O resultado da multiplicação é: <b>$multiplicacao</b><p>";
echo "<p>O resultado da exponenciação é: <b>$exponenciacao</b><p>";
echo "<p>O resultado da identidade é: <b>$identidade</b><p>";
echo "<p>O resultado da negação é: <b>$negacao</b><p>";


echo "</div>";
?>
