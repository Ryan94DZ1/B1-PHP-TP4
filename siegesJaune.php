<?php

define( "NB_SIEGES", 40 ) ;

for( $numSiege = 2 ; $numSiege <= NB_SIEGES ; $numSiege = $numSiege +1 ) {
		if( $numSiege + 3 ){
				
				echo "Siège numéro " , $numSiege , "\n" ;
		}
	}
