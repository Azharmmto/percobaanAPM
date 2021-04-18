<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- my CSS -->
    <link rel="stylesheet" href="cssSCSS/login.css" />

    <title>Menu Login APM</title>
  </head>
  <body>

    <div class="container">
      <div class="row flex-column align-items-center mt-5">
        <div class="col-md-6 text-center bg-light pt-4 rounded-top pb-3 shadow-sm">
          <h1>Login <br /> <h2>Aplikasi Pengaduan Masyarakat<h2></h1>
        </div>
        <div class="col-md-6 bg-light pb-4 rounded-bottom shadow-sm">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" id="exampleInputUsername" name="username" />
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pass" />
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-2">
              <button name="login" class="btn btn-primary shadow-sm" type="submit">Login</button>
            </div>
          </form>

          <div class="form-text text-center mt-2">Belum punya akun? daftar <a href="registirasi.php" class="text-decoration-none">disini</a></div>
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