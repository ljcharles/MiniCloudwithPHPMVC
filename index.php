<?php
     if(!isset($_SESSION)){
        session_start();
        $_SESSION["page"]="accueil";
 	$_SESSION["Erreur"]="";
     }

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?= $_SESSION["page"];?></title>
</head>
<body>
<?php
      switch($_SESSION["page"]){
	 case "accueil":
?>
  <h1>Accueil</h1>
  <form method="POST" action="controleur.php">
    <input type="hidden" name="etat-f" value="demande connexion"/>
    <input type="submit" value="connexion"/> 
  </form>

  <form method="POST" action="controleur.php">
   <input type="hidden" name="etat-f" value="demande inscription"/>
   <input type="submit" value="inscription"/>
  </form>
<?php 
        break;
        case "formulaire connexion":
?>
 <h1>Connection</h1>
 <form method="POST" action="controleur.php">
    <input type="hidden" name="etat-f" value="verif connexion"/>
    login: <input type="text" name="identifiant" value="identifiant"/><br>
    mot de passe: <input type="password" name="password" value=""/><br>
    <input type="submit" value="connexion"/> 
  </form>
<?php 
        break;
        case "formulaire inscription":
?>
 <h1>Inscription</h1>
 <form method="POST" action="controleur.php">
    <input type="hidden" name="etat-f" value="verif inscription"/>
    login: <input type="text" name="identifiant" value="identifiant"/><br>
    email: <input type="email" name="email" value="identifiant@gmail.com"/><br>
    mot de passe: <input type="password" name="password" value=""/><br>
    Confirmation du mot de passe: <input type="password" name="password2" value=""/><br>
    <input type="submit" value="inscription"/><br> 
  </form>
<?php break;}?>
</body>
</html>
    
