<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&F Horses - Mon compte</title>
    <link rel="icon" href="images/couleur-t.png">
    <link rel="stylesheet" href="comptes.css">
</head>
<body>
    <header class="header">
        <!-- Header code here -->
    </header>

    <section id="mon-compte">
        <h1>Mon compte</h1>
        <?php
        // Vérifier si l'utilisateur est connecté
        session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // Connexion à la base de données MySQL
            $servername = "localhost";
            $username = "votre_nom_utilisateur";
            $password = "votre_mot_de_passe";
            $dbname = "nom_de_votre_base_de_donnees";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("Échec de la connexion à la base de données : " . $conn->connect_error);
            }

            // Récupération de l'ID de l'utilisateur connecté
            $user_id = $_SESSION['user_id'];

            // Requête pour récupérer les chevaux achetés par l'utilisateur
            $sql = "SELECT * FROM chevaux WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            // Vérification s'il y a des résultats
            if ($result->num_rows > 0) {
                // Affichage des chevaux achetés
                while($row = $result->fetch_assoc()) {
                    echo '<div class="cheval">';
                    echo '<img src="' . $row['image'] . '" alt="' . $row['nom'] . '">';
                    echo '<h2>' . $row['nom'] . '</h2>';
                    echo '<p>Prix : ' . $row['prix'] . '</p>';
                    // ... Autres informations sur le cheval ...
                    echo '</div>';
                }
            } else {
                echo "<p>Aucun cheval acheté.</p>";
            }

            $conn->close();
        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header("Location: login.php");
            exit();
        }
        ?>
    </section>

    <footer>
        <!-- Footer code here -->
    </footer>
</body>
</html>
