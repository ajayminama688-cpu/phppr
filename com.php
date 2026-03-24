<?php
	$a=$_GET['num'];
	$b=$_GET['numb'];
	
	//echo "$a $b"
	
	if($a > $b){
		echo "$a is gretar than $b";
	}
	else if($b > $a){
		echo "$b is gretar than $a";
	}
	else{
		echo "$a and $b are equal";
	}
?>