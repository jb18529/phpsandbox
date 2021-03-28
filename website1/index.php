<?php require_once 'inc/header.php'; ?>
	<h1>Home</h1>
<?php require_once 'inc/footer.php'; ?>


<?php
/*
The first line links to header file which is the same across each of the local webpages
The third line links to footer file which is the same across each of local webpages

The difference between include and require is that with require the script does not continue so if header or footer file does not load the webpage does not load anything
You can use require_once which is identical to require except php will check file to see if it has already been included, and if it has, it wont include or require it again.

Can also use different format:
<?php include ('inc/header.php'); ?>

*/
?>