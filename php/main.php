<?php
#Sintaxis de PHP
#Tipos de variables 

#Enteros
$entero = 10;

#Flotantes
$decimal = 10.5;

#Cadenas
$cadena = "Hola Mundo";

#Booleanos
$verdadero = true;
$falso = false;

#Ciclos
#ciclo for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

#Ciclos
#ciclo while
$i = 0;
while ($i <10) {
    echo $i . "<br>"; #Para concatebar utilizo punto
    $i++;
}
#Ciclo do while
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} whiole ($i < 10);

#Estructuras de control
if(verdadero){
    echo "Verdadero";
}else{
    echo "Falso";
}

#if anidado
if($verdadero){
    if($falso){
        echo "Verdadro";
    }else{
        echo "Falso";
    }
}else{
    echo"Falso";
}

#Funciones
funtion suma ($a, $b){
    return $a + $b;
}

#Arrays
$array = array(1,2,3,4,5,6,7,8,9,10);

#Arrays de texto
$array = array("uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez"); 
?>
