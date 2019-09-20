<?php 

function strip_text($text){
	$text = strip_tags($text);
	$text = stripslashes($text);
	$text = strtolower($text);
	$pitch = ["'", "$",
			'#', "%", "*", "^",
			'@', "+", ".", "><", "<>", 
			"<", ">", "?", "/", "!",
			" "];

	for($i=0; $i<sizeof($pitch); $i++){
		$text = str_replace($pitch[$i], '', $text);
	}
	return $text;
}
