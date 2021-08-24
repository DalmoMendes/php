<link rel="stylesheet" href="style.css">
<?php
/* CEPROIRR - CENTRO PROFISSIONAL DE INFORMÁTICA
 * SEJA BEM-VINDO AO CURSO DE PHP BÁSICO.
 * CURSO CRIADO POR DALMO SILVA MENDES
 * SITE: CEPROIRR.COM.BR
 */
/* Testado no PHP7,8
  Aula:03 Tipos de saídas no PHP
 */

$var_site = "Olá! Seja bem-vindo ao site Ceproirr.com.br.";
echo '<div class="php">';

echo $var_site; echo ' Saída com echo. <br>';
print $var_site; echo ' Saída com print. <br>';
print_r($var_site); echo ' Saída com print_r(). <br>';
printf($var_site); echo ' Saída com printf(). <br>';
var_dump($var_site); echo ' Saída com var_dump(). <br>';

/*
Definições de Saídas:
echo: É o comando de saída mais utilizado.
 * Porém o echo não é uma função,
 * então não é obrigatório usar parênteses. 
 * Ex: <?php echo $teste?> ou <?= $teste?>
Link: https://www.php.net/manual/pt_BR/function.echo.php
 * 

print: Não é uma função real (ela é uma construção da linguagem), 
 * dessa forma você não precisa usar parênteses com sua lista de argumentos.
 * As principais diferenças para echo são que print aceita apenas um único argumento e sempre retorna 1.
 * Link:https://www.php.net/manual/pt_BR/function.print
 *  
print_r():Imprime informação sobre uma variável de forma legível.
 * Além disso,  mostra propriedades protegidas e privadas de objetos.
 * Link: https://www.php.net/manual/pt_BR/function.print-r
 * 
printf():Produz uma saída de acordo com format, o qual é descrito na documentação para sprintf().
 * Link: https://www.php.net/manual/pt_BR/function.sprintf.php
 * 
var_dump(): Exibe informações sobre a variável. 
 * Além disso, mostra propriedades protegidas e privadas de objetos.
 * Esta função mostrará uma representação estruturada sobre
 * uma ou mais expressões, incluindo o tipo e o valor. 
 * Arrays e objetos são explorados recursivamente
 * com valores identados na estrutura.
 * Link: https://www.php.net/manual/pt_BR/function.var-dump
*/
echo '</div>';
