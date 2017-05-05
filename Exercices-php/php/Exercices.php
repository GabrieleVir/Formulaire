<?php
  function factorial($number) {          
        if ($number < 2) { 
            return 1; 
        } else { 
            return ($number * factorial($number-1)); 
        } 
    }
    echo factorial(10)."<br/>";	
    function prime_number ($prime) {
    	for ($x=2;$x<$prime;$x++) {
    		if($prime % $x == 0) {
    			return 0;
    		} 
    		
    	}return 1;
    }

	echo prime_number(12);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercices</title>
</head>
<body>
	
</body>
</html>