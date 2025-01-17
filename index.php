<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Website | Azharangga Kusuma</title>
   <!--Koneksi ke CSS-->
   <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
  <!--Header-->
  <header>
    <!--Membuat class jumbroton-->
    <div class="jumbotron">
    <!--Membuat slider teks-->
    <div id="slider--text">
    </div>
    </div>
         <!--Navigasi-->
         <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Article</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
  </header>
 
<main>
  <!--Membuat konten artikel-->
  <div id="content">
    <article id="frontend" class="card">
    <h2 id="frontend">Front-End developer</h2>
    <img src="assets/image/frontend.png" class="featured-image" alt="frontend">
    <p align="justify">front end developer adalah pekerjaan dalam bentuk pemrograman yang mengelola dan mengembangkan tampilan sebuah aplikasi atau website.</p>
    
    <p align="justify">Adapun hal yang biasa dilakukan oleh front end developer yaitu mengkombinasikan teknik desain, teknologi, dan pemrograman untuk menghasilkan tampilan situs web yang menarik, interaktif, serta menangani debugging (masalah) yang terjadi. </p>
    
    <p align="justify">Front end memiliki tanggung jawab untuk memastikan bahwa pengunjung dapat dengan mudah mengakses dan menggunakan sebuah aplikasi atau situs web. Contohnya, setiap kali kamu mengunjungi situs web, apa pun yang kamu lihat, klik, atau gunakan adalah pekerjaan front end. Mulai dari desain/tata letak, konten, tombol, gambar, navigasi, dan tautan internal.</p>
    </article>
    
    <article id="bahasapemrograman" class="card">
    <h2 id="wisata">Bahasa Pemrograman</h2>
    <p align="justify">atau sering diistilahkan juga dengan bahasa komputer atau bahasa pemrograman komputer, adalah instruksi standar untuk memerintah komputer. Bahasa pemrograman ini merupakan suatu himpunan dari aturan sintaks dan semantik yang dipakai untuk mendefinisikan program komputer.</p>
    
    <h3>HTML</h3>
    <img src="assets/image/html.jpg"class="featured-image" alt="HTML">
    <p align="justify">Hypertext Markup Language atau HTML adalah bahasa markup yang digunakan untuk membuat sebuah halaman web. Isinya terdiri dari berbagai kode yang dapat menyusun struktur suatu website.</p>

    <p align="justify" >HTML terdiri dari kombinasi teks dan simbol yang disimpan dalam sebuah file. Dalam membuat file HTML, terdapat standar atau format khusus yang harus diikuti. Format tersebut telah tertuang dalam standar kode internasional atau ASCII (American Standard Code for Information Interchange). </p>
    
    <h3>CSS</h3>
    <img src="assets/image/css.jpg" class="featured-image" alt="CSS">
    <p align="justify">CSS adalah salah satu istilah teknis dalam pemrograman. Meski sering dianggap sebuah bahasa pemrograman, CSS bukanlah bagian dari bahasa itu. Kata Tech Terms, CSS adalah salah satu styling language (bahasa desain), bagian dari markup language yang dapat “mewarnai” atau mendesain suatu halaman website.</p>
    
     <h3>JavaScript</h3>
    <img src="assets/image/js.jpg" class="featured-image" alt="JavaScript">
    <p align="justify">JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer, Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.</p>
    </article>
  </div>
    
    <!--Membuat asside yang menampilkan foto profil dan identitas diri-->
    <aside>
      <article class="profile card">
        <header>
            <h2>Azharangga Kusuma</h2>
            <p>Mahasiswa</p>
          <figure>
            <img src="assets/image/profile.png" alt="Profile">
            <figcaption>Photo Profile</figcaption>
          </figure>
        </header>
        
        <!--Membuat tabel yang berisikan identitas diri-->
        <section>
         <h3>Informasi Lainnya</h3>
         <table align="justify">
            <tr>
               <th>Nama Lengkap</th>
               <td>Azharangga Kusuma</td>
            </tr>
            <tr>
               <th>Tempat, Tanggal Lahir</th>
               <td>Cirebon, 02 Januari 2003</td>
            </tr>
            <tr>
               <th>Pendidikan Terakhir</th>
               <td>SMK-Teknik Komputer dan Jaringan</td>
            </tr>
            <tr>
               <th>Pendidikan Saat Ini</th>
               <td>S1-Teknik Informatika</td>
            </tr>
            <tr>
               <th>Nomor Telepon</th>
               <td>+62895364527280</td>
            </tr>
          </table>
        </section>
      </article
    </aside>
  </div>
</main>
  
  <!--Membuat catatan kaki-->
  <footer>
    <p>Copyright &#169; 2022 | Azharangga Kusuma</p>
  </footer>
  
  <!--Koneksi ke JavaScript-->
  <script src="assets/script/script.js"></script>
 </body>
 </html>