<?php
echo "Confirmez-vous la modification (oui/non) ? \n" ;
$saisirConfirmation = rtrim( fgets( STDIN ) ) ;
 for ( $saisirConfirmation == "oui" ) {
	echo "Modification en cours...","\n";
for( $saisirConfirmation == "non" ) {
	echo "Modification annulée.", "\n";
	
}

}

?>
