<?php
// You can look up common string functions in php go to: php.net/whateverfunctionyouwanttolookup

	# substr()
	# Substring returns a portion of a string

	//$output = substr('Hello',1, 3); // first number is start, second number is end so output: ell
	//$output = substr('Hello', -2); // negative is in reverse
	//echo $output;

	# strlen()
	# String length returns the length of a string

	//$output = strlen('Hello World'); 
	//echo $output; // will count characters including space, output: 11

	# strpos()
	# String position finds the position of the first occurence of a sub string
	
	//$output = strpos('Hello World', 'o'); // will give output of 4 as that is first position of o
	//echo $output;

	# strrpos()
	# String position finds the position of the last occurence of a sub string
	
	//$output = strrpos('Hello World', 'o'); // will give output of 7 as that is last position of o
	//echo $output;

	# trim()
	# Strips whitespace

	/*
	$text = 'Hello World               ';
	var_dump($text); // outputs 26 as it includes whitespace

	$trimmed = trim($text); // will shrink it to 11. If often used for form input when user enters a lot of whitespace
	var_dump($trimmed);
	*/

	# strtoupper
	# Makes everything uppercase
	//$output = strtoupper('Hello world');
	//echo $output;

	# strtolower
	# Makes everything lowercase
	//$output = strtolower('Hello world');
	//echo $output;

	# ucwords()
	# Capitalize every word
	//$output = ucwords('hello world');
	//echo $output;

	# str_replace()
	# Replace all occurences of a search string with a replacement
	//$text = 'Hello World';
	//$output = str_replace('World', 'Everyone', $text); //First: What word we are searching for, Second: what word we are going to replace it with, Third: the actual string we are searching
	//echo $output;

	# is_string()
	# Check to if it is a string or not

	//$val = '22';
	//$output = is_string($val);

	//echo $output; // output of 1 means its strings, if its not we get output of nothing

	/*
	// A loop that goes through the array and tells whether or not the elements to see if they are variables
	$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
	foreach($values as $value){ 
		if(is_string($value)){
			echo "{$value} is a string<br>"; // <br> means line break in html
		}
	}
	*/

	# gzcompress()
	# Compress a string

	
	$string =
	"Lorem ipsum dolor sit amet, consectetur adipiscing 
	elit, sed do eiusmod tempor incididunt ut labore et 
	dolore magna aliqua. Vel turpis nunc eget lorem dolor 
	sed viverra ipsum. Tortor at risus viverra adipiscing 
	at in tellus integer. Velit aliquet sagittis id 
	consectetur purus ut faucibus pulvinar elementum. Nam 
	at lectus urna duis convallis. Posuere urna nec 
	tincidunt praesent semper feugiat. Magna ac placerat 
	vestibulum lectus mauris ultrices eros in. Vivamus at 
	augue eget arcu dictum varius duis. Pellentesque 
	habitant morbi tristique senectus et netus et. Et 
	malesuada fames ac turpis egestas maecenas pharetra. 
	Nisl nisi scelerisque eu ultrices vitae auctor eu. 
	Euismod nisi porta lorem mollis aliquam ut. Ipsum a 
	arcu cursus vitae congue mauris rhoncus aenean vel. Non 
	blandit massa enim nec dui nunc mattis enim ut. Diam 
	maecenas sed enim ut sem viverra aliquet eget.

	Tincidunt id aliquet risus feugiat in ante metus.
	Suspendisse in est ante in. Feugiat in ante metusdictum 
	at tempor commodo. Quisque sagittis purus sit amet 
	volutpat consequat mauris nunc. Semper viverra nam l
	libero justo laoreet sit. At consectetur lorem donec
	massa sapien faucibus et. Sed risus pretium quam 
	vulputate dignissim suspendisse in. Tempus egestas sed 
	sed risus pretium quam vulputate dignissim. At auctor 
	urna nunc id cursus. Mauris sit amet massa vitae tortor 
	condimentum lacinia quis vel. Nulla malesuada 
	pellentesque elit eget gravida cum sociis. Nisl 
	suscipit adipiscing bibendum est ultricies integer 
	quis. Ipsum dolor sit amet consectetur adipiscing elit 
	pellentesque habitant morbi. Sit amet volutpat 
	consequat mauris nunc congue. Leo a diam sollicitudin 
	tempor id.";


	$compressed = gzcompress($string);

	echo $compressed; // creates an unreadable format, just a compressed version that you can pass through another function or API

	$original = gzuncompress($compressed); // this uncompresses text
	echo $original; 
	



?>






