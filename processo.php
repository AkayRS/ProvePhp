<?php
    // Verifica se i dati del modulo sono stati inviati
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal modulo
        $name = $_POST["name"];
        $email = $_POST["email"];

        // Puoi ora utilizzare $name e $email come preferisci
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
?>
