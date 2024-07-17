<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan dan membersihkan data input
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Menyimpan data dalam variabel sesi
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Menentukan path file
    $file = 'subscribers.txt';

    // Memformat data yang akan disimpan
    $data = "Nama: $nama, Email: $email, Password: $password" . PHP_EOL;

    // Menyimpan data ke dalam file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Mengarahkan ke halaman home_tutorial.html setelah pengiriman berhasil
    header("Location: home_tutorial.html");
    exit();
}
?>
