<?php
/*
	// Check for posted data, so check if data was submitted
	if(filter_has_var(INPUT_POST, 'data')){ //Change to INPUT_GET, if method = "get"
		echo 'Data Found';
	} else {
		echo 'No Data';

	} 

	//filter_has_var can check for post or get values, instead of saying if(isset... see get_post.php for details. 
	if(filter_has_var(INPUT_POST, 'data')){
		$email = $_POST['data'];

		// Remove illegal chars (sanitize data, remove any characters we don't want)
		//So you cleaned and sanitized the input email address
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email.'<br>';
		// Then you tested for the sanitized email for validation
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
			echo 'Email is valid';
		} else{
			echo 'Email is NOT valid';
		}
		
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){ //FILTER_VALIDATE_EMAIL is validation which is going to be an email address. This is a much simpler way for checking for an email than using some crazy regular expression
			echo 'Email is valid';
		} else{
			echo 'Email is NOT valid';
		}
		
	}
		//VALIDATION:
		#FILTER_VALIDATE_BOOLEAN
		#FILTER_VALIDATE_EMAIL
		#FILTER_VALIDATE_FLOAT
		#FILTER_VALIDATE_INT
		#FILTER_VALIDATE_IP //IP address
		#FILTER_VALIDATE_REGEXP //regular expression
		#FILTER_VALIDATE_URL

		//SANITIZATION:
		#FILTER_SANITIZE_EMAIL
		#FILTER_SANITIZE_ENCODED
		#FILTER_SANITIZE_NUMBER_FLOAT
		#FILTER_SANITIZE_NUMBER_INT
		#FILTER_SANITIZE_SPECIAL_CHARS // very helpful by preventing people from inserting script tags into a form that ouputs something on page
		#FILTER_SANITIZE_STRING
		#FILTER_SANITIZE_URL
		
#filter_var when you have defined a variable

	$var = 'jbgvugv';

	if(filter_var($var, FILTER_VALIDATE_INT)){
		echo $var. ' is a number';
	} else {
		echo $var. ' is NOT a number';
	}


	$var = '<script>alert(1)</script>';
	//echo $var;
	echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS); //turns script in $var into harmless identities
	//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); // all of the letters have been stripped out

# This INPUT Array specifies validations we want for each field and some options, basically this is a way to filter two data inputs at once using an array, and nesting an array to do multiple things like add a parameter to input validation as done with integer input in this example
	$filters = array(
		"data" => FILTER_VALIDATE_EMAIL, 
		"data2" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 100 
			)
		)

	);
	print_r(filter_input_array(INPUT_POST, $filters));
*/
// GO TO php.net to look at other validation examples!
# This is filter_var Array

	$arr = array(
		"name" => "david smith", // put this lowercase as plan to use ucwords to make words capitalized
		"age" => "21",
		"email" =>  "david@gmail.com"
	);
	//We will take each of filed (name, age, email) and apply filters we want in $filter
	$filters = array(
		"name" => array(
			"file" => FILTER_CALLBACK, // allows us to apply function to this value
			"options" => "ucwords"
		),
		"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 120
			)
		),
		"email" => FILTER_VALIDATE_EMAIL
	);
	print_r(filter_var_array($arr, $filters));

?>
<!-- Filters are used to validate, check data types and sanitize with filters. echo $_SERVER bit basically gives us the current page, using PHP_SELF instead of filters.php as it will keep the same page even if you change filename -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<input type="text" name="data2">
	<button type="submit">Submit</button>
</form>
