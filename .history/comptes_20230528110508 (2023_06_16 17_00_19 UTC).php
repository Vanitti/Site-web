<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&F hroses</title>
    <link rel="icon"    href="images/couleur-t.png"/>
    <link rel="stylesheet" href="css.css">
    <script src="app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>

<video id="background-video" autoplay loop muted>
  <source src="images/video/F&F horses.mp4" type="video/mp4">
</video>

<!-- Bouton de retour -->
<div class="arr">
<a class="texts" src="images/return.svg" href="accueil.html">Retourner en arriere</a>
</div>


<!-- Contenu -->
<form method="post">
    <h1>Se connecter</h1>
    <div class="separation"></div>
    <div class="corps-formulaire">
      <div class="gauche">
        <div class="groupe">
          <label htmlFor="subject">Votre Prénom</label>
          <input type="text" name="subject" id="subject"/>

          <label htmlFor="email">Votre Email</label>
          <input type="email" name="email" id="email"/>

          <label htmlFor="phone">Votre Telephone</label>
          <input type="tel" name="phone" id="phone"/>
        </div>
      </div>
    </div>

    <div class="pied-formulaire" align="center">
      <input type="submit" name="formsend" id="formsend">
    </div>
  </form>





<!-- Footer -->
<footer class="v">
  <p class="HG">&copy; 2023 - F&F horses</p>
  <p class="HG">Services</p>
  <p class="HG">Conditions générales de ventes</p>
</footer>

<script src="app.js"></script>
</body>
</html>