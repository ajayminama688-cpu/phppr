<?php
	
$a = imagecreate(200,50);

$bg_color = imagecolorallocate($a,255,9,9);
$text_color = imagecolorallocate($a,24,0,255);

imagestring($a,5,20,15,"Mr Ajju",$text_color);

header("Content-Type: image/png");

imagepng($a);

imagedestroy($a);
?>