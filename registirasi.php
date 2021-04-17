<?php
    
// require 'functions.php';
// // require_once("config/connection.php");


//     if( isset($_POST["register"]) ) {

//         if( registirasi ($_POST) > 0) {
//             echo "<script> alert ('Registirasi Berhasil') </script>";
//         } else{
//             echo "<script> alert ('Registirasi Gagal! Coba Lagi') </script>";
//         }

//     }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- my CSS -->
    <link rel="stylesheet" href="cssSCSS/registirasi.css" />

    <title>Registirasi Akun APM</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row flex-column align-items-center ">
            <div class="col-md-6 text-center py-3 px-4 bg-light bg-gradient shadow-sm">
                <h3>Registirasi Akun Aplikasi Pengaduan Masyarakat</h3>
            </div>
            <div class="col-md-6 bg-light bg-gradient pb-3 px-4 shadow-sm">
                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="number" name="nik" class="form-control" id="floatingInput" placeholder="NIK"  required />
                        <label for="floatingInput">NIK ( Nomor Induk Kependudukan )</label>
                        <div class="form-text">Masukan NIK sesuai yang tertera pada KTP/KK</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="floatingUserName" placeholder="Username"  required />
                        <label for="floatingUserName">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="telp" class="form-control" id="floatingUserName" placeholder="Notelp"  required />
                        <label for="floatingUserName">No. Telp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="pass2" class="form-control" id="floatingPassword" placeholder="KonfirmasiPassword" required />
                        <label for="floatingPassword">Konfirmasi Password</label>
                    </div>
                    
                    <div class="d-grid gap-2 col-6 mx-auto mt-2">
                        <button name="register" class="btn btn-primary shadow-sm" type="submit">Daftar</button>
                    </div>
                </form>

                <div class="form-text text-center">Sudah punya akun, login <a href="#">disini</a></div>
            </div>
        </div>
    </div>






      
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>