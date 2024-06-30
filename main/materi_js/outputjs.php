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
    <title>JS Output</title>
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

            <h1>Output JavaScript</h1>
            <br>
            <h2>JavaScript dapat "menampilkan" data dengan beberapa cara:</h2>
            <br>
            <ul class="list">
                <li>Menulis ke dalam elemen HTML, menggunakan innerHTML.</li>
                <li>Menulis ke dalam output HTML menggunakan document.write().</li>
                <li>Menulis ke dalam kotak peringatan, menggunakan window.alert().</li>
                <li>Menulis ke konsol browser, menggunakan console.log().
                </li>
            </ul>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Menggunkan innerHTML</h2>
                <br>
                <pre class="contoh2"><code>
                    &lt;<span class="coklat">!DOCTYPE</span> <span class="merah">html</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                    &lt;<span class="coklat">body</span>&gt;
                
                    &lt;<span class="coklat">h1</span>&gt;My First Web Page&lt;<span class="coklat">/h1</span>&gt;
                    &lt;<span class="coklat">p</span>&gt;My First Paragraph&lt;<span class="coklat">/p</span>&gt;
                
                    &lt;<span class="coklat">p</span> <span class="merah">id</span>=<span class="biru">"demo"</span>&gt;&lt;<span class="coklat">/p</span>&gt;
                
                    &lt;<span class="coklat">script</span>&gt;
                    document.getElementById(<span class="biru">"demo"</span>).innerHTML = <span class="merah">5</span> + <span class="merah">6</span>;
                    &lt;<span class="coklat">/script</span>&gt;
                
                    &lt;<span class="coklat">/body</span>&gt;
                    &lt;<span class="coklat">/html</span>&gt;
                </code></pre>
            </div>
            <p>Untuk mengakses suatu elemen HTML, JavaScript dapat menggunakan document.getElementById(id)metode tersebut.
                Atribut idmendefinisikan elemen HTML. Properti innerHTML mendefinisikan konten HTML
            </p>
            <br>
            <hr>
            <br> 
            <div class="contoh">
                <h2>Menggunakan document.write()</h2>
                <br>
                <pre class="contoh2"><code>
                    &lt;<span class="coklat">!DOCTYPE</span> <span class="merah">html</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                    &lt;<span class="coklat">body</span>&gt;
                    
                    &lt;<span class="coklat">h1</span>&gt;My First Web Page&lt;<span class="coklat">/h1</span>&gt;
                    &lt;<span class="coklat">p</span>&gt;My first paragraph.&lt;<span class="coklat">/p</span>&gt;
                    
                    &lt;<span class="coklat">script</span>&gt;
                    document.write(<span class="merah">5</span> + <span class="merah">6</span>);
                    &lt;<span class="coklat">/script</span>&gt;
                    
                    &lt;<span class="coklat">body</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                </code></pre>
            </div>
            <p>Metode document.write() hanya boleh digunakan untuk pengujian. Menggunakan document.write() setelah dokumen HTML dimuat, akan menghapus semua HTML yang ada.
            </p>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Menggunakan window.alert()</h2>
                <br>
                <pre class="contoh2"><code>
                    &lt;<span class="coklat">!DOCTYPE</span> <span class="merah">html</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                    &lt;<span class="coklat">body</span>&gt;
                    
                    &lt;<span class="coklat">h1</span>&gt;My First Web Page&lt;<span class="coklat">/h1</span>&gt;
                    &lt;<span class="coklat">p</span>&gt;My first paragraph.&lt;<span class="coklat">/p</span>&gt;
                    
                    &lt;<span class="coklat">script</span>&gt;
                    window.alert(<span class="merah">5</span> + <span class="merah">6</span>);
                    &lt;<span class="coklat">/script</span>&gt;
                    
                    &lt;<span class="coklat">body</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                </code></pre>
            </div>
            <p>Anda dapat menggunakan kotak peringatan untuk menampilkan data. Dalam JavaScript, objek window adalah objek lingkup global. Artinya variabel, properti, dan metode secara default adalah milik objek window. Ini juga berarti bahwa menentukan window kata kunci adalah opsional.
            </p>
            <br>
            <p>Anda dapat melewatkan window kata kunci tersebut.</p>
            <div class="contoh">
                <h2>Contoh</h2>
                <br>
                <pre class="contoh2"><code>
                    &lt;<span class="coklat">!DOCTYPE</span> <span class="merah">html</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                    &lt;<span class="coklat">body</span>&gt;
                    
                    &lt;<span class="coklat">h1</span>&gt;My First Web Page&lt;<span class="coklat">/h1</span>&gt;
                    &lt;<span class="coklat">p</span>&gt;My first paragraph.&lt;<span class="coklat">/p</span>&gt;
                    
                    &lt;<span class="coklat">script</span>&gt;
                    alert(<span class="merah">5</span> + <span class="merah">6</span>);
                    &lt;<span class="coklat">/script</span>&gt;
                    
                    &lt;<span class="coklat">body</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                </code></pre>
            </div>
            <br>
            <hr>
            <br>
            <div class="contoh">
                <h2>Menggunakan console.log()</h2>
                <br>
                <pre class="contoh2"><code>
                    &lt;<span class="coklat">!DOCTYPE</span> <span class="merah">html</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                    &lt;<span class="coklat">body</span>&gt;
                    
                    &lt;<span class="coklat">h1</span>&gt;My First Web Page&lt;<span class="coklat">/h1</span>&gt;
                    &lt;<span class="coklat">p</span>&gt;My first paragraph.&lt;<span class="coklat">/p</span>&gt;
                    
                    &lt;<span class="coklat">script</span>&gt;
                    console.log(<span class="merah">5</span> + <span class="merah">6</span>);
                    &lt;<span class="coklat">/script</span>&gt;
                    
                    &lt;<span class="coklat">body</span>&gt;
                    &lt;<span class="coklat">html</span>&gt;
                </code></pre>
            </div>
            <p>Untuk keperluan debugging, Anda dapat memanggil console.log()metode di browser untuk menampilkan data.</p>
            <br>
        </div>  
     </div>

</body>
</html>