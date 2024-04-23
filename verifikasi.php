<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $email = $_POST['inputemail'];
    $password = $_POST['password'];

    // Buka file login.txt
    $file = fopen("login.txt", "r");
    // Loop melalui setiap baris file
    $found = false; // Tandai apakah ditemukan kesesuaian
    while ($line = fgets($file)) {
        // Pisahkan data email dan password
        list($file_email, $file_password) = explode("|", $line);
        // Hapus karakter newline
        $file_email = trim($file_email);
        $file_password = trim($file_password);
        // Jika email dan password cocok dengan yang dimasukkan pengguna
        if ($file_email == $email && $file_password == $password) {
            // Inisialisasi sesi dengan email pengguna
            $_SESSION['email'] = $email;
            // Kirimkan 'success' jika login berhasil
            echo 'success';
            exit;
        }
    }
    // Tutup file
    fclose($file);
    // Kirimkan 'error' jika login gagal
    echo 'error';
}
