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
    <title>Materi html 1</title>
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

        <h1>Pengenalan HTML</h1>
        <br>
        <hr>
        <br>
        <p>HTML adalah bahasa markap standar untuk membuat halaman Web</p>
        <br>
        <hr>
        <br>
        <h1>Apa itu HTML</h1>
        <ul class="list">
            <li>HTML adalah singkatan dari Hyper Text Markup Language</li>
            <li>HTML adalah bahasa markup standar untuk membuat halaman Web</li>
            <li>HTML menjelaskan struktur halaman Web</li>
            <li>HTML terdiri dari serangkaian elemen</li>
            <li>Elemen HTML memberi tahu browser cara menampilkan konten</li>
            <li>Elemen HTML memberi label pada bagian konten seperti "ini adalah judul", "ini adalah paragraf", "ini adalah tautan", dll.</li>
        </ul>
        <br>
        <hr>
        <br>
        <h1>Contoh Dasar HTML</h1>
        <br>
        <hr>
        <br>
        <p>Dalam materi ini kami akan menunjukkan beberapa contoh dasar HTML</p>
        <br>
        <hr>
        <br>
        <h1>Dokumen HTML</h1>
        <br>
        <hr>
        <pre><code>
        <p>Semua dokumen HTML harus dimulai dengan mendeklarasikan tipe dokumen <span class="sintax">&lt;!DOCTYPE html&gt;</span><br>Dokumen html itu sendiri dimulai dengan <span class="sintax">&lt;html&gt;</span> dan diakhiri dengan <span class="sintax">&lt;/html&gt;</span>;.bagian yang terlihat <br>dari dokumen HTML adalah antara lain <span class="sintax">&lt;body&gt;</span> dan <span class="sintax">&lt;/body&gt;</span> </p>
        </code></pre>
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
            <h1>Contoh dijelaskan</h1>
            <br>
            <ul class="list">
                <li>Deklarasi tersebut <span class="sintax">&lt;!DOCTYPE html&gt;</span> mendefinisikan bahwa dokumen ini adalah dokumen HTML5</li>
                <li>Elemen <span class="sintax">&lt;html&gt;</span> adalah elemen akar dari halaman HTML</li>
                <li>Elemen tersebut <span class="sintax">&lt;head&gt;</span> berisi informasi meta tentang halaman HTML</li>
                <li>Elemen <span class="sintax">&lt;title&gt;</span> menentukan judul untuk halaman HTML (yang ditampilkan di bilah judul browser atau di tab halaman)</li>
                <li>Elemen <span class="sintax">&lt;body&gt;</span> mendefinisikan badan dokumen, dan merupakan wadah untuk semua konten yang terlihat, seperti judul,paragraf, gambar, hyperlink, tabel, daftar, dll.</li>
                <li>Elemen <span class="sintax">&lt;h1&gt;</span> mendefinisikan judul besar</li>
                <li>Elemen <span class="sintax">&lt;p&gt;</span> mendefinisikan paragraf</li>
            </ul>
       
        </div>

     </div>  

   

</body>
</html>
