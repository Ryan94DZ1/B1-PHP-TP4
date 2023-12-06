<?php

	echo "Confirmez-vous la modification (oui/non) ? : \n\n" ;
	$rps = rtrim(fgets(STDIN)) ;
		
		if ($rps != "oui" && $rps != "non") {
			
			echo "Réponse incorrecte ! \n\n" ;
			echo "Confirmez-vous la modification (oui/non) ? : \n\n" ;
			$rps = rtrim(fgets(STDIN)) ;
		
		}
		elseif ($rps=="oui"){
			echo " Modification en cours ";
		}
		
		
		elseif ($rps=="non"){
			echo " Modification annulée.";
		}
		
		
?>

