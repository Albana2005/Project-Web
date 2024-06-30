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

            <h1>CSS Margin</h1>
            <br>
            <div>
                <img src="../../assets/img/boxmodel.png">
            </div>
            <br>
            <p>Margin dalam CSS adalah properti yang digunakan untuk mengatur ruang di sekitar elemen HTML. Margin ini merupakan ruang di luar batas (border) elemen, dan tidak mempengaruhi konten atau tata letak elemen di dalamnya, melainkan jarak antara elemen tersebut dengan elemen lainnya. </p>
            <br>
            <hr>
            <br>
            <h1>Jenis Jenis Margin</h1>
            <ul class="list">
                <li>Margin Individual</li>
                <li>Margin Shorthand</li>
            </ul>
            <br>
            <hr>
            <br>
            <h1>Contoh Margin Individual</h1>
            <ul class="list">
                <li>Margin-top</li>
                <li>Margin-right</li>
                <li>Margin-bottom</li>
                <li>Margin-left</li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Contoh Margin Individual</h2>
                <br>
                <pre class="contoh2"><code>
                    <span class="coklat">p</span> {
                        <span class="merah">margin-top</span>:  <span class="biru">25px</span>;
                    }
                </code></pre>
            </div>
            <p>Margin Individual untuk mengatur Margin satu bagian conth di atas untuk mengatur bagian Atas</p>
            <br>
            <hr>
            <br>
            <h1>Contoh Margin Shorthand</h1>
            <ul class="list">
                <li>Margin Yang terdapat 4 nilai</li>
                <li>Margin Yang terdapat 3 nilai</li>
                <li>Margin Yang terdapat 2 nilai</li>
                <li>Margin Yang terdapat 1 nilai</li>
            </ul>
            <br>
            <hr>
            <div class="exemple">
                <h2>Contoh Margin 4 Nilai</h2>
                <br>
            <div class="kode">
                <pre><code>
                    <span class="coklat">p</span> {
                        <span class="merah">margin</span>:  <span class="biru">25px 50px 75px 100px</span>;
                      }
                </code></pre>
            </div>
            <br> 
            </div>
            <p>Margin 4 nilai untuk mengatur bagian atas -> kanan -> bawah -> kiri</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Margin 3 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                   <span class="coklat">p</span> {
                        <span class="merah">margin</span>:  <span class="biru">25px 50px 75px</span>;
                      }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Mrgin 3 nilai untuk mengatur bagian atas -> kanan dan kiri -> bawah</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Margin 2 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">margin</span>:  <span class="biru">25px 50px</span>;
                          }
                    </code></pre>
                </div>
                <br> 
             </div>
            <p>Mrgin nilai untu mengatur bagian atas dan bawah -> kanan dan kiri</p>
            <br>
            <hr>
            <br>
            <div class="exemple">
                <h2>Contoh Margin 1 Nilai</h2>
                <br>
                <div class="kode">
                    <pre><code>
                        <span class="coklat">p</span> {
                            <span class="merah">margin</span>:  <span class="biru">25px</span>;
                          }
                    </code></pre>
                </div>
                <br> 
            </div>
            <p>Mrgin 1 nilai untuk mengatur keempat margin nya dengan ukuran sama</p>
            <br>
        </div>  
     </div>

 </body>
</html>