<?php 
	// Practice №1, Task 5, Variant 5
	srand();
	$side = rand(0, 10000)/100; // random value generation 
	$side=$_POST["side"];
	if (is_numeric($side)){
	$square = pow($side, 2) * 6;
	$volume = pow($side, 3);
	echo 'Side: ' . $side . '<br>Square: ' . $square . '<br>Volume: ' . $volume;}
	else
		echo "Nope"
?>