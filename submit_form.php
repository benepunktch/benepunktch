<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $product = htmlspecialchars($_POST["product"]); // Produktname aus dem versteckten Feld
    $size = htmlspecialchars($_POST["size"]); // Größe des Produkts hinzufügen

    // E-Mail an dich senden
    $to = "benepunktch@gmail.com";
    $subject = "Neue Twint-Anfrage";
    $message = "Name: $name\n";
    $message .= "Telefonnummer: $phone\n";
    $message .= "Adresse: $address\n";
    $message .= "Produkt: $product\n";
    $message .= "Größe: $size\n"; // Größe in der E-Mail-Anfrage anzeigen

    $headers = "From: shop@bené.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Vielen Dank! Deine Anfrage wurde erfolgreich gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden deiner Anfrage. Bitte versuche es erneut.";
    }
}
?>
