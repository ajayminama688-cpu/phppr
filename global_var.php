<?php
	$a = "hello fy BCA";
	$b = 500;
	
	function abc()
	{
		global $a;
		echo "$a <br>";
		global $b;
		echo "$b <br>";
		
		
	}
	abc();
?>