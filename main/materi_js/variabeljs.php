<?php
session_start();

// Memeriksa apakah pengguna sudah login dengan benar
if(!isset($_SESSION['status'])){
	header("location:../../subscribe.php?pesan=belumlogin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />            
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JS Variabel</title>
    <link rel="stylesheet" href="../../assets/css/desain.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="../../assets/js/main.js" defer></script>
</head>
<body>
<?php
include('../sidebar.php');
?>
    <div id="main-content" class="conten">
       <div class="corse1">

            <h1>Variabel JavaScript</h1>
            <br>
            <h2>Variabel JavaScript dapat dideklarasikan dengan 4 cara:</h2>
            <ul class="list">
                <li>Secara otomatis</li>
                <li>Menggunakan var</li>
                <li>Menggunakan let</li>
                <li>Menggunakan const</li>
            </ul>
            <br>
            <hr>
            <br>
            <h1>Kapan Harus Menggunakan Var,let,dan const?</h1>
            <ul class="list">
                <li>Selalu mendeklarasikan variabel</li>
                <li>Selalu gunakan const jika nilainya tidak boleh diubah</li>
                <li>Selalu gunakan const jika tipenya tidak boleh diubah (Array dan Objek)</li>
                <li>Gunakan hanya let jika Anda tidak dapat menggunakannyaconst</li>
                <li>Hanya gunakan var jika Anda HARUS mendukung browser lama</li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="contoh">
            <h2>Contoh secara otomatis</h2>
            <br>
            <pre class="contoh2"><code>
                x =  <span class="merah">5</span>;
                y =  <span class="merah">6</span>;
                z = x + y;
            </code></pre>
            </div>
            <p>Dalam contoh pertama ini, x, y, dan z merupakan variabel yang tidak dideklarasikan.<br>
               Mereka dideklarasikan secara otomatis saat pertama kali digunakan.
            </p>
            <br>
            <p>Dari contohnya Anda bisa menebak:</p>
            <ul class="list">
                <li>x menyimpan niali 5</li>
                <li>y menyimpan nilai 6</li>
                <li>z menyimpan nilai 11</li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Contoh menggunakan Var</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="biru">var </span> x =  <span class="merah">5</span>;
                    <span class="biru">var </span> x =  <span class="merah">6</span>;
                    <span class="biru">var </span> z = x + y;
                </code></pre>
            </div>
            <p>Kata kunci tersebut vardi gunakan di semua kode JavaScript dari tahun 1995 hingga 2015, Kata varkunci hanya boleh digunakan dalam kode yang ditulis untuk browser lama.</p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Contoh menggunakan Let</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="biru">let </span> x =  <span class="merah">5</span>;
                    <span class="biru">let </span> x =  <span class="merah">6</span>;
                    <span class="biru">let </span> z = x + y;
                </code></pre>
            </div>
            <p>Kata kunci let dan const ditambahkan ke JavaScript pada tahun 2015</p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Contoh menggunakan Const</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="biru">const </span> x =  <span class="merah">5</span>;
                    <span class="biru">const </span> x =  <span class="merah">6</span>;
                    <span class="biru">const </span> z = x + y;
                </code></pre>
            </div>
            <p>Kata kunci let dan const ditambahkan ke JavaScript pada tahun 2015</p>
            <br>
        </div>  
     </div>

</body>
</html>