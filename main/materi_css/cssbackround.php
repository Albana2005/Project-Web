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
    <title>CSS Backround</title>
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
            <h1>Pengenalan CSS</h1>
            <br>
            <p>CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mengatur tampilan dan tata letak elemen-elemen di halaman web. Dengan menggunakan CSS, Anda dapat mengontrol berbagai aspek visual dari elemen-elemen HTML, seperti warna, ukuran, tata letak, font, dan lainnya. CSS sangat penting dalam pengembangan web karena memungkinkan pemisahan konten (HTML) dari presentasi (CSS), yang membuat manajemen dan pemeliharaan situs web menjadi lebih mudah.</p>
            <br>
            <hr>
            <br>
            <h1>Apa itu CSS?</h1>
            <ul class="list">
                <li>CSS adalah singkatan dari Cascading Style Sheet</li>
                <li>CSS menjelaskan bagaimana elemen HTML ditampilkan di layar, kertas, atau di media lain</li>
                <li>CSS menghemat banyak pekerjaan. Itu dapat mengontrol tata letak beberapa halaman web sekaligus</li>
                <li>Stylesheet eksternal disimpan dalam file CSS</li>
            </ul>
            <br>
            <hr>
            <br>
            <h1>Sintaks Dasar CSS</h1>
            <br>
            <div class="kode">
                <img class="fotsin" src="../../assets/img/css1.png">
            </div>
            <br>
            <p>CSS menggunakan aturan (rules) yang terdiri dari selector dan deklarasi. Deklarasi ini berada dalam tanda kurung kurawal {}, yang di dalamnya terdapat properti dan nilai.</p>
            <br>
            <hr>
            <br>
            <h1>CSS Backround</h1>
            <br>
            <p>Properti Backround pada CSS digunakan untuk menambahkan efek latar belakang pada elemen, dan terdapat beberapa jeenis property backround</p>
            <br>
            <hr>
            <br>
            <h1>Jenis Jenis property Backround</h1>
            <ul class="list">
                <li>background-color</li>
                <li>background-image</li>
                <li>background-repeat</li>
                <li>background-attachment</li>
                <li>background-position</li>
                <li>background-(properti singkatan)</li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <div class="contoh">
                    <h2>Contoh CSS menggunakan salah satu property yaitu background-color</h2>
                    <br>
                    <div class="kode">
                        <pre><code>
                            <span class="coklat">h1</span> {
                                <span class="merah">background-color</span>:  <span class="biru">green</span>;
                            }
                          
                            <span class="coklat">div</span> {
                                <span class="merah">background-color</span>:  <span class="biru">lightblue</span>;
                            }
                          
                            <span class="coklat">p</span> {
                                <span class="merah">background-color</span>:  <span class="biru">yellow</span>;
                            }
                          
                        </code></pre>
                    </div>
                    <br>
                    <br>
                    <h2>Tampilan program</h2>
                    <br>
                    <div class="image">
                        <img src="../../assets/img/css2.png" alt="tampilan">          
                    </div>
                </div>
            </div>
        </div>
     </div>  

   

</body>
</html>