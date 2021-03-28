<!-- When you want to submit a form to a server, to a php page you can send data using get method or post method, with get method you are sending data through url, using query strings but it is insecure, post requuest is safer as it is sent using HTTPS header (used in financial transcations)
-->
<?php

	if(isset($_GET['name'])){
		//Cross site scripting attacks or xss attacks, client will insert crazy script to mess things up. can use htmlentities (create a variable for this) to take power out of tags in scripts (<> and </>)
		//print_r($_GET);
		$name = htmlentities($_GET['name']); 
		//echo $name;
	}
/*
	}
	if(isset($_POST['name'])){ // with this method, POST, it was sent through the headers, you can take it up a notch to and use https headers
		
		$name = htmlentities($_POST['name']);
		echo $name;
		print_r($_POST);
	}

	
	if(isset($_REQUEST['name'])){  //REQUEST will wokr whether method in the form below is equal to POST or GET, this isn't used very much, should stick with get/post
		
		//print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		echo $name;

	}	

	echo $_SERVER['QUERY_STRING']; // output string puts both name and email
*/
	


?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Website</title>

	</head>

	<body>
		<form method="GET" action="get_post.php">
			<div>
				<label>Name</label><br>
				<input type="text" name="name"> <!-- Name attribute is important as that is the attribute we can hook onto from the server to get whatever data is submitted -->
			</div>

			<div>
				<label>Email</label><br>
				<input type="text" name="email">
			</div>
			<input type="submit" value="Submit">

		</form>
		<!--Below shows how to send query strings through the URL without using a form, then go to first if statement line 5-9 and uncomment it. So when you click on url you can get brad and steve profile based on url -->
		<ul>
			<li>
				<a href = "get_post.php?name=Brad">Brad</a>
			</li>
			<li>
				<a href = "get_post.php?name=Steve">Steve</a>
			</li>
		</ul>
		<h1><?php echo "{$name}'s' Profile"; ?></h1>
	</body>
</html>