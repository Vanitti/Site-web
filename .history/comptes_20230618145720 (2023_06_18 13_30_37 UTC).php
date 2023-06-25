<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Récupérer les informations de l'utilisateur depuis la base de données ou autre source de données
    $username = $_GET['username'];
    $chevauxAchetes = array("Cheval 1", "Cheval 2", "Cheval 3"); // Exemple de liste de chevaux achetés

    // Afficher les informations de l'utilisateur et les chevaux achetés
    echo "<h1>Bienvenue, " . htmlentities($username) . "!</h1>";
    echo "<h2>Voici les chevaux que vous avez achetés :</h2>";
    echo "<ul>";
    foreach ($chevauxAchetes as $cheval) {
        echo "<li>" . htmlentities($cheval) . "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
