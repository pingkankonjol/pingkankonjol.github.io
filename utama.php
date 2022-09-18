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
    <title>KKN | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <script src="jquery/side.js"></script>
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
        <!-- kolom 1 -->
        <div class="col-md-4 shadow p-5" style="height: 25%;">
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
        <div class="col-md-8">
          <div class="row">
            <div class="col">
              <h2>Halaman Utama</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <img src="gambar/logo.png" class="img-fluid" width="100">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div class="row">
                <div class="col-md-6">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <div class="col-md-6">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
              

            </div>
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
