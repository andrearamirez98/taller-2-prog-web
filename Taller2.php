<?php
echo "1. Ciclo while<br><br>";


	echo "a. Imprimir en pantalla los numeros del 1 al 10<br>";
	$num = 1;
	while ($num <= 10) {
		echo $num."<br>";
		$num ++;
	}


	echo "b. Sumar los números del 1 al 100<br>";

	$num1 = 1;
	$num2 = 1;
	$resultado;
	while ($num1 < 100) {
		$resultado = $num1 + $num2;
		echo $num1." + ".$num2." = ".$resultado."<br>";
		$num1++;
	}


	echo "<br>c. Sumar los numeros pares del 1 al 50<br>";

	$pares = 1;
	$conspar = 2;
	$resut;

	while ($pares < 50) {
		if ($pares % 2 == 0) {
			$resut = $pares + $conspar;
			echo $pares." + ".$conspar." = ".$resut."<br>";
			$pares++;
		} else {
			echo "El numero".$pares."no es un mumero par.<br>";
			$pares++;
		}
	}

	echo "<br>d. Sumar los números impares del 1 al 50<br><br>";

	$num = 0;
	$consimpar = 2;
	$resut;

	while ($num< 50) {
		if ($num % 2!=0) {
			$resut = $num+ $consimpar;
			echo $num." + ".$consimpar." = ".$resut."<br>";
			$num++;
		} else {
			echo "El numero".$num."es par .<br>";
			$num++;
		}
	}


	echo "<br><br>2. Ciclo For<br><br>";
	echo "a. Imprimir los numeros del 1 al 100<br>";

	
	for ($num =1; $num <101;$num++){
		echo $num."<br>";
		
	}

	echo "b.Imprimir las tablas de multipicar de un número del 1 al 20<br>";

	$num=1;
	$i=1;
	$result;
	while($i<21){
	for ($num=1;$num<21; $num++){
	$result=$num*$i;
	echo $num."*".$i."=".$result."<br>";
	
}
	}

	echo "c. Solucionar el factorial de un número<br>";

	$num = 3;
	$fac = 1;

	echo "Factorial de: ".$num." = ";

	for ($c=1; $c <= $num; $c++) { 
		$fac *= $c;
		echo $c;

		if ($c == $num) {
			echo " = ";
		}else {
			echo " X ";
		}
	}
	echo $fac;


	echo "d.Solucionar el numero de Fibonacci<br>";

	$num4 = 1;
	$num5 = 0;
	$limit = 10;

	echo "El número Fibonacci de: ".$limit."es: <br>";

	for ($d=0; $d <= $limit; $d++) { 
		$suma = $num4 + $num5;
		$num4 = $num5;
		$num5 = $suma;

		echo $suma." <br>";
	}

	echo "3. Ciclo Foreach<br>";

	echo "a. Imprimir en pantalla el siguente array('Alonso','Pedro','Victor','Manuela')<br>";

	$name = array('Alonso','Pedro','Victor','Manuela');
	foreach ($name as $name) {
		echo $name."<br>";
	}

	echo "b.Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en orden ascendente<br>";
/*
	$aleatorio = array();

	$aleatorio[0] = 20
	$aleatorio[1] = 50
	$aleatorio[2] = 150
	$aleatorio[3] = 200
	$aleatorio[4] = 250

	foreach ($aleatorio as $aleatorio) {
		if
	}*/

echo "c.Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en orden descendente";
echo "d. Pedirle a usuario que ingrese 5 nombres y mostrarlos";
echo "4. Funciones";
echo "a";
echo "b";



echo "<br>Punto 5B: <br><br>";

echo "Ingrese dos valores:<br><br>";

$valor1 = 20;
$valor2 = 5;

$numerosArray = array($valor1, $valor2);

$c = 0;

	while ($c <= 1) {
		echo decbin($numerosArray[$c])."<br><br>";
		$c++;
	}

echo "<br><br>5. Array<br><br>";
echo "C.<br><br>";
/*
echo "Por favor ingrese cuatro numeros: <br><br>";

$nume1 = 2;
$nume2 = 5;
$nume3 = 8;
$nume4 = 10;

$eleCuadrado1 = $nume1 ** 2;
$eleCuadrado2 = $nume2 ** 2;
$eleCuadrado3 = $nume3 ** 2;
$eleCuadrado4 = $nume4 ** 2;

$eleCubo1 = $nume1 ** 3;
$eleCubo2 = $nume2 ** 3;
$eleCubo3 = $nume3 ** 3;
$eleCubo4 = $nume4 ** 3;

$eleCuarta1 = $nume1 ** 4;
$eleCuarta2 = $nume2 ** 4;
$eleCuarta3 = $nume3 ** 4;
$eleCuarta4 = $nume4 ** 4;

$miArreglo[0][0][0][0] = $nume1;
$miArreglo[1][0][0][0] = $nume2;
$miArreglo[2][0][0][0] = $nume3;
$miArreglo[3][0][0][0] = $nume4;

$miArreglo[0][0][0][0] = $eleCuadrado1;
$miArreglo[0][1][0][0] = $eleCuadrado2;
$miArreglo[0][2][0][0] = $eleCuadrado3;
$miArreglo[0][3][0][0] = $eleCuadrado4;

$miArreglo[0][0][0][0] = $eleCubo1;
$miArreglo[0][0][1][0] = $eleCubo2;
$miArreglo[0][0][2][0] = $eleCubo3;
$miArreglo[0][0][3][0] = $eleCubo4;

$miArreglo[0][0][0][0] = $eleCuarta1;
$miArreglo[0][0][0][1] = $eleCuarta2;
$miArreglo[0][0][0][2] = $eleCuarta3;
$miArreglo[0][0][0][3] = $eleCuarta4;


	echo $miArreglo[0][0][0][0]."<br><br>";
	echo $miArreglo[1][0][0][0]."<br><br>";
	echo $miArreglo[2][0][0][0]."<br><br>";
	echo $miArreglo[3][0][0][0]."<br><br>";*/

?>