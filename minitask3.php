<?php
	$names = explode("\n", file_get_contents('people.txt'));
	sort($names);
	foreach ($names as $value) {
		print($value . "<BR>");
	}
	
	
	
?>