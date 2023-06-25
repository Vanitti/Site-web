?>
<!DOCTYPE html>
<html>
<head>
  <title>Se connecter</title>
</head>
<body>
  
  <?php include 'accueil.php'; ?>

  <form method="post">
    <input type="text" name="identifiant" id="identifiant" placeholder="Votre identifiant">
    <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe">
    <input type="submit" name="formsend" id="formsend">
  </form>

  <?php
    if(isset($_POST['formsend'])){
      echo "formulaire send !";
    }
  ?>

</body>
</html>