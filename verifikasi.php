<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['inputemail'];
    $password = $_POST['password'];
    $rememberme = $_POST['rememberme'];

    // Buka file login.txt
    $file = fopen("login.txt", "r");
    $found = false;
    while ($line = fgets($file)) {
        // Memisahkan data email dan password
        list($file_email, $file_password) = explode("|", $line);
        $file_email = trim($file_email);
        $file_password = trim($file_password);
        // Jika email dan password cocok dengan yang dimasukkan user
        if ($file_email == $email && $file_password == $password) {
            // Inisialisasi sesi dengan email user
            session_start();
            $_SESSION['email'] = $email;
            // Kirimkan 'success' jika login berhasil
            if (isset($rememberme)) {
                setcookie('email', $email, time() + 86400);
            }
            echo 'success';
            exit;
        }
    }

    // Tutup file
    fclose($file);
    // Kirimkan 'error' jika login gagal
    echo 'error';
}
