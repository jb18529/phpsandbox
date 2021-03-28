<?php

	#Function is a block of code that can be repeatedly called

	/*
	Ways to format functions:
		Camel Case - myFunction() - most commonly seen in php
		Lower Case - my_function() - has underscore, sometimes seen in php
		Pascal Case - MyFunction() - has uppercase, usually used for classes

	//These are all user defined functions, php also has core functions like print_r and var_dump.
	// Create Simple Function
	function simpleFunction(){
		echo 'Hello World';
	}
	// Run Simple Function
	simpleFunction();
	
	// Function with parameter
	function sayHello($name = 'World'){ //$ used in parameter because its a variable, World is the default value if user doesn't enter anything
		echo "Hello $name<br>";
	}

	//sayHello('Joe');
	//sayHello('Bob'); // Can call as many times in script
	//sayHello(''); // if user doesnt put in parameter than make $name in function parameter equal to a default value

	// Return Value
	function addNumbers($num1, $num2){
		return $num1 + $num2; // you could put echo here instead of return but if you put return it doesn't output it to the webpage so put echo before call function

	}

	echo addNumbers(2, 3); //put echo in front of this if using return
	*/
	// Passing Arguments by Reference

	$myNum = 10;

	function addFive($num){
		$num += 5;

	}

	function addTen(&$num){ //addTen will be passed in by reference by putting ampersand (&) in front of $num, normally it is passed in by value

		$num += 10;
	}

	addFive($myNum);

	echo "value: $myNum<br>"; // This will output 10, because inputting a variable does not change the value without a reference

	addTen($myNum);

	echo "Value: $myNum<br>"; // This will output 20, this one will manipulate the element in the variable

?>