<?php
	/*
	somme(24,398);
	$name = 'emilie';
	$cap = ucfirst($name);
	echo $cap;
	echo "<br/>".date("D d F Y ga:i:s");

	function somme ($a,$b) {
		if (is_int($a) && is_int($b)) {
			echo ($a + $b)."<br/>";
		} else {
			echo 'Erreur, argument non numérique'."<br/>";
		}

	} 
	function initiales($string)
{
    $words = explode(" ", $string);
    $initiale = '';
 
	foreach($words as $init){
		$initiale .= $init{0};
    }
    echo "<br/>".strtoupper($initiale);

}
	initiales('test de fonction');


	function ae ($string) {
		echo "<br/>".str_replace('ae','æ',$string);
	}
	ae('caecotrophie');
	ae('chaenichthys');
	ae('microsphaera');
	ae('sphaerotheca');

	function ae_inv ($string) {
		echo "<br/>".str_replace('æ','ae',$string);
	}
	ae_inv('cæcotrophie');
	ae_inv('chænichthys');
	ae_inv('microsphæra');
	ae_inv('sphærotheca');

	function feedback ($message,$class = 'info') {
		$mess = ucfirst($message);
		echo "<div class=".$class.">".$mess."</div>";
	}
	*/
	function randWord ($len = 10) {
		$word = array_merge(range('a', 'z'),range('A', 'Z'));
		shuffle($word);
		return "<br/>".substr(implode($word), 0,$len);
	}
	echo randWord(5);	

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php //feedback("adresse email incorrecte"); ?>
	<form method="get" action="fonctions.php">
		<input type="submit" value="New words"> 
		<?php //echo randWord(rand(1,5)); echo randWord(rand(7,15))."<br/>"; ?>
		<input type="submit" value="Refresh page"> 	
	</form>
<?php
	/*
	$cri = 'ARRÊTE DE CRIER JE N\'ENTENDS PLUS RIEN!!!';
	echo "<br/>".strtolower($cri);

	function volume_dun_cone ($rayon,$hauteur) {
		$volume = $rayon * $rayon * round(pi(),2) * $hauteur * (1/3);
		echo "<br/>".$volume;
	}
	volume_dun_cone(9,2);
	*/

?>

<?php 
/*GODMODE
	function reverse_string ($stringToReverse) {
		$letter = str_split($stringToReverse);
		$lastFirst = '';
		$len = count($letter); 
		for($i = ($len-1); $i >= 0 ; $i--) {
			$lastFirst .= $letter{$i};
		}
		echo $lastFirst;
		
		
	}
	reverse_string('testestest');

	function replace_serpette($chanson) {
		$substitutions = array( 'ON', 'UE', 'EST', 'TE', 'OUP', 'E', 'É', 'È', 'AIS', 'NE', 'ON', 'UN', 'U','AN','A');
		$var_sub = array('a','e','i','o','u','ou','é','è','oi','ui','oui','an','in','on','un','oin');
		$substitutions_string = implode($substitutions,'F' );
		$substitutions_string_lower = mb_strtolower($substitutions_string);
		$substitutions_array = explode('f', $substitutions_string_lower);
		for ($i=0; $i < 18 ; $i++) {	
		$chanson_replace =str_replace($substitutions_array,$var_sub[$i],$chanson); 
			echo "<p>".$chanson_replace."</p>";
	
		}
		
	}
	replace_serpette('Buvons un coup ma serpette est perdue,
Mais le manche, mais le manche,
Buvons un coup ma serpette est perdue
Mais le manche est revenu.');
*/
/*
	function buvons($guindaille, $lettre){
		$voyelle = array( "oup", "ais", "un", "ue", "u", "on", "a", "est","an","et", "e");
		$guindaille = str_replace($voyelle, $lettre, $guindaille);
		echo $guindaille;
	}
$lettre = array('E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
$guindaille = "Buvons un  ma serpette est perdue,<br />Mais le manche, mais le manche,<br />Buvons un coup ma serpette est perdue<br />Mais le manche est revenu.<br />";
	foreach ($lettre as $key) {
		echo buvons($guindaille,$key);
		echo '<br />';
	}*/
?>

</body>
</html>