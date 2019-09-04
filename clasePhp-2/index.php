<?php
$persona = [
    "nombre" => "Jon",
    "apellido" => "Snow",
    "edad" => 27,
    "hobbies" => ["Netflix", "Futbol", "Programar"]
];

$persona["edad"] = 25;
$persona["direccion"] = "Winterfell";
$persona["hobbies"][] = "Tomar mate";

var_dump($persona);



for($i = 0; $i < count($persona); $i++) {
    $index = array_search($persona[$i], $persona);
    if(!(gettype($persona[$i]) != "array")) {
        echo "<p>Mi $index es $persona[$i] </p>";
    } else {
        for($j = 0; $i < count($persona[$i]); $i++){
            echo "<p>Mi $persona[$i] es $persona[$j] </p>";
        }

    }
}
?>