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
    <title>Materi html 3</title>
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

        <h1>Atribut HTML</h1>
        <br>
        <hr>
        <br>
        <p>Atribut HTML memberikan informasi tambahan tentang elemen HTML.</p>
        <br>
        <hr>
        <br>
        <h2>Atribut HTML</h2>
        <ul class="list">
            <li>Semua elemen HTML dapat memiliki <b>atribut</b></li>
            <li>Atribut memberikan informasi tambahan tentang elemen</li>
            <li>Atribut selalu ditentukan di tag awal</li>
            <li>Atribut biasanya datang dalam pasangan nama/nilai seperti: <b>name="value"</b></li>
        </ul>
        <br>
        <hr>
        <br>
        <h2>Atribut href</h2>
        <br>
        <p>Tag  <span class="sintax">&lt;a&gt;</span> mendefinisikan hyperlink. Atribut hrefmenentukan URL halaman yang dituju linknya:</p>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;a href "https://www.google.com"&gt;</span> google <span class="sintax1">&lt;/a&gt;</span></p>
                </code></pre>
                </div>
        </div>
        <br>
        <h2>Atribut src</h2>
        <br>
        <p>Tag <span class="sintax">&lt;img&gt;</span>digunakan untuk menyematkan gambar di halaman HTML. Atribut <span class="sintax">src</span>menentukan jalur ke gambar yang akan ditampilkan:</p>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;img src="img.jpg" &gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        <p>Ada dua cara untuk menentukan URL dalam <span class="sintax">src</span> atribut:</p>
        <br>
        <p><b>1.URL Absolut</b>- Tautan ke gambar eksternal yang dihosting di situs web lain. Contoh: src="https://www.google.com/images/img.jpg" .</p>
        <br>
        <p><b>Catatan :</b>Gambar eksternal mungkin dilindungi hak cipta. Jika Anda tidak mendapatkan izin untuk menggunakannya,
             Anda mungkin melanggar undang-undang hak cipta. Selain itu, Anda tidak dapat mengontrol gambar eksternal; itu bisa tiba-tiba dihapus atau diubah.</p>
        <br>
        <p><b>2. URL Relatif</b>-Tautan ke gambar yang dihosting di dalam situs web. Di sini, URL tidak menyertakan nama domain.
             Jika URL diawali tanpa garis miring, URL tersebut akan relatif terhadap halaman saat ini. Contoh: src="img.jpg". Jika URL dimulai dengan garis miring, itu akan berhubungan dengan domain. Contoh: src="/images/img.jpg".
        </p>
        <br>
        <p><b>Tip</b>-Hampir selalu yang terbaik adalah menggunakan URL relatif. Mereka tidak akan rusak jika Anda mengubah domain.</p>
        <br>
        <hr>
        <br>
        <h2>Atribut lebar dan tinggi</h2>
        <br>
        <p>Tag <span class="sintax">&lt;img&gt;</span> juga harus berisi atribut <span class="sintax">width</span> and <span class="sintax">height</span>, yang menentukan lebar dan tinggi gambar (dalam piksel):</p>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;img src="img.jpg" width="500" height="600" &gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        <hr>
        <br>
        <h2>Atribut alt</h2>
        <hr>
        <p>Atribut yang diperlukan <span class="sintax">alt</span> untuk <span class="sintax">&lt;img&gt;</span> tag menentukan teks alternatif untuk suatu gambar, jika gambar karena alasan tertentu tidak dapat ditampilkan.
             Hal ini dapat disebabkan oleh koneksi yang lambat, atau kesalahan pada <span class="sintax">src</span>atribut, 
             atau jika pengguna menggunakan pembaca layar.</p>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;img src="img.jpg" alt="gambar rumah" &gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <br>
            <p>jika kita <span class="sintax">style</span> mencoba menampilkan gambar yang tidak ada:</p>
            <br>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;img src="img_typo.jpg" alt="gambar rumah" &gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        <hr>
        <br>
        <h2>Atribut style</h2>
        <br>
        <p>Atribut digunakan untuk menambahkan gaya ke suatu elemen, seperti warna, font, ukuran, dan lainnya.</p>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;p style="color:red" &gt;</span>This is a red paragraph. <span class="sintax1">&lt;/p&gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        <hr>
        <br>
        <h2>Atribut lang</h2>
        <br>
        <p>Anda harus selalu menyertakan <span class="sintax">lang</span> atribut di dalam <span class="sintax">&lt;img&gt;</span> tag, untuk menyatakan bahasa halaman Web. Ini dimaksudkan untuk membantu mesin pencari dan browser.</p>
        <br>
        <p>Contoh berikut menetapkan bahasa Inggris sebagai bahasanya:</p>
        <br>
        <div class="exemple">
            <div class="kode">
                <pre><code>
                    <span class="sintax1">&lt;!DOCTYPE html&gt;</span>
                    <span class="sintax1">&lt;html lang="en"&gt;</span>

                    <span class="sintax1">&lt;body&gt;</span>
                    
                    <span class="sintax1">&lt;/body&gt;</span>
                    <span class="sintax1">&lt;/html&gt;</span>
                </code></pre>
            </div>
        </div>
        <br>    
        <p>Kode negara juga dapat ditambahkan ke kode bahasa di <span class="sintax">lang</span> atribut. Jadi, dua karakter pertama menentukan bahasa halaman HTML, dan dua karakter terakhir menentukan negara.</p>
        <br>
        <p>Contoh berikut menetapkan bahasa Inggris sebagai bahasanya dan Amerika Serikat sebagai negaranya:</p>
        <br>
        <div class="exemple">
            <div class="kode">
                <pre><code>
                    <span class="sintax1">&lt;!DOCTYPE html&gt;</span>
                    <span class="sintax1">&lt;html lang="en-US"&gt;</span>

                    <span class="sintax1">&lt;body&gt;</span>
                    
                    <span class="sintax1">&lt;/body&gt;</span>
                    <span class="sintax1">&lt;/html&gt;</span>
                </code></pre>
            </div>
        </div>
        <br>    
        <hr>
        <br>
        <h1>Atribut Titile</h1>
        <br>
        <p>Atribut <span class="sintax">title</span> mendefinisikan beberapa informasi tambahan tentang suatu elemen.</p>
        <br>
        <p>Nilai atribut title akan ditampilkan sebagai tooltip ketika Anda mengarahkan mouse ke elemen:</p>
        <br>
        <div class="exemple">
            <h2>contoh</h2>
            <div class="kode">
                <pre><code>                       
                    <p><span class="sintax1">&lt;p title="hallo world" &gt;</span>This is a red paragraph. <span class="sintax1">&lt;/p&gt;</span> </p>
                </code></pre>
                </div>
        </div>
        <br>
        
        </div>
            
     </div>  

   

</body>
</html>
