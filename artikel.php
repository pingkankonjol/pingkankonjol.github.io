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
    <title>KKN | Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <script src="jquery/side.js"></script>
    <script type="text/javascript" src="jquery/canvas.js"></script>
    <style type="text/css">
      ul, li {
        padding: 1em;
        background-color: #222;
        border-radius: 5px;
      }
      ul, li, a{
        text-decoration: none;
        list-style-type: none;
        color: white;

      }

      @media screen and (min-width:  500px) {
        .myCanvas{
          display: none;
        }
      }

      

      @media screen and (min-width: 768px) {
        #hilang{
          display: block;
        }
        
      }

      @media screen and (max-width: 600px) {
        #hilang{
          display: none;
        }
        .myCanvas{
          display: block;
        }
      }



    </style>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow fixed-top">
    <div class="container">
      <img width="45" class="rounded-circle" src="profile/<?php echo $_SESSION["profile"]; ?>">
      <a class="navbar-brand ps-3" href="utama.php"><?php echo $_SESSION["user"]; ?></a>
      <a class="navbar-brand ps-3 ms-auto" href="logout.php">logout</a>
    </div>
  </nav>
  <!-- Akhir Navbar -->

      

  <section>
    <!-- container -->
    <div class="container-fluid">
      <!-- row pertama -->
      <div class="row px-4">




        <!-- AWAL OFFCANVAS -->
        <div class="myCanvas">
          <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Menu</a>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Catagory</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="menu4">
                <p id="pmenu4" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Menu</p>
                <ul id="ulmenu4">
                  <li><a href="utama.php">Home</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="">Link 3</a></li>
                  <li><a href="">Link 4</a></li>
                  <li><a href="">Link 5</a></li>
                </ul>
              </div>
              <div class="menu5">
                <p id="pmenu5" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Artikel</p>
                <ul id="ulmenu5">
                  <li><a href="">Link 1</a></li>
                  <li><a href="">Link 2</a></li>
                  <li><a href="">Link 3</a></li>
                  <li><a href="">Link 4</a></li>
                  <li><a href="">Link 5</a></li>
                </ul>
              </div>
              <div id="pmenu6" class="menu6">
                <p style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Tutorial</p>
                <ul id="ulmenu6">
                  <li><a href="">Link 1</a></li>
                  <li><a href="">Link 2</a></li>
                  <li><a href="">Link 3</a></li>
                  <li><a href="">Link 4</a></li>
                  <li><a href="">Link 5</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- AKHIR OFFCANVAS -->







        <!-- kolom 1 -->
        <div id="hilang" class="col-md-4 shadow p-5" style="height: 25%;">
          <h5 class="mb-4">Katagori</h5>
          <div class="menu1">
            <p id="pmenu1" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Menu</p>
            <ul id="ulmenu1">
              <li><a href="utama.php">Home</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="">Link 3</a></li>
              <li><a href="">Link 4</a></li>
              <li><a href="">Link 5</a></li>
            </ul>
          </div>
          <div class="menu2">
            <p id="pmenu2" style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Artikel</p>
            <ul id="ulmenu2">
              <li><a href="">Link 1</a></li>
              <li><a href="">Link 2</a></li>
              <li><a href="">Link 3</a></li>
              <li><a href="">Link 4</a></li>
              <li><a href="">Link 5</a></li>
            </ul>
          </div>
          <div id="pmenu3" class="menu3">
            <p style="cursor: pointer;" class="lead text-bg-dark p-2 rounded">Tutorial</p>
            <ul id="ulmenu3">
              <li><a href="">Link 1</a></li>
              <li><a href="">Link 2</a></li>
              <li><a href="">Link 3</a></li>
              <li><a href="">Link 4</a></li>
              <li><a href="">Link 5</a></li>
            </ul>
          </div>
        </div>
        <!-- akhir kolom 1 -->
        <!-- kolom 2 -->
        <div class="col-md-8 pt-5">
          <div class="row">
            <div class="col">
              <h2>Article</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <!-- BERITA 1 -->
              <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi7iy5wBDX6M_Tny-C_p99BTwuayRlli-jk4B4oFLHVjV-h9wF80H4rEeVov5Ha717TtpSkiMAuxVguRI7RpT4bb22y__D3gKoFJhRo2X3zC71CXcl-aEFf3PbVX9jmDCEuS8uArFYAY0DnS_E9DMwI70B4xxbJM1SajnlVV-8Bgh11p8OwQ5qUUN2p3A/w640-h360/Contoh%20Teks%20Amanat%20Pembina%20Upacara%20Setiap%20Senin%20Tema%20Semangat%20Belajar%20Sebagai%20Kunci%20Kesuksesan%205-7%20Menit%20Saja.jpg">
              <h3><a href="https://www.blogpendidikan.net/2022/09/contoh-teks-amanat-pembina-upacara.html" target="_blank">Contoh Teks Amanat Pembina Upacara Setiap Senin Tema Semangat Belajar Sebagai Kunci Kesuksesan 5-7 Menit Saja</a></h3>

            <!-- AKHIR BERITA 1-->
            </div>
            <div class="col-md-6">
              <!-- BERITA 2 -->
                <div class="card mb-3">
                  <img src="https://img.antaranews.com/cache/730x487/2022/09/17/IMG_20220917_203335.jpg.webp" class="card-img-top" alt="gambar berita">
                  <div class="card-body">
                    <h5 class="card-title">Papua Barat siap pamerkan capaian Otsus di Fordasi 2022</h5>
                    <p class="card-text">Manokwari (ANTARA) - Pemerintah Provinsi (Pemprov) Papua Barat siap memamerkan sejumlah capaian program otonomi khusus (otsus) pada pelaksanaan Rakor Forum Komunikasi Daerah Otonomi Khusus dan Istimewa (Fordasi) Tahun 2022.</p>
                    <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://papuabarat.antaranews.com/berita/19361/papua-barat-siap-pamerkan-capaian-otsus-di-fordasi-2022" target="_blank">Baca Selengkapnya</a></small></p>
                  </div>
                </div>
              <!-- AKHIR BERITA 2-->
            </div>
            <div class="col-md-6">
              <!-- BERITA 3 -->
                <div class="card mb-3">
                  <img src="https://img.antaranews.com/cache/730x487/2022/08/22/Compress_20220822_160942_2455.jpg.webp">
                  <div class="card-body">
                    <h5 class="card-title">Pemerintah Papua Barat pacu serapan anggaran Otsus dan DTI</h5>
                    <p class="card-text">Serapan anggaran akan semakin besar bila belanja Dana Tambahan Infrastruktur (DTI) dan Dana Otonomi khusus (Otsus) cepat terealisasi</p>
                    <p class="card-text">
                      Manokwari (ANTARA) - Pemerintah Provinsi Papua Barat terus memacu penyerapan anggaran dari sumber Dana Otonomi Khusus (Otsus) dan Dana Tambahan Infrastruktur (DTI) guna mendorong pertumbuhan ekonomi daerah.
                    </p>
                    <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://www.postingnews.id/read/8119/Heboh-Oknum-Satpol-PP-Pungli-ke-Pengamen-Angklung-Jalanan-Netizen-Beri-Komentar-Menohok" target="_blank">Baca Selengkapnya</a></small></p>
                  </div>
                </div>
              <!-- AKHIR BERITA 3-->
            </div>
            <div class="col-md-6">
              <!-- BERITA 3 -->
                <div class="card mb-3">
                  <img src="https://img.antaranews.com/cache/730x487/2022/08/22/Compress_20220822_160942_2455.jpg.webp">
                  <div class="card-body">
                    <h5 class="card-title">Pemerintah Papua Barat pacu serapan anggaran Otsus dan DTI</h5>
                    <p class="card-text">Serapan anggaran akan semakin besar bila belanja Dana Tambahan Infrastruktur (DTI) dan Dana Otonomi khusus (Otsus) cepat terealisasi</p>
                    <p class="card-text">
                      Manokwari (ANTARA) - Pemerintah Provinsi Papua Barat terus memacu penyerapan anggaran dari sumber Dana Otonomi Khusus (Otsus) dan Dana Tambahan Infrastruktur (DTI) guna mendorong pertumbuhan ekonomi daerah.
                    </p>
                    <p class="card-text"><small class="text-muted"><a class="btn btn-primary" href="https://www.postingnews.id/read/8119/Heboh-Oknum-Satpol-PP-Pungli-ke-Pengamen-Angklung-Jalanan-Netizen-Beri-Komentar-Menohok" target="_blank">Baca Selengkapnya</a></small></p>
                  </div>
                </div>
              <!-- AKHIR BERITA 3-->
            </div>
          </div>
        </div>
        <!-- akhir kolom 2 -->
      </div>
      <!-- akhir row pertama -->
    </div>
    <!-- akhir container -->
  </section>
  
 
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
