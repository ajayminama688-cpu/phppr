<?php
	session_start();
	$_SESSION['name']='hello php session';
	echo $_SESSION['name'];
?>