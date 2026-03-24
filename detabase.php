<?php
	
	$host="localhost";
	$user="root";
	$pass="";
	$deta="ajju";
	
	//mysqli_connect($host,$user,$pass,$deta);
	

	if(mysqli_connect($host,$user,$pass,$deta))
		echo "connect";
	else
		echo "not connect";
?>