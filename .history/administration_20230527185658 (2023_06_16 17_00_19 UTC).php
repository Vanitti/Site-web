<?php
// Inclure le fichier de configuration pour établir la connexion à la base de données
include 'config.php';

// Vérifier si l'utilisateur est authentifié, sinon rediriger vers la page de connexion
// Ajoutez ce code au début de chaque page d'administration
// Exemple : si (!isset($_SESSION['utilisateur'])) { header('Location: connexion.html'); exit(); }

// Récupérer les utilisateurs depuis la base de données
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

// Afficher les utilisateurs
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'Nom d\'utilisateur : ' . $row['nom_utilisateur'] . '<br>';
        echo 'Email : ' . $row['email'] . '<br><br>';
    }
} else {
    echo 'Aucun utilisateur trouvé.';
}

// Ajoutez ici les autres fonctionnalités d'administration (modification, suppression, etc.)
?>
