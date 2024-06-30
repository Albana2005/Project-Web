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
    <title>JS Sintaks</title>
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

            <h1>Pengenalan JavaScript</h1>
            <br>
            <p>JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web lebih interaktif. Ini berjalan di dalam browser web dan memungkinkan pengembang untuk menambahkan fitur seperti animasi, pemutaran video, galeri foto, dan pembaruan konten tanpa perlu memuat ulang halaman. JavaScript bekerja bersama HTML dan CSS untuk memberikan pengalaman web yang dinamis dan responsif.
            </p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Sintaks JavaScript</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="hijau">// Cara membuat Variabel : </span>
                    <span class="biru">var</span>  x;
                    <span class="biru">let</span>  y;
                
                    <span class="hijau">// Cara menggunakan Variabel :</span>
                    x = <span class="merah"> 5</span>;
                    y = <span class="merah"> 6</span>;
                    <span class=biru>let</span>  z  =  x  +  y;
                </code></pre> 
            </div>
            <p>Sintaks JavaScript adalah seperangkat aturan, bagaimana program JavaScript dibuat:</p>
            <br>
            <hr>
            <br>
            <h1>Nilai JavaScript</h1>
            <br>
            <h3>Sintaks JavaScript mendefinisikan dua jenis nilai</h3>
            <ul class="list">
                <li>Nilai teteap yang di sebut Literals</li>
                <li>Nilai variabel yang di sebut variables</li>
            </ul>
            <br>
            <hr>
            <br>
            <h1>JavaScript Literals</h1>
            <div class="contoh">
                <h2>Bilangan ditulis dengan atau tanpa desimal</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="merah">10.50</span>;

                    <span class="merah">1001</span>;
                </code></pre>
            </div>
             <div class="contoh">
                <h2>String ditulis dalam tanda kutip ganda atau tunggal</h2>
                <br>
                <pre class="contoh2"><code>
                   <span class="coklat">"Java script"</span>

                   <span class="coklat">'Java script'</span>

                </code></pre>
            </div>
            <p>Diatas adalah dua aturan terpenting untuk penulisan javaScript Literals</p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Variabel JavaScript</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="biru">let</span>  x;
                    x  = <span class="merah"> 6</span>;
                </code></pre>
            </div>
            <p>variabel digunakan untuk menyimpan nilai data.<br>
            JavaScript menggunakan kata kunci var, letdan constuntuk mendeklarasikan variabel.<br>
            Tanda sama dengan digunakan untuk memberikan nilai pada variabel.<br>
            Dalam contoh ini, x didefinisikan sebagai variabel. Kemudian, x diberi (diberi) nilai 6</p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Komentar JavaScript</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="biru">let</span> x =  <span class="merah">5</span>;   <span class="hijau">// akan dieksekusi</span>

                    <span class="hijau">// x = 6;  tidak dieksekusi</span>
                </code></pre>
            </div>
            <p>Tidak semua pernyataan JavaScript "dieksekusi".<br>
                Kode setelah garis miring ganda //atau di antara /*dan */diperlakukan sebagai komentar .<br>              
                Komentar diabaikan, dan tidak akan dieksekusi:</p>
            <br>
         </div>  
     </div>

</body>
</html>