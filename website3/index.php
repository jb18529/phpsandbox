<?php
// CONTACT FORM
	// Message Vars
	$msg = '';
	$msgClass = ''; // The reason we do class is with bootstrap and most front end frameworks you can have alerts and set class to different colors and statuses, want errors to be red and successes to be green

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		//echo 'Submitted';
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($name) && !empty($email) && !empty($message)){
			// Passed
			//echo 'PASSED';
			// CHeck Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email'; // If we enter some stuff and it fails its gone so we will use value attribute to prevent this
				$msgClass = 'alert-danger';
			} else {
				// Passed
				echo 'PASSED';
				// Recipient Email where you want data sent to
				$toEmail = 'joelrebac2@gmail.com';
				// Subject
				$subject = 'Contact Request From'.$name;
				// Body of email
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Name</h4><p>'.$email.'</p>
					<h4>Name</h4><p>'.$message.'</p>
				';

				// Email Headers, \r\n is carriage return and new line typically windows systems, \n for UNIX systems and .= means append so adds it to the end
				$headers = "MIME-Version: 1.0" ."\r\n"; // Helps recognize email data 
				$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers.= "From: " .$name. "<".$email.">". "\r\n";
				if(mail($toEmail, $subject, $body, $headers)){
					//Email sent, does not work on local host but should work on domain hosted website
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';

				} else {
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';

				}

			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>	
	</nav>
	<div class="container">
			<!-- In Bootstrap you have to do alert then alert-danger in div class -->
		  <?php if($msg != ''): ?>
		 	<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		  <?php endif; ?> 
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>