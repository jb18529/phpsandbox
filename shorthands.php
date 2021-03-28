<?php
	// Looking at Ternary operator as well as shorthan if statements and shorthand loops
	$loggedIn = false;
	$arr = [1, 2, 3, 4, 5];
	/*
	if($loggedIn){
		echo 'You are logged in';
	} else {
		echo 'You are NOT logged in';
	}
	*/
	//echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in'; // Short form of lines 5-9 using ternary operator: a condition followed by a question mark ( ? ), then an expression to execute if the condition is truth followed by a colon ( : ), and finally the expression to execute if the condition is false

	//$isRegistered = ($loggedIn == true) ? true : false;
	//echo $isRegistered; // should get 1 if true, nothing if false
	/*
	$age = 7;
	$score = 12;

	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'):($age > 10 ? 'Horrible':'Average'));
	*/

?>
<!-- Alternative syntax for conditionals, loops etc -->
<div>
<?php if($loggedIn) { ?>
	<h1>Welcome User</h1>

<?php } else { ?>
	<h1>Welcome Guest</h1>
<?php } ?>
</div>
<!-- A better way of doing the above by using ; and endif; -->
<div>
<?php if($loggedIn): ?>
	<h1>Welcome User</h1>
<?php else: ?>
	<h1>Welcome Guest</h1>
<?php endif; ?>

</div>
<!-- Doing a foreach loop through array -->
<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>
<!-- Doing a for loop alternatively -->
<div>
<?php for($i = 0;$i < 10;$i++): ?>
	<li><?php echo $i; ?></li>
<?php endfor; ?>
</div>




