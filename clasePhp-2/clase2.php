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


<p>Ejercicio 10</p>
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


<p>Ejercicio 11</p>
<?php
$ceu = [

    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano" => true],

    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano" => true],

    "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano" => true],

    "Francia" => ["Paris", "Nantes", "Lyon", "esAmericano" => false],

    "Italia" => ["Roma", "Milan", "Venecia", "esAmericano" => false],

    "Alemania" => ["Munich", "Berlin", "Frankfurt", "esAmericano" => false]

];

foreach($ceu as $key => $value) :
    if($key["esAmericano"]) :

        echo "Las ciudades de $key:";
        for($i = 0; $i < count($value); $i++) :
            ?>
    <br>
    <ul>
        <li><?= $value[$i]; ?></li>
    </ul>
<?php endfor;
endif;
endforeach; ?>