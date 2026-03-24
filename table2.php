<?php
	$a = $_POST['viv'];
	
	
	for($r=1;$r<=10;$r++){
		$vi= $r * $a;
	 echo $a .'X'. $r. '='. $vi;
	 echo "<br>";
	}
?>