<?php
     //include("config.php");
     //include("model.php");
  
     if(isset($_POST["etat-f"])){
        switch($_POST["etat-f"]){
          case "demande connexion":
               $_SESSION["page"] = "formulaire connexion";
               include("index.php");
               break;
          case "verif connexion":
		$_SESSION["etat-f"] = connexion($_POST["identifiant"],$_POST["password"]);
                if($_SESSION["etat-f"] == 1) $_SESSION["page"] = "page personnelle";
                else $_SESSION["page"] = "formulaire connexion";
                include ("index.php");
                break;
          case "demande inscription":
                $_SESSION["page"] = "formulaire inscription";
                include ("index.php");
                break;
	  case "verif inscription":
                $_SESSION["page"] = "formulaire inscription";
                include ("index.php");
                break;
          case "formulaire connexion":
                $_SESSION["page"] = "formulaire connexion";
                include ("index.php");
                break;
          case "formulaire inscription":
                $_SESSION["page"] = "formulaire inscription";
                include ("index.php");
                break;
        }
      }
      else include("index.php");
?>
