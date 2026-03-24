<?php
	$a ="invoice 123 paid on 2026-03-07";
	preg_match_all("/\d+/",$a,$matches);
	echo '<pre>';
	print_r($matches[0]);
?>