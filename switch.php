<?php
//Sentencia Switch
$i = 3;

/*if ($i == 0) {
	echo "i es igual a 0";
}
else if ($i == 1) {
	echo "i es igual a 1";
}
else if ($i == 2) {
	echo "i es igual a 2";
}*/

switch ($i) {
	case 0:
		echo "i es igual a 0";
		break;
	case 1:
		echo "i es igual a 1";
		break;
	case 2:
		echo "i es igual 2";
		break;
	default:
		echo "i no contiene ningun caso";
		break;
}

echo "<br>";

$cadena = "durazno";

switch ($cadena) {
	case 'manzana':
		echo "Tu variable cadena es una Manzana";
		break;
	case 'durazno':
		echo "Tu variable cadena es un Durazno";
		break;
	default:
		echo "Parece ser que tu variable cadena es un tipo de fruta o lo que sea diferente";
		break;
}