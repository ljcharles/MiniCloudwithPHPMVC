<?php 

include ("config.php");

function connexion($login, $passe){
   global $LOGIN,$PASSE;
	
   if(($login == $LOGIN) && ($passe == $PASSE)) return 1;
   else return 0;
}

?>