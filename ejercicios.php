<?php

//1. Una función que reciba cinco números enteros como parámetros y muestre por pantalla 
//el resultado de sumar los cinco números (tipo procedimiento, no hay valor devuelto).

function suma(){
    $numeros = range(1,5);
    $resultado = 0;
    $numero2 = null;
    foreach($numeros as $numero){
        $numero = readline("Escriba el numero: ");
        $resultado = $resultado + $numero;
        $numero2 = $numero."+".$numero2;
    }
    echo"El resultado es: $resultado \n";
    echo "$numero2 = $resultado";
}

//2. Una función que reciba cinco números enteros como argumentos y devuelva el resultado de sumar los cinco números.
//Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 
//a una variable de nombre $temporal y muestra el resultado.

function suma2(){
    $numeros = array(2,5,1,8,10);
    $resultado = 0;
    $numero2 = null;
    $numero1 = 0;
    foreach($numeros as $numero){
        $numero1 = readline("Escriba el numero: ");
        $resultado = $numero1 + $numero;
        $numero2 = $numero."+".$numero2;
        echo"el resultado de $numero1 + $numero = $resultado \n";
    }
    echo"El resultado es: $resultado \n";
    echo "$numero2 = $resultado";
}

//3. Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro 
//y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como 
//Volumen = númeroPi * radio * radio * Altura, siendo númeroPi = 3.1416 aproximadamente o usa la constante de PI.

function cilindro(){
    $radio = readline("Escriba el radio del cilindro: ");
    $altura = readline("Escriba la altura del cilindro: ");
    $volumen = 3.1415 * $radio * $radio * $altura;
    echo"El volumen del cilindro es $volumen";
}

//4. Diseñar una función que muestre sí un número es par o impar.

function par(){
    $numero = readline("Escriba un número: ");

$numero2 = $numero%2;

if ($numero2 == 0 and $numero != 0){
    echo "El número ingresado es par";
} else if (($numero2 == 1 or $numero2 == -1) and $numero != 0){
    echo "El número ingresado es impar";
} else if ($numero == 0){
    echo "El número ingresado es igual a 0";
} else {
    echo "El número es inváldo";
}

}

//5. Realizar un algoritmo que incremente un número pasado como valor.

function incrementar(){
    $resultado = 0;
    for($i = 1; $i <= 5; $i++){
    $numero = readline("Escriba el numero que se irá sumando: ");
    $resultado = $resultado + $numero;
    echo"$resultado \n"; 
    }
}

//6. Crear una función que retorne el nombre del mes a partir de un número entre 1 y 12.

function mes(){
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $numero = readline("Escriba el numero de mes que desea conocer: ");
        $numero = $numero-1;
        echo "El numero de mes ingresado corresponde a $meses[$numero]";
}

//7. Desarrollar una función que calcule el IVA aplicable a un producto, la función debe recibir 
//el total del producto y el IVA para aplicar, sino no se pasa un IVA, por defecto deberá tener 10%.

function iva(){
$total = readline("Escriba el total de los productos que ha comprado: ");
$iva = readline("Escriba el iva que se aplicará a los productos que ha comprado: ");
    if($iva > 0){
    $resultado = $total -($total*$iva)/100;
    echo"El valor total a pagar con iva aplicado es $resultado";
    } else if($iva == 0 or $iva == null){
        $resultado = $total -($total*10)/100;
        echo"El valor total a pagar con iva aplicado es $resultado"; 
    } else {
    echo"Los valores registrados no son válidos";
    }
}
//suma();
//suma2();
//cilindro();
//par();
//incrementar();
//mes();
//iva();
?>