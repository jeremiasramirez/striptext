<?php 

function strip_text($text){
	$text = strip_tags($text);
	$text = stripslashes($text);
	$text = strtolower($text);
	$pitch = ["'", "$",
			'#', "%", "*", "^",
			'@', "+", ".", "><", "<>", 
			"<", ">", "?", "/", "!", "--", "=="
			" ", "-", "=", "(", ")", "()", "((", "))",
			":", ";", ",", "^^", "''", "}",
			"{", "{}", "}{", "~", "`", "|", "]", "[",
			"[]", "][", "[[", "]]", "&", "^^", ">>", "<<" 

		];

	for($strip=0; $strip<sizeof($pitch); $strip++){
		$text = str_replace($pitch[$strip], '', $text);
	}
	return $text;
}
