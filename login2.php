<?php 
session_start();


if(isset($_POST["login"])) {
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  // $profile;
  $namaPengguna = [
                    ["namauser" => "admin", "userpass" => "admin2022", "profile" => "pingkan.png"],
                    ["namauser" => "pingkan", "userpass" => "pk2001", "profile" => "admin.png"]
                  ];
  

  if($user == $namaPengguna[0]['namauser'] && $pass == $namaPengguna[0]['userpass'] && $namaPengguna[0]['profile']) {
    $_SESSION["login"] = true;
    $_SESSION["user"] = $user;
    $_SESSION["profile"] = "admin.png";
    header('Location: utama.php');
    exit;
  }else if($user == $namaPengguna[1]['namauser'] && $pass == $namaPengguna[1]['userpass'] && $namaPengguna[1]['profile']){
    $_SESSION["login"] = true;
    $_SESSION["user"] = $user;
    $_SESSION["profile"] = "pingkan.jpg";
    header('Location: utama.php');
    exit;
  }
  $error = true;
  
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="jquery/jquery-3.6.1.min.js"></script>
    <script src="jquery/login.js"></script>
    
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row justify-content-evenly">
          <div class="col-md-6 text-center p-3">
            <img src="gambar/logo.png" alt="gambar" class="rounded" width="300" />
            <h3 class="mt-3">KKN 2022</h3>
            <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-3 p-3 shadow">
            <h2 class="text-center">Login</h2>
            <?php if(isset($error)) : ?>
            <p class="alert alert-danger">Password / Username Salah</p>
            <?php endif; ?>
            <form action="" method="POST">
              <div class="mb-3" id="fname">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="user" class="form-control" id="username" />
              </div>
              <div class="mb-3" id="fPass">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="password" />
              </div>
              <!-- <div class="mt-4 d-grid">
                <button type="submit" id="ok" class="btn btn-primary">Ok</button>
              </div> -->
              <div class="mt-4 d-grid">
                <button type="submit" name="login" id="login" class="btn btn-primary" onclick="kirimNama()" >Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script type="text/javascript" src="jquery/kirim.js"></script>
  
  </body>
</html>
