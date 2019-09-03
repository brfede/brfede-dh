<?php
    # 1 - Comparación número mayor

    $x = 25;
    $y = 83;

    if($x > $y) {
        echo "El número mayor es $x";
    } else {
        echo "El número mayor es $y";
    }

    # 2 - Número aleatorio

    $x = 1;
    $y = 5;

    $randomNum = rand($x, $y);

    if($randomNum === 3 || $randomNum === 5) {
        echo $randomNum;
    }

    # 3 - No es 3

    if($randomNum != 3) {
        echo "El número NO es 3";
    } else {
        echo $randomNum;
    }

    # 4 -  Número entre 1 y 100

    $x = 1;
    $y = 100;

    $randomNum = rand($x, $y);

    if($randomNum > 50) {
        echo "El número es mayor a 50";
    } else {
        echo "El número es menor a 50";
    }
    /*En caso de ser igual a 50 no entraría 
    en la condición por lo que no se vería ningún mensaje*/


    # 5 - Usr + pass
    $nombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

    if($nombreDeUsuario === "admin" && $ContraseniaDeUsuario === "1234") {
        echo "Bienvenido!";
    } else {
        "Credenciales incorrectas";
    }
    # 5 - b)
    if($nombreDeUsuario === "admin" && $ContraseniaDeUsuario === "1234") {
        echo "Bienvenido!";
    } else if ($nombreDeUsuario !== "admin") {
        "Nombre de usuario incorrecto";
    } else if ($ContraseniaDeUsuario !== "1234") {
        echo "Contraseña incorrecta";
    }

    # 6 - 

    $edad = 32;
    $casado = false;
    $sexo = "Masculino";

    if(($edad > 18 && !$casado) /*parte b*/ || $sexo === "Otro") {
        echo "Bienvenido";
    }

    # 7 - cantidad de alumnos

    $cantidadDeAlumnos = 24;

    if($cantidadDeAlumnos) {
        echo "true";
    } else {
        echo "false";
    }

    #Imprime true para todo valor distinto de 0 o null

    # 8 - Numero par

    $numero = 38;

    echo ($numero % 2 === 0) ? "El número es par" : "El número es impar";

    # 9 - Nota - switch

    $nota = 8;
    switch($nota) {
        case 0:
            echo "desaprobado";
            break;
        case 1:
            echo "desaprobado";
            break;
        case 2:
            echo "desaprobado";
            break;
        case 3:
            echo "desaprobado";
            break;
        case 4:
            echo "zafamos";
            break;
        case 5:
            echo "zafamos";
            break;
        case  6:
            echo "Bien!!!";
            break;
        case  7:
            echo "Bien!!!";
            break;
        case  8:
            echo "Bien!!!";
            break;
        case 9:
            echo "MUY bien!!";
            break;
        case 10:
            echo "Excelente!!!!";
            break;
        default:
            echo "El número no es válido";
            break;
    }



?>