<?php
session_start();
require 'koneksi.php';


$id_mobil = $_GET['id'];

$resultDetailProduk = mysqli_query($conn, "SELECT * FROM tb_mobil WHERE id_kamar = $id_mobil LIMIT 1");
$rowDetail = mysqli_fetch_assoc($resultDetailProduk);
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
    <title>penyewaan</title>
  </head>
  <body>
    <!--navbar awal-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="./gambar/cek.jfif"
            alt=""
            width="50"
            height="50"
            class="me-2"
          />
          <strong>Check-in</strong>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <form action="" method="POST" class="d-flex ms-auto my-2 my-lg-0"></form>
        <li class="nav-item">
              <a class="nav-link" href="login.php">Keluar</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <!--akhir navbar-->
    <!--awal bredcrum-->
    <div class="container">
      <nav aria-label="breadcrumb" style="background: white" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item">
            <a href="home.php" class="text-decoration-none">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="mobil.php" class="text-decoration-none">list</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">detail</li>
        </ol>
      </nav>
    </div>
    <!--akhir bredcrum-->
    <!--awal data produk-->
  <!--awal produk-->
  <div class="container">
      <div class="row row-produk">
        <div class="col-lg-5">
          <figure class="figure">
            <img
              src="./produk/<?= $rowDetail['gambar']?>"
              class="figure-img img-fluid"
              style="border-radius: 5px; width: 450px"
            />
          </figure>
        </div>
        <div class="col-lg-7">
          <h4><?= $rowDetail['nama']?></h4>
          <div class="garis-nama"></div>
          <h3 class="text-muted mb-3">Rp.<?= $rowDetail['harga_sewa']?></h3>
          <div class="btn-produk mt-5">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=087879440004&text=apakah+<?= $rowDetail['produk_name']?>+ini+masih+ada" class="btn btn-danger text-white btn-lg btn-custom"
              >pesen</a
            >
          </div>
        </div>
      </div>
    </div>
    <!--akhir produk-->
    <!--foter-->
    <footer class="bg-light p-3 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="./gambar/logo1.jfif" style="width: 40px" />
            </a>
            <span class="ps-1"
              >Copyright @2022 | created by
              <span class="text-dark fw-bold">hotel</span></span
            >
          </div>
          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a href="# " class="text-decoration-none">
              <img
                src="./gambar/sosmed/fb.png"
                class="ms-2"
                style="width: 40px"
              />
            </a>
            <a href="# " class="text-decoration-none">
              <img
                src="./gambar/sosmed/ig.jpg"
                class="ms-2"
                style="width: 40px"
              />
            </a>
            <a href="# " class="text-decoration-none">
              <img
                src="./gambar/sosmed/twiter.jpg"
                class="ms-2"
                style="width: 40px"
              />
            </a>
            <a href="# " class="text-decoration-none">
              <img
                src="./gambar/sosmed/youtube.png"
                class="ms-2"
                style="width: 40px"
              />
            </a>
          </div>
        </div>
      </div>
    </footer>


    <!--akhir poter-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
