<?php 
	// Practice №1, Task 7, Variant 5
	srand();
	$number = rand(0, 1000000); //random values generation
	$number=$_POST["number"];
	if (is_numeric($number)){
	
	$i = 0;
	$digits = array();

	echo 'Number: ' . $number . '<br>The biggest possible number from digits of given number: ';

	while ($number % 10 !== 0 || $number >= 10) { //adding number digits into array
		$digits[$i] = $number % 10;
		$i++;
		$number = floor($number / 10);
	}

	rsort($digits); //sorting digits in descending order

	foreach ($digits as $digit) //digits output
		echo $digit;

	unset($digit);

	if (count($digits) == 0) //case of input number equal to zero
		echo '0';
	}
	else
		echo "Nope";
?>