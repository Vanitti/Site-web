<!-- Fichier envoyer.php -->
<?php
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];

  $mail = new PHPMailer(true);

  try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vanotti.baptiste@gmail.com'; // Mettez votre adresse e-mail ici
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinataire et expéditeur
    $mail->setFrom($email, $nom);
    $mail->addAddress('vanotti.baptiste@gmail.com'); // Adresse e-mail de destination

    // Contenu du message
    $mail->Subject = 'Nouveau message de contact';
    $mail->Body    = "Nom: $nom\n\nEmail: $email\n\nTéléphone: $tel";

    $mail->send();
    echo 'Message envoyé avec succès !';
  } catch (Exception $e) {
    echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
  }
}
?>
