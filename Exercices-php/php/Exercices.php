<?php
/*
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
    */
    /*Somme récursif
    function sum($sum) 
    {
        if ($sum < 2) 
        {
            return 1;
        } else 
        {
            return ($sum + sum($sum-1));
        }
    }
    echo sum(256)."<br/>";
    */
    /*
     function sort_array($string) 
     {
        $a = 0;
        for ($a=0; $a < count($string)-1 ; $a++) 
        { 
            for ($i=$a+1; $i < count($string); $i++) 
            { 
                if ($string[$a] > $string[$i]) //Vérifie une valeur avec la suivante et switch les deux de place 
                {
                $temp = $string[$a];
                $string[$a] = $string[$i];
                $string[$i] = $temp;
                
           
            
                }        

            }
        }
        
        
        print_r($string);
    }  
    */

    function sort_array($string,$inizio)
    {
        $a = $inizio;
        print_r($a);
        for ($i=$a+1; $i < count($string) ; $i++) 
        { 
            if ($string[$a] > $string[$i]) 
            {
                $temp = $string[$a];
                $string[$a] = $string[$i];
                $string[$i] = $temp;
                
                
               
            }   
        } 
        print_r("<pre>");
        print_r($string);
        print_r($a);
        print_r(count($string));
        print_r("</pre>");
        if ($a >= count($string)) 
            {
            return $string;
            print_r(sdfgf);
            }
        else
            { 
            $a++;
            sort_array($string,$a);
            
            }
        
    }

    $inizio = 0;
    $test = array(12,9,5,3,4,23,123,79);
   
    print_r(sort_array($test,$inizio));

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