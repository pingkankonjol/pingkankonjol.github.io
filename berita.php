<?php 
session_start();

if(!isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KKN | News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <script src="jquery/side.js"></script>
    <style type="text/css">
      .menu1, .menu2{
        padding: 1rem 2rem;
        background-color: #eee;
      }
      ul, li{
        border-radius: 9px;
        padding: 0.5em;
        background-color: #ddd;
      }
      li a{
        color: red;
      }
      section{
        margin-top: 5em;
      }
      #row-side{
        width: 20em;
      }
    </style>
  </head>
  <body>

  <nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow fixed-top">
    <div class="container">
    <!-- Navbar Brand-->
    <img width="45" class="rounded-circle" src="profile/<?php echo $_SESSION["profile"]; ?>">
    <a class="navbar-brand ps-3" href="utama.php"><?php echo $_SESSION["user"]; ?></a>
    <a class="navbar-brand ps-3 ms-auto" href="logout.php">logout</a>
    </div>
  </nav>
  
  <section>
    <div class="container bg-danger">
      <!-- baris sidbar -->
      <div id="row-side" class="row bg-info position-relative">
        <div id="mySide" class="col shadow p-3 mb-5 bg-warning position-relative">
          <h4 class="text-center mb-4 position-absolute" >Catagori</h4>
          <p id="pmenu1" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Menu 1</p>
          <ul id="ulmenu1">
            <li style="list-style-type: none;"><a class="text-decoration-none" href="#">link1</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none" href="">link2</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none" href="">link3</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none" href="">link4</a></li>
          </ul>
          <p id="pmenu2" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Menu 2</p>
          <ul id="ulmenu2">
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link1</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link2</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link3</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link4</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link5</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link6</a></li>
          </ul>
          <p id="pmenu3" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Menu 3</p>
          <ul id="ulmenu3">
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link1</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link2</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link3</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link4</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link5</a></li>
            <li style="list-style-type: none;"><a class="text-decoration-none"  href="">link6</a></li>
          </ul>
        </div>
      </div>
      <!-- akhir barissidbar -->
      <div class="row bg-success ">
        <div class="col-md-6">
          <!-- BERITA -->
            <div class="col-md-8 p-3">
              <div class="card mb-3">
                <img src="https://postingnews.id//uploads/8f3574a09efad2d17b7cee1690ce68a3.jpg" class="card-img-top" alt="gambar berita">
                <div class="card-body">
                  <h5 class="card-title">Heboh! Oknum Satpol PP Pungli ke Pengamen Angklung Jalanan, Netizen Beri Komentar Menohok</h5>
                  <p class="card-text">Video ini pertama kali dilihat di Instagram melalui akun @net2netnews, Sabtu 17 Septmber 2022. Di akun tersebut terlampir keterangan bahwa para Pengamen Angklung jalanan mendapat pungutan liar dari seorang petugas Satpol PP.</p>
                  <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://www.postingnews.id/read/8119/Heboh-Oknum-Satpol-PP-Pungli-ke-Pengamen-Angklung-Jalanan-Netizen-Beri-Komentar-Menohok" target="_blank"> Selengkapnya</a></small></p>
                </div>
              </div>
            </div>
          <div class="col-md-8 p-3">
            <div class="card mb-3">
              <img src="https://img.antaranews.com/cache/730x487/2022/09/17/IMG_20220917_203335.jpg.webp" class="card-img-top" alt="gambar berita">
              <div class="card-body">
                <h5 class="card-title">Papua Barat siap pamerkan capaian Otsus di Fordasi 2022</h5>
                <p class="card-text">Manokwari (ANTARA) - Pemerintah Provinsi (Pemprov) Papua Barat siap memamerkan sejumlah capaian program otonomi khusus (otsus) pada pelaksanaan Rakor Forum Komunikasi Daerah Otonomi Khusus dan Istimewa (Fordasi) Tahun 2022.</p>
                <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://papuabarat.antaranews.com/berita/19361/papua-barat-siap-pamerkan-capaian-otsus-di-fordasi-2022" target="_blank"> Selengkapnya</a></small></p>
              </div>
            </div>
          </div>
          <div class="col-md-8 p-3">
            <div class="card mb-3">
              <img src="https://img.antaranews.com/cache/730x487/2022/08/22/Compress_20220822_160942_2455.jpg.webp">
              <div class="card-body">
                <h5 class="card-title">Pemerintah Papua Barat pacu serapan anggaran Otsus dan DTI</h5>
                <p class="card-text">Serapan anggaran akan semakin besar bila belanja Dana Tambahan Infrastruktur (DTI) dan Dana Otonomi khusus (Otsus) cepat terealisasi</p>
                <p class="card-text">
                  Manokwari (ANTARA) - Pemerintah Provinsi Papua Barat terus memacu penyerapan anggaran dari sumber Dana Otonomi Khusus (Otsus) dan Dana Tambahan Infrastruktur (DTI) guna mendorong pertumbuhan ekonomi daerah.
                </p>
                <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://www.postingnews.id/read/8119/Heboh-Oknum-Satpol-PP-Pungli-ke-Pengamen-Angklung-Jalanan-Netizen-Beri-Komentar-Menohok" target="_blank"> Selengkapnya</a></small></p>
              </div>
            </div>
          </div>
          <!-- AKHIR BERITA -->
          
        </div>
      </div>
    </div>
  </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
