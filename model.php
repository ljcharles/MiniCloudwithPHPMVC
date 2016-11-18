<?php 
function connexion($login, $passe){
   global $LOGIN,$PASSE;
	
   if($LOGIN == $login && $PASSE == $passe) return 1;
   else return 0;
}

?>