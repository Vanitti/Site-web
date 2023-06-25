?>
<!DOCTYPE html>
<html>
<head>
  <title>Se connecter</title>
</head>
<body>
  
  <?php include 'accueil.php'; ?>

  <form method="post">
    <input type="text" name="identifiant" id="identifiant" placeholder="Votre identifiant" required><br/>
    <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe" required><br/>
    <input type="submit" name="formsend" id="formsend"><br/>
  </form>

  <?php
    if(isset($_POST['formsend'])){

      $identifiant = $_POST['indentifiant'];
      $mdp = $_POST['mdp'];

      if(!empty($identifiant) && !empty($mdp)){

        echo "Votre identifiant : ".$identifiant['identifiant'];        
      }


    }
  ?>

</body>
</html>