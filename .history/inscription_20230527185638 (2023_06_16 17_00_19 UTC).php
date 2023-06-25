<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises par le formulaire
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $email = $_POST['email'];

    // Effectuer les vérifications nécessaires sur les données (par exemple, vérifier si le nom d'utilisateur est unique)

    // Insérer les données dans la base de données
    $sql = "INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe, email) VALUES ('$nom_utilisateur', '$mot_de_passe', '$email')";
    $conn->query($sql);

    // Rediriger l'utilisateur vers la page de connexion
    header('Location: connexion.html');
    exit();
}
?>
