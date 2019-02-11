<?php

//Sentencias If, Else If y Else

$usuario = 22;
$edadDefault = 18;

//Si manzana es igual que durazno entonces
//De lo contrario si durazno es igual a guayaba entonces
//De lo contrario ...
if ($usuario >= $edadDefault) {
	echo "Mostrar contenido";
} else {
	echo "No te podemos mostrar el contenido por que no eres mayor de edad :(";
}

?>