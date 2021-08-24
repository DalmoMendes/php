<link rel="stylesheet" href="style.css">
<?php
/* CEPROIRR - CENTRO PROFISSIONAL DE INFORMÁTICA
 * SEJA BEM-VINDO AO CURSO DE PHP BÁSICO.
 * CURSO CRIADO POR DALMO SILVA MENDES
 * SITE: CEPROIRR.COM.BR
 */
/* Testado no PHP7,8
  Aula5: Arrays
 */
/*
   Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. 
 * Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), 
 * hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. 
 * Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.
 * Fonte: https://www.php.net/manual/pt_BR/language.types.array.php
 */

echo '<div class="php">';

$ex1 = "EX 01: Array simples números";
$NUMEROS = array(0,1,2,3,4,5,6,7,8,9);

// Exibir propriedade do array em linha;
echo "<h1>$ex1</h1>";
var_dump($NUMEROS);

// Exibir propriedade array com <pre>
echo "<pre>";
    var_dump($NUMEROS);
echo "</pre>";

// Imprimir um elemento do array
echo $NUMEROS[1];
echo "<hr>";

$Ex2 = "Ex 02: Array simples dias da semana";
$week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

//week -> Português com indice em inglês
$week2 = array(
    "Sunday" => "Domingo",
    "Monday" => "Segunda-feira",
    "Tuesday" => "Terça-feira",
    "Wednesday" => "Quarta-feira",
    "Thursday" => "Quinta-feira",
    "Friday" => "Sexta-feira",
    "Saturday" => "Sábado"
    );

// Exibir propriedade do array em linha;
echo "<h1>$Ex2</h1>";
var_dump($week);

// Exibir propriedade array com <pre>
echo "<pre>";
    var_dump($week);
echo "</pre>";

// Imprimir um elemento do array ($week e $week2)
$dia = date('d/m/Y');
echo "Boa Vista-RR, " . $week[1] . " $dia. <br>";
echo "Boa Vista-RR, " . $week2['Monday'] . " $dia. <br>";

echo "<hr>";


$Ex3 = "Ex 03: Array com chaves - meses ";
$meses = array(
    1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho",
    7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro",
    );

// Exibir propriedade do array em linha;
echo "<h1>$Ex3</h1>";
var_dump($meses);

// Exibir propriedade array com <pre>
echo "<pre>";
    var_dump($meses);
echo "</pre>";

// Imprimir um elemento do array
echo "Boa Vista-RR, {$week[1]}, 16  de {$meses[8]} 2021.";
echo "<hr>";

$Ex4 = "Ex 04: Array com valores Int e String - Registro";
$Cliente = array(
    "code" => 1,
    "name" => "Meg",
    "age" => 9,
    "phone" => 991206763,
    "city" => "Boa Vista",
    "district" => "Cruviana",
    "street" => "Equatorial",
    "number" => "0x1320",
    "state" => "Roraima"
    );

// Exibir propriedade do array em linha;
echo "<h1>$Ex4</h1>";
echo "<pre>";
    var_dump($Cliente);
echo "</pre>";

// Exibindo informações especificas do cliente.
echo "O cliente <b>{$Cliente['name']}</b>, telefone (95){$Cliente['phone']} foi notificado com sucesso!";

// Exibir todas as informações do cliente:
echo "<div style='text-align: left; padding: 8px 15px 15px 30px; background: green; color: #fff; border-radius:5px; width: 50%; margin: 10px auto; '>";
echo "<h1>Registro do Cliente: {$Cliente['code']}</h1>";
foreach ($Cliente as $key => $value) {
    echo "<b>{$key}</b>:  {$value} <br>";
}
echo "</div>";
echo "<hr>";


$Ex5 = "Ex 05: Array multidimensional - My Pets";
$registros = array(  
    array("code" => 2, "name" => "Spayk", "age" => 6),
    array("code" => 3, "name" => "Mikey", "age" => 10),
    array("code" => 4, "name" => "Pantera", "age" => 10),
    array("code" => 5, "name" => "Billy", "age" => 15)
);
// Exibir propriedade do array;
echo "<h1>$Ex5</h1>";
echo "<pre>";
    var_dump($registros);
echo "</pre>";

// Exibir somente o name dos pets
echo "<div style='text-align: left; padding: 5px; background: red; color: #fff; border-radius:5px; width: 50%; margin: 10px auto; '>";
echo "<h2><center>My Pets</center></h2>";
echo "Nome: " . $registros[0]['name'] . '<br>';
echo "Nome: " . $registros[1]['name'] . '<br>';
echo "Nome: " . $registros[2]['name'] . '<br>';
echo "Nome: " . $registros[3]['name'] . '<br>';
echo "</div>";

// Exibir todas as informações dos pets:
echo "<h1>Exibindo registros de clientes Pets</h1>";
foreach ($registros as $indices) {
    foreach ($indices as $pets => $value) {
        if($pets == 'code') // Separa registros com <hr>.
        { echo '<hr>'; }
        echo "<div style='text-align: left; padding: 5px; background: orange; color: #fff; width: 50%; margin: 1px auto; border-radius: 5px; '>";
        echo "<b>{$pets}</b>:  {$value} <br></div>"; 
    }
}

echo '</div>';
