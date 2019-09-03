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
    }

    echo "Veces consecutivas";
    $contadorTiros = 0;
    $contadorUnos = 0;

    while($contadorUnos < 5) {
        $moneda = rand(0, 1);
        $contadorTiros++;
        if($moneda === 1) {
            $contadorUnos++;
            if($contadorUnos === 5) {
                echo "\n $contadorTiros \n";
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
    for($i = 0; $i < count($nombres); $i++) {
        echo $nombres[$i].", ";
    }
?>
