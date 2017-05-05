<?php
	/*
	$pronoms_personnels = ['Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils'];
	$coder = ['code','codes','code','codons', 'codez','codent'];
	foreach ($pronoms_personnels as $elem) {
		echo "<br/>".$elem;
		
	}
	for ($i=0; $i < 6 ; $i++) { 
			echo "<br/>".$pronoms_personnels[$i]."&nbsp;".$coder[$i];
		}
	*/
	$u = 0;
	/*while ($u <= 120) {
		$u++;
		echo "<br/>".$u;	
	}
	for ($i=0; $i < 121; $i++) { 
		echo "<br/>".$i;
	}*/
	$prenoms = ['John','Estelle','David','Dan','Thomas','Kreshnik'];
	for ($i=0; $i < 6 ; $i++) { 
		echo "<br/>".$prenoms[$i];
	}
	$pays = ["IT" =>'Italie',"FR" =>'France',"JP" =>'Japon',"RO"=>'Roumanie',"ES" =>'Espagne',"CO" =>'Congo',"AN" =>'Angleterre',"NA" =>'Etats-unis',"BE" =>'Belgique',"RU" =>'Russie'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boucle</title>
</head>
<body>
	<form action="boucles.php">
		<select>
			<?php foreach ($pays as $pays_id => $pays_full) {
		echo "<option value =".$pays_id.">".$pays_full."</option>";
	}
			?>
		</select>
	</form>
	
</body>
</html>