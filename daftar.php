
<?php

require 'koneksi.php';


if (isset($_POST['btn-submit'])) {
    // var_dump($_POST);
    // die();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_ulang = $_POST['password_ulang'];

    $res = mysqli_query($conn, "INSERT INTO tbadmin VALUES(NULL, '$username', '$password', 'user')");

    if ($res) {
        header("location:login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="./fontawesome/css/all.min.css"
    />
    <title>online shop</title>
  </head>
  <body>
  <div >
      <form class="form-container" method="POST" style="background-color:grey;" action="">
        <h1 class="textjudul mb-4">DAFTAR</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textform"
            >username</label
          >
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"
              ><i class="fas fa-user"></i
            ></span>
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="username"
            />
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textform"
            >Password</label
          >
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"
            ><i class="fas fa-unlock"></i
            ></span>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="password"
            />
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textform"
            >Password</label
          >
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"
            ><i class="fas fa-unlock"></i
            ></span>
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="ulangi password"
            />
          </div>
          <div class="row">
          <div class="col-md-6 d-grid mt-2">
            <button type="submit" name="btn-submit" class="btn btn-primary textform">
              Daftar
            </button>
          </div>
          <div class="col-md-6 d-grid mt-2">
            <button type="reset" class="btn btn-danger textform">
              hapus data
            </button>
          </div>
        </div>
        <div class="mt-2">
          <span class="textform"
            >Sudah punya akun ?
            <a href="#" class="textform text-hover"><a href="login.php"  class="text-hover">Login disini</a></span
          >
        </div>
      </form>   
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
