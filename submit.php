<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan dan membersihkan data input
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Validasi email dan password
    $valid_email = "asep@gmail.com";
    $valid_password = "1234";

    if ($email === $valid_email && $password === $valid_password) {
        // Menyimpan data dalam variabel sesi
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = "login";

        // Menentukan path file
        $file = 'subscribers.txt';

        // Memformat data yang akan disimpan
        $data = "Nama: $nama, Email: $email, Password: $password" . PHP_EOL;

        // Menyimpan data ke dalam file
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        // Mengarahkan ke halaman home_tutorial.php setelah pengiriman berhasil
        header("Location: main/home_tutorial.php");
        exit();
    } else {
        // Jika login gagal, arahkan kembali ke form login dengan pesan error
        header("Location: subscribe.php?error=1");
        exit();
    }
}
?>
