<?php
	$a = array("user"=>array("name"=>"test","age"=>array("mum"=>40)));
	
	echo json_encode($a,true)."<br>";
	
	echo "<br><br>";
	
	$string = json_encode($a,true);
	$a = json_decode($string,true);
	
	echo "<pre>";
	print_r($a);
?>