<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $onderwerp = $_POST["onderwerp"];
    $bericht = $_POST["bericht"];

    // Valideer de ingediende gegevens hier indien nodig

    // Stel de API-url en gegevens in
    $api_url = "https://api/send-email"; // Vervang dit door de echte API-url
    $api_data = array(
        'email' => $email,
        'subject' => $onderwerp,
        'message' => $bericht,
    );

    // Maak een HTTP POST-verzoek naar de e-mail-API
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($api_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $api_response = curl_exec($ch);
    curl_close($ch);

    // Controleer de reactie van de API en toon een bericht aan de gebruiker
    if ($api_response === false) {
        echo "Er is een fout opgetreden bij het verzenden van de e-mail.";
    } else {
        echo "E-mail succesvol verzonden!";
    }
} else {
    echo "Dit script kan alleen worden aangeroepen via een POST-verzoek.";
}
?>
