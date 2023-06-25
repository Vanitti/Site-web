<?php
// Vérifier les informations de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Effectuer la validation des informations de connexion
// (vérification dans une base de données ou autre)

// Si les informations de connexion sont valides
if ($username === "utilisateur" && $password === "motdepasse") {
    // Rediriger vers la page "Mon compte" avec les informations de l'utilisateur
    header("Location: compte.php?username=" . urlencode($username));
    exit();
} else {
    // Rediriger vers la page de connexion avec un message d'erreur
    header("Location: login.html?error=1");
    exit();
}
?>
