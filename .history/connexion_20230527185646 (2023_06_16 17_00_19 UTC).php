<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises par le formulaire
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier les informations de connexion dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur='$nom_utilisateur' AND mot_de_passe='$mot_de_passe'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Authentification réussie, rediriger l'utilisateur vers une page protégée
        header('Location: page_protégée.html');
        exit();
    } else {
        // Identifiants invalides, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
        header('Location: connexion.html?erreur=1');
        exit();
    }
}
?>
