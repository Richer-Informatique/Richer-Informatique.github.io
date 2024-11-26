<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs envoyées par le formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Vérification simple des données
    if (empty($name) || empty($email) || empty($message)) {
        echo "Tous les champs doivent être remplis.";
    } else {
        // Envoi de l'email
        $to = "richer-anctil@hotmail.ca"; // Remplace par ton adresse email
        $subject = "Nouveau message depuis le formulaire de contact";
        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message envoyé avec succès !";
        } else {
            echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
        }
    }
}
?>
