<?php
$persona = [
    "nombre" => "Jon",
    "apellido" => "Snow",
    "edad" => 27,
    "hobbies" => [
        "Netflix",
        "Futbol",
        "Programar"
    ]
    ];
    $persona["edad"] = 25;

    $persona["direccion"] = "Winterfell";

    $persona["hobbies"][] = "Videojuegos";

    var_dump($persona);
?>