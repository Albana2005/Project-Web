<?php
session_start();

// Memeriksa apakah pengguna sudah login dengan benar
if(!isset($_SESSION['status'])){
	header("location:../../subscribe.php?pesan=belumlogin");
}
?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Materi html 2</title>
    <link rel="stylesheet" href="../../assets/css/desain2.css" />
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

        <h1>Elemen HTML</h1>
        <br>
        <hr>
        <br>
        <p>Elemen HTML ditentukan oleh tag awal, beberapa konten, dan tag akhir.</p>
        <br>
        <hr>
        <br>
        <h2>Elemen HTML</h2>
        <br>
        <hr>
        <br>
        <p>Elemen HTML adalah segalanya mulai dari tag awal hingga tag akhir:</p>
        <br>
        <p> konten ada di <span class="sintax">&lt;tagname&gt;</span>sini <span class="sintax">&lt;tagname&gt;</span></p>
        <p>Contoh beberapa elemen HTML:</p>
        <br>
        <p><span class="sintax">&lt;h1&gt;</span> judul pertama saya <span class="sintax">&lt;/h1&gt;</span></p>
        <p><span class="sintax">&lt;p&gt;</span> paragraf pertama saya <span class="sintax">&lt;/p&gt;</span></p>
        <hr>
        <br>
        <h1>Elemen HTML bersarang</h1>
        <br>
        <hr>
        <br>
        <p>Elemen HTML dapat disarangkan (artinya elemen dapat berisi elemen lain).

            Semua dokumen HTML terdiri dari elemen HTML bersarang.
            
            Contoh berikut berisi empat elemen HTML (<span class="sintax">&lt;html&gt;</span>,<span class="sintax">&lt;body&gt;</span>,
            <span class="sintax">&lt;h1&gt;</span>,dan <span class="sintax">&lt;p&gt;</span>)</p>
        <br>
        <hr>
        <br>
        <div class="exemple">
            <h2>Contoh</h2>
            <div class="kode">
                <pre><code>
                    <span class="sintax1">&lt;!DOCTYPE html&gt;</span>
                    <span class="sintax1">&lt;html&gt;</span>

                    <span class="sintax1">&lt;head&gt;&lt;/head&gt</span>
                    
                    <p><span class="sintax1">&lt;h1&gt;</span>This is a Heading<span class="sintax1">&lt;/h1&gt;</span></p><p><span class="sintax1">&lt;p&gt;</span>This is a paragraph.<span class="sintax1">&lt;/p&gt;</span></p>
                    
                    <span class="sintax1">&lt;/body&gt;</span>
                    <span class="sintax1">&lt;/html&gt;</span>
                </code></pre>
            </div>
            <br>
            <h2>Tampilan program</h2>
            <div class="image">
                <img src="../../assets/img/gambar1.png" alt="tampilan">          
            </div>
        </div>
            <br>
            <hr>
            <br>
            <h1>Contoh dijelaskan</h1>
            <br>
            <p>Elemennya <span class="sintax">&lt;html&gt;</span> adalah elemen root dan mendefinisikan keseluruhan dokumen HTML.

                Ini memiliki tag awal <span class="sintax">&lt;html&gt;</span> dan tag akhir <span class="sintax">&lt;/html&gt;</span>
                
                Lalu, di dalam <span class="sintax">&lt;html&gt;</span>elemen tersebut terdapat <span class="sintax">&lt;body&gt;</span> elemen:</p>
            <br>
            <br>
            <div class="exemple">
                <div class="kode">
                    <pre><code>
                        <span class="sintax1">&lt;body&gt;</span>                      
                        <p><span class="sintax1">&lt;h1&gt;</span>This is a Heading<span class="sintax1">&lt;/h1&gt;</span></p><p><span class="sintax1">&lt;p&gt;</span>This is a paragraph.<span class="sintax1">&lt;/p&gt;</span></p>
                        <span class="sintax1">&lt;/body&gt;</span>
                    </code></pre>
                </div>
                
        </div>
        <hr>
        <br>
        <p>Elemen <span class="sintax">&lt;body&gt;</span>mendefinisikan isi dokumen.

        Ini memiliki tag awal  <span class="sintax">&lt;body&gt;</span>dan tag akhir  <span class="sintax">&lt;/body&gt;</span>.
                    
        Kemudian, di dalam  <span class="sintax">&lt;body&gt;</span>elemen tersebut terdapat dua elemen lainnya:  <span class="sintax">&lt;h1&gt;</span>dan  <span class="sintax">&lt;p&gt;</span>:</p>
        <br>
        <div class="exemple">
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;h1&gt;</span>This is a Heading<span class="sintax1">&lt;/h1&gt;</span></p><p><span class="sintax1">&lt;p&gt;</span>This is a paragraph.<span class="sintax1">&lt;/p&gt;</span></p>
                </code></pre>
            </div>
        
        </div>
        <br>
            <hr>
            <br>
            <p>Elemen <span class="sintax">&lt;h1&gt;</span> mendefinisikan judul.

                Ini memiliki tag awal <span class="sintax">&lt;h1&gt;</span> dan tag akhir <span class="sintax">&lt;/h1&gt;</span>:</p>
            <br>
            <div class="exemple">
                <div class="kode">
                    <pre><code>                       
                        <p><span class="sintax1">&lt;h1&gt;</span>This is a Heading<span class="sintax1">&lt;/h1&gt;</span></p>
                    </code></pre>
                    </div>
            </div>
            <br>
            <hr>
            <br>
            <p>Elemen <span class="sintax">&lt;p&gt;</span> mendefinisikan paragraf.

                Ini memiliki tag awal <span class="sintax">&lt;p&gt;</span> dan tag akhir <span class="sintax">&lt;/p&gt;</span>:</p>
            <br>
            <div class="exemple">
                <div class="kode">
                    <pre><code>                       
                        <p><span class="sintax1">&lt;h1&gt;</span>This is a Heading<span class="sintax1">&lt;/h1&gt;</span></p>
                    </code></pre>
                    </div>
            </div>
            <br>
            <hr>
            <br>
            <h1>Elemen HTML kosong</h1>
            <br>
            <p>Elemen HTML yang tidak memiliki konten disebut elemen kosong.

                Tag  <span class="sintax">&lt;br&gt;</span>mendefinisikan jeda baris, dan merupakan elemen kosong tanpa tag penutup:</p>
                <br>
                <div class="exemple">
                    <h2>contoh</h2>
                    <div class="kode">
                        <pre><code>                       
                            <p><span class="sintax1">&lt;p&gt;</span>This is a <span class="sintax1">&lt;br&gt;</span>paragraph with a line break.<span class="sintax1">&lt;/p&gt;</span></p>
                        </code></pre>
                        </div>
                </div>
                <br>
                <hr>
                <br>
                <h1>HTML Tidak Peka Huruf Besar-kecil</h1>
                <br>
                <p>Tag HTML tidak membedakan huruf besar dan kecil: <span class="sintax">&lt;p&gt;</span>artinya sama dengan <span class="sintax">&lt;P&gt;</span>.</p>
                <br>
                <p>Standar HTML tidak memerlukan tag huruf kecil, tetapi kami merekomendasikan huruf kecil dalam HTML, dan memerlukan huruf kecil untuk jenis dokumen yang lebih ketat seperti XHTML.</p>
                <br>
     </div>  

   

</body>
</html>
