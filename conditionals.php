<?php

	# Conditionals

	/*

		== equals
		=== triple equals matches not only value but data type (identical values)
		<
		>
		<=
		>=
		!= not equal to
		!== not identical to

	*/

	/*
	$num = 6;

	if($num == 5) {

		echo '5 passed';

	} elseif($num == 6){
		echo '6 passed';
	} else {
		echo 'did not pass';
	}
	*/
	/*
	# Nesting If statements

	$num = 5;

	if($num > 4) {
		if($num < 10){
			echo "$num passed"; //if outputting a string and a variable you use double quotes
		}
	}
		
		Logical Operators

		and &&
		or ||
		xor: (exclusive or) means one of them has to be true but it cannot be true for both so in this example 6 wouldnt work
	*/
	/*
	$num = 6;

		if($num > 4 XOR $num < 10 ) { //or use && instead of AND
			echo "$num passed";
		}
	*/

	# SWITCH

	$favColor = 'yellow';

	switch($favColor){
		case 'red':
			echo 'Your favorite color is red';
			break;
		case 'blue':
			echo 'Your favorite color is blue';
			break;
		case 'green':
			echo 'Your favorite color is green';
			break;
		default:
			echo 'Your favorite color is something else';
			

	}
	



?>