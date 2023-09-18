<?php

// $recaptchaSecret = '6LfGtzQoAAAAAEMYj3MPgIklqYppqdZPflBm0Upl';
// $recaptchaResponse = $_POST['g-recaptcha-response'];

// // Verifieer de reCAPTCHA-response
// $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
// $responseKeys = json_decode($response, true);

// // Check de reCAPTCHA-validatie
// if (intval($responseKeys["success"]) !== 1) {
//     echo "Gelieve de reCAPTCHA te verifiëren.";
//     exit;
// } else {
//     // De reCAPTCHA is succesvol gevalideerd, je kunt de e-mail nu verwerken en verzenden.
// }


// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // E-mailadres waar je de berichten wilt ontvangen
    $ontvanger = "dejorden@andromedatech.dev";

    // Verzamel formuliervelden
    $naam = $_POST["name"];
    $email = $_POST["email"];
    $bericht = $_POST["message"];

    // Zet de inhoud van de e-mail op
    $onderwerp = "Nieuw bericht van website: $naam";
    $inhoud = "Naam: $naam\n";
    $inhoud .= "E-mail: $email\n\n";
    $inhoud .= "Bericht:\n$bericht\n";

    // Extra headers voor de e-mail
    $headers = "From: $naam <$email>";

    // Stuur de e-mail
    if (mail($ontvanger, $onderwerp, $inhoud, $headers)) {
        echo "Bericht succesvol verzonden!";
    } else {
        echo "Fout bij het verzenden van bericht.";
    }
} else {
    // Stuur gebruikers terug naar de hoofdpagina als het script direct wordt geopend
    header("Location: index.html");
}
