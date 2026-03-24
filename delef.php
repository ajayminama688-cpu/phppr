<?php
	$id = $_GET['id'];
	$a = mysqli_connect("localhost","root","","table");
	$sql="delete form deta whare id=".$id;
	
	$data =mysqli_query($a,$sql);
	
	echo 'delete';
?>
