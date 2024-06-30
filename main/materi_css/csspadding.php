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
    <title>CSS Margin</title>
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
            <h1>CSS Padding</h1>
            <br>
            <div>
                <img class="fotsin" src="../../assets/img/padding.png">
            </div>
            <br>
            <p>Padding dalam CSS adalah properti yang digunakan untuk mengatur ruang di dalam elemen, antara konten elemen dan batas (border) elemen tersebut. Padding menambah ruang di dalam elemen, tidak mempengaruhi tata letak elemen di luar batas elemen itu sendiri. </p>
            <br>
            <hr>
            <br>
            <h1>Jenis Jenis Padding</h1>
            <ul class="list">
                <li>Padding Individual</li>
                <li>Margin Shorthand</li>
            </ul>
            <br>
            <hr>
            <br>
            <h1>Contoh Padding Individual</h1>
            <ul class="list">
                <li>padding-top</li>
                <li>padding-right</li>
                <li>padding-bottom</li>
                <li>padding-left</li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Contoh Padding Individual</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="coklat">p</span> {
                        <span class="merah">padding-top</span>:  <span class="biru">25px</span>;
                    }
                </code></pre>
            </div>
            <p>Padding Individual untuk mengatur Padding satu bagian contoh di atas untuk mengatur bagian Atas</p>
            <br>
            <hr>
            <br>
            <h1>Contoh Padding Shorthand</h1>
            <ul class="list">
                <li>Padding Yang terdapat 4 nilai</li>
                <li>Padding Yang terdapat 3 nilai</li>
                <li>Padding Yang terdapat 2 nilai</li>
                <li>Padding Yang terdapat 1 nilai</li>
            </ul>
            <br>
            <hr>
            <div class="exemple">
                <h2>Contoh Padding 4 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">Padding</span>:  <span class="biru">25px 50px 75px 100px</span>;
                        }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Padding 4 nilai untuk mengatur bagian atas -> kanan -> bawah -> kiri</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Padding 3 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">Padding</span>:  <span class="biru">25px 50px 75px</span>;
                        }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Padding 3 nilai untuk mengatur bagian atas -> kanan dan kiri -> bawah</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Padding 2 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">Padding</span>:  <span class="biru">25px 50px</span>;
                        }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Padding nilai untu mengatur bagian atas dan bawah -> kanan dan kiri</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Padding 1 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">Padding</span>:  <span class="biru">25px</span>;
                        }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Padding 1 nilai untuk mengatur keempat Padding nya dengan ukuran sama</p>
            <br>
        </div>  
    </div>

</body>
</html>