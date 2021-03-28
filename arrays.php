<?php

	#Array - Variable tha tholds multiple values
	/*
	Types of arrays:
	- Indexed
	- associative
	- multidimensional
	*/


	//Indexed
	$people = array('Kevin', 'Jeremy', 'Sarah');
	$ids = array(23, 55, 12);
	//can do without array and just use [ ] brackets
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Chevy';
	//if you dont know what index your at but want to add to array can do this:
	$cars[] = 'BMW';

	//important functions
	//echo count($cars);
	//print_r($cars); prints out entire array
	//var_dump($cars); shows you index, data type and number of character, isnt't just for arrays can be used for any variable


	//echo $people[2];
	//echo $ids[2];
	//echo $cars[4];

	// Associative arrays, allow you to assign the key and the value with index the keys are the numbers but with associative arrays we can assign that key to whatever we want

	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); // string as key, number as value. This array people is overwriting the previous array
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	//echo $ids[22];
	$people['Jill'] = 42; //adding to associative array
	//echo $people['Jill'];
	//print_r($people);
	//var_dump($people);

	//Multi-dimensional
	$cars = array(
		array('Honda', 20, 10 ),
		array('Toyota', 30, 20),
		array('Ford', 23, 12 )
	);
	/*
	So the first bracket number is which array row are we targeting in this case there are three (0,1, 2 options).
	Then the second number is which element in the array we are outputting also (0,1,2) for this example. Sort of like
	a grid like battleship.
	*/
	echo $cars[1][2];

?>