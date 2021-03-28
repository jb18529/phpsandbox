<?php

	# Loops - Execute code set number of times

	/*
		
		For
		While
		Do..While
		Foreach

	

		#For Loop
		# @params - init, condition, inc

		for($i = 5;$i < 11;$i++){
			echo 'Number ' .$i;
			echo '<br>';
		}

		#While loop
		# @params - condition
	*/

	/*
		$i = 0;

		while($i < 10){
			echo $i;
			echo '<br>';
			$i++;
		}

		# Do...While
		# @params - condition
	*/

	/*
		$i = 0;
	
		do{
			echo $i;
			echo '<br>';
			$i++;

		}

		while($i < 10);
	*/

	#Foreach loop is different in that it uses arrays
	/*
		$people = array('Brad', 'Jose', 'William');

		foreach($people as $person){
			echo $person;
			echo '<br>';

		}
	*/

	#This is basically the format for a foreach loop with associative index
		$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

		foreach($people as $person => $email){
			echo $person. ': '.$email;
			echo '<br>';

		}
?>