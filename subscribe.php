<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Subscribe</title>
</head>
<body>
<?php


// Memeriksa apakah pengguna sudah login dengan benar
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "belumlogin") {
        echo"<script>
       alert('silahkan login terlebih dahulu!!');
       </script>
        ";
    }
    else if ($_GET['pesan'] == "logout") {
        echo"<script>
       alert('Berhasil logout!!');
       </script>
        ";
    }
}
?>
    <form action="submit.php" method="post">
        <div class="pendaftar">
            <h2 align="center">Pendaftaran</h2>
            <div class="name">
                <label for="nama">Username:</label>
                <input type="text" id="nama" name="nama" required>      
            </div>
            <br>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
