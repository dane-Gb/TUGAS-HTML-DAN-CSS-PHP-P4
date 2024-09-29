<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "Terima kasih, $name! Kami akan menghubungi Anda di $email.";
}
?>
