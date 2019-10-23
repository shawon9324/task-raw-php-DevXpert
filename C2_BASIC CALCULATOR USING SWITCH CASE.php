<?php

	$num1 = 10;
	$num2 =	25;
	$option = 4;



	echo '<b><font color = red># Basic Calculator Using Switch Case In PHP</font></b><br><br>';


	echo "1. Summation<br>";
	echo "2. Subtraction<br>";
	echo "3. Multiplication<br>";
	echo "4. Division<br><br>";


	echo "<small>Your Option : $option</small><br>";
	echo "<small>Number 1 : $num1</small><br>";
	echo "<small>Number 2 : $num2</small><br>";


	switch ($option) {
		case '1':
			echo "<small>Result: $num1 + $num2 = </small>".sum($num1,$num2);
		break;	
		case '2':
			echo "<small>Result: $num1 + $num2 = </small>".sub($num1,$num2);
		break;	
		case '3':
			echo "<small>Result: $num1 + $num2 = </small>".multi($num1,$num2);
		break;	
		case '4':
			echo "<small>Result: $num1 + $num2 = </small>".div($num1,$num2);
		break;
	
		default:
			echo "<font color = red>Wrong Input!Try Again</font>";
		break;
	}

//ALL FUNCTION : sum(),sub(),multi(),div()

	function sum($x,$y)
	{
		$sum = $x + $y;
		return $sum;
	}
	function sub($x,$y)
	{
		$sub = $x - $y;
		return $sub;
	}
	function multi($x,$y)
	{
		$multi = $x * $y;
		return $multi;
	}
	function div($x,$y)
	{
		$div = $x / $y;
		return $div;
	}

?>