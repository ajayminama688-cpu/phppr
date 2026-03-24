<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
		if($user == 'myname'&& $pass == 'password')
		{
			echo 'login';
		}
		else
		{
			echo 'invalid';
		}
?>