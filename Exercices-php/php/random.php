<?php

	function randWord ($len = 10) {
		$word = array_merge(range('a', 'z'),range('A', 'Z'));
		shuffle($word);
		echo "<br/>".substr(implode($word), 0,$len);
	}
	randWord(rand(1,5));
	randWord(rand(7,15));

?>