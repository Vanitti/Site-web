<!-- Fichier envoyer.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  
  $to = "vanotti.baptiste@gmail.com";
  $subject = "Nouveau message de contact";
  $message = "Nom: $nom\n\nEmail: $email\n\nTéléphone: $tel";
  $headers = "From: $email";
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Message envoyé avec succès !";
  } else {
    echo "Erreur lors de l'envoi du message.";
  }
}
?>
