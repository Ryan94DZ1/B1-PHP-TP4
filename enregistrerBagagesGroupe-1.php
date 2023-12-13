<?php

define("POIDS_MAX" , 20) 

echo "Saisir le nombre de passagers pour le groupe : " ; 
$nbPassagers = rtrim (fgets (STDIN) ) ;

$poidsTotal = 0 ; 
$numeroPassager = 1 ; 

	for ($numeroPassager = 1 ; $numeroPassager <= $nbPassagers ; $numeroPassager = $numeroPassager +1 ;) {
		
		echo "Saisir le poids (en kg) des bagages du passager " ; 
		echo $numeroPassager, " : " ; 
		$poids = rtrim( fgets (STDIN) ) ; 
		
		$poidsTotal = $poidsTotal + $poids ; 
		
		$numeroPassager = $numeroPassager +1 ; 
		
	}

echo "Le poids total des bagages pour ce groupe est de " ; 
echo $poidsTotal , "kg. \n" ;
		
		
		
?>
