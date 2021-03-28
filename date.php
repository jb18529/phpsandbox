<?php
	//echo date('D'); 	// Day: lowercase is number, upper case is name of day like monday
	//echo date('m');   // Month: lowercase is number, uppercase is name of month
	//echo date('y');   // Year: lower case is last two digits of number, uppercase is all four digits of number
	//echo date('l'); // gives us day of the week

	//echo date('Y/m/d'); //all together
	//echo date('m-d-Y'); // different format

	//echo date('h'); //hour
	//echo date('i'); // minutes
	//echo date('s'); // seconds
	//echo date('a'); // am or pm

	// Set Time Zone
	date_default_timezone_set('Europe/London');
	
	//echo date('h:i:sa');

	/*
	Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

	*/

	#timestamps allow you to assign specific dates and times and eventually output them

	$timestamp = mktime(10, 14, 54, 9, 10, 1981); //hours, minutes, seconds, month, day, year

	//echo $timestamp; // this will give unix timestamp

	//echo date('m/d/Y h:i:sa', $timestamp); //outputs timestamp variable in month, day, year and time format

	#String to time convert string to time, strtotime
	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow'); // can be really vague like this and it works!
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 Months');

	//echo $timestamp2;

	echo date('m/d/Y h:i:sa', $timestamp5);

	//for more info go to: php.net/manual/en/function.(whatever function you want).php
?>