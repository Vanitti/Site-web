<!-- Fichier envoyer.php -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];

  $url = 'https://api.sendgrid.com/v3/mail/send';

  $data = array(
    'personalizations' => array(
      array(
        'to' => array(
          array(
            'email' => 'vanotti.baptiste@gmail.com' // Adresse e-mail de destination
          )
        )
      )
    ),
    'from' => array(
      'email' => $email, // Adresse e-mail de l'expéditeur
      'name' => $nom
    ),
    'subject' => 'Nouveau message de contact',
    'content' => array(
      array(
        'type' => 'text/plain',
        'value' => "Nom: $nom\n\nEmail: $email\n\nTéléphone: $tel"
      )
    )
  );

  $headers = array(
    'Authorization: Bearer YOUR_SENDGRID_API_KEY', // Remplacez YOUR_SENDGRID_API_KEY par votre clé API SendGrid
    'Content-Type: application/json'
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);

  if ($response === false) {
    echo "Erreur lors de l'envoi du message";
  } else {
    echo "Message envoyé avec succès !";
  }
}
?>
