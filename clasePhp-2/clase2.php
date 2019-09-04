<p>Ejercicio 1</p>
<?php for($i = 0; $i <= 10; $i++) {
        $x = $i;?>
        <?php echo $x = $x * 2;?>
        <br/>
<?php }?>

<p>Ejercicio 2</p>

<?php
    $x= 100;
    while($x >= 85 && $x <= 100) {
        echo $x;?>
        <br/>
<?php   $x--;
 } ?>

<p>Ejercicio 3</p>

<?php
        $contador = 1;

        while($contador <= 5) {
            echo ($contador * 2)." ";
    $contador++;
}?>

<p>Ejercicio 4</p>

<?php 
    $contadorTiros = 0;
    $contadorUnos = 0;
    while($contadorUnos < 5) {
        $moneda = rand(0, 1);
        $contadorTiros++;
        if($moneda === 1) {
            $contadorUnos++;
            if($contadorUnos === 5) {
                echo $contadorTiros;
            }
        }
    } ?>
<br>
    <span>Veces consecutivas: </span>
<?php
    $contadorTiros = 0;
    $contadorUnos = 0;

    while($contadorUnos < 5) {
        $moneda = rand(0, 1);
        $contadorTiros++;
        if($moneda === 1) {
            $contadorUnos++;
            if($contadorUnos === 5) {
                echo $contadorTiros;
            }
        } else {
            $contadorUnos = 0;
        }
    }
?>

<p>Ejercicio 5</p>
a.<br>
<?php
    $nombres = ["Ramiro", "Federico", "Rocío", "Florencia", "Javier"];
    for($i = 0; $i < count($nombres); $i++) :
        echo $nombres[$i];?>
        <br>
<?php endfor; ?>

<br>
<br>
b.<br>

<?php 
    $contador= 0;
    while($contador < count($nombres)) :
        echo $nombres[$contador];
        $contador++;?>
        <br>
<?php endwhile; ?>
<br>
<br>
c.<br>
<?php 
    $contador= 0;
    do {
        echo $nombres[$contador];
        $contador++;?>
        <br>
<?php } while ($contador < count($nombres)); ?>
<br>
<br>
d.<br>
<?php 
    $contador= 0;
    foreach($nombres as $item) {
        echo $item.", ";
    }

?>
<br>
<!--
6. Definir un array con 10 números aleatorios entre 0 y 10. 
Recorrer este array para imprimir todos los números. 
La ejecución debe terminarse si alguno de los números encontrados 
es un 5 (Se debe imprimir “Se encontró un 5!”)-->
<p>Ejercicio 6</p>
<?php 
    $randArr = [];
    for($i = 0; $i < 10; $i++) {
        $randNum = rand(0, 10);
        array_push($randArr, $randNum);
    }

    foreach($randArr as $item) {
        if($item != 5) {
            echo $item;?>
            <br>
    <?php } else {
            echo "Se encontró un 5!";
            break;
        }
    } ?>
<!--
7. Definir un array con 10 números aleatorios entre 0 y 100. 
Recorrer este array contando cuantos números son pares.-->
<p>Ejercicio 7</p>
<?php 
    $randArr = [];
    for($i = 0; $i < 100; $i++) {
        $randNum = rand(0, 100);
        array_push($randArr, $randNum);
    }
    $contador = 0;
    foreach($randArr as $item) {
        if($item % 2 === 0) {
            $contador ++;
        }
    }
    echo $contador;
?>
<!--
8. Definir una variable $mascota que sea un array asociativo
a. En el índice animal debe decir qué animal es.
b. En el índice edad debe decir la edad.
c. En el índice altura debe decir la altura.
d. En el índice nombre debe decir el nombre

e. Recorrer los valores del array con un foreach imprimiendo (como 
ejemplo):
animal: perro

edad: 5

altura: 0,60

nombre: Sonic-->
<p>Ejercicio 8</p>
<?php 
    $mascota = [
        "animal" => "perro",
        "edad" => 6,
        "altura" => 0.80,
        "nombre" => "Vachicha"
    ];

    foreach($mascota as $key => $item) :
        echo "$key: $item";?>
        <br>
<?php endforeach; ?>

<!--
9. Partiendo de un archivo con la siguiente variable definida:

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", 
"Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", 
"Finlandia"=>"Helsinki", "Francia" => "Paris", 
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", 
"Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", 
"Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", 
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", 
"Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", 
"Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", 
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");

Crear un script que muestre el nombre de la capital y el país desde 
la variable $ceu.
-->
<p>Ejercicio 9</p>
<?php
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", 
"Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", 
"Finlandia"=>"Helsinki", "Francia" => "Paris", 
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", 
"Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", 
"Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", 
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", 
"Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", 
"Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", 
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");

foreach($ceu as $key => $value) :
    echo "$value es capital de $key";?>
    <br>
<?php endforeach; ?>


<!--
10. Partiendo de un archivo con la siguiente variable definida:


$ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]

];


Crear un script que muestre el nombre de cada país y sus ciudades 
desde la variable $ceu con el siguiente formato:


        Las ciudades de Argentina son:

Buenos Aires
Córdoba
Santa Fé
        Las ciudades de Brasil son:

Brasilia
Rio de Janeiro
Sao Pablo
-->
<p>Ejercicio 9</p>
<?php
$ceu = [

    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],

    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

    "Francia" => ["Paris", "Nantes", "Lyon"],

    "Italia" => ["Roma", "Milan", "Venecia"],

    "Alemania" => ["Munich", "Berlin", "Frankfurt"]

];

foreach($ceu as $key => $value) :
    echo "Las ciudades de $key:";
    for($i = 0; $i < count($value); $i++) :
         ?>
    <br>
    <ul>
        <li><?= $value[$i]; ?></li>
    </ul>
<?php endfor;
endforeach; ?>
<!--
15. A partir del ejercicio anterior:


Agregarle a cada país un dato extra además de sus ciudades llamado 
esAmericano. Este valor debe ser true o false. Hacer que la 
impresión anterior no muestre países que no sean Americanos.

IMPORTANTE: Para que esto funcione de manera prolija deberán crear 
un array asociativo por cada país en donde cada país tendrá los 
datos de sus ciudades y esAmericano.

--> 

