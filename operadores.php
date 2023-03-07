<?php

echo  '

<head>
<link rel="stylesheet" href="style.css">
</head>
';

//algoritmo para saber si uan persona es mayoer o menor de edad
//$edad = 0; //variable edad.
/*
echo'
<form action="index.php" method="post">
    <input type="number" min="0" placeholder="Digite edad" name="edad" required>
    <input type="submit" value=" Verificar edad" name="datos">
</form>
';

if (isset($_POST['datos'])) {
$edad = $_POST['edad'];//asignar variable al parametro digitado

    if ($edad >= 18 ) {
        echo '<div class="impre">Usted es mayor de edad</div>';
    }else{
        echo 'Usted es menor de edad';
    }
}
*/

//algoritmo para sumar dos números
/*
include 'front.html';

if (isset($_POST['datos'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    echo $num1+$num2;//mala practica valida
    $resultado = $num1+$num2;//buena practica valida

    
}
*/
include 'front.html';
if (isset($_POST['datos'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $tipo = $_POST['tipo'];

/* mala practica
    if ($tipo == 1) {
        echo $num1+$num2;
    }if ($tipo == 2) {
        echo $num1-$num2;
    }if ($tipo == 3) {
        echo $num1*$num2;
    }if ($tipo == 4) {
        if ($num2 == 0) {
            echo 'no valido';
        }else {
            echo $num1/$num2;
        }
    }

    */

    switch ($tipo) {
        case '1':
            $operador = 'de la suma es :';
            $resultado = $num1+$num2;
        break;
        case '2':
            $operador = 'de la resta es :';
            $resultado = $num1-$num2;
        break;
        case '3':
            $operador = 'de la multiplicación es :';
            $resultado = $num1*$num2;
        break;
        case '4':
            $operador = 'de la división es';
            if ($num2 != 0) {
                $resultado = $num1/$num2;
            }else {
                $resultado = 'no valido';
            }
            
        break;
    }
    echo 'El resultado '.$operador.': '.$resultado;
    
}
?>