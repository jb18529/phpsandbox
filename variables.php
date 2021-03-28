
<?php

# Playlist for PHP Front to Back: https://www.youtube.com/watch?v=oJbfyzaA2QA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=1
	

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// Single line comment
# Single line comment
/*

	Multi-line
	comment

*/

	#Variables
	/*

	- Prefix with $
	- Start with a letter or an underscore
	- Only letters, numbers and underscores
	- Case sensitive

	*/

	#Data types
	/*
		String
		Integers
		Floats
		Booleans
		Arrays
		Objects
		NULL
		Resource

	*/

	$output = 'Hello world!' ;
	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	#String Concatenation
	/*
		String concatenation uses single dot to join strings: 
		$string1 . $string2
		If you want a space than you can add a second dot and put an empty single quotes inbetween the two dots as shown below
		
		An easier way to do string concatenation is to use double quotes: "$string1 $string2!"
	*/

	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 . ' ' . $string2. '!';
	$greeting2 = "$string1 $string2!";

	#Escape sequences take away the special meaning that php gives a character such as below
	
	$string3 = "They're Here";



	$float1 = 4.4;
	$bool1 = true;

	#Constants
	/*
		Constants can be used for server name or for things that won't change
		Need to use define function and popular practice is to give them uppercase
		Second parameter is what will be outputted and when using echo you type in first parameter but with no $ sign in front
		Constants are case sensitive but could be made case insensitive with third parameter called true no longer supported
	*/

	define('GREETING', 'Hello Everyone');
	
	echo GREETING;


	



?>
