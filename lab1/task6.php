<?php 
	// Practice №1, Task 6, Variant 5
	srand();
	$a = rand(0, 10000)/100; //random values generation
	$b = rand(0, 10000)/100;
	$c = rand(0, 10000)/100;
	$a=$_POST["a"];
	$b=$_POST["b"];
	$c=$_POST["c"];
	if (is_numeric($a) && is_numeric($b) && is_numeric($c)){

	$p = ($a + $b + $c) / 2; //semiperimeter value

	echo 'Sides:<br>a: ' . $a . '<br>b: ' . $b . '<br>c: ' . $c . '<br><br>';
	
	if ($a < $b + $c && $b < $a + $c && $c < $a + $b) //triangle existance check
		echo 'Radius: ' . sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)) / $p; //incircle radius
	else
		echo 'There is no triangle with this set of sides';
}
else
echo "Nope"
?>