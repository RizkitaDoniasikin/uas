<?php 

session_start();
 
require 'koneksi.php';
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
    <title>Welcome HOTEL</title>
  </head>
  <body>
    <!--navbar awal-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="./gambar/logo.png"
            alt=""
            width="50"
            height="50"
            class="me-2"
          />
           <strong>HOTEL</strong>
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
            <li class="nav-item" >
              <a class="nav-link " href="data.php">data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keluar.php"><i class="fas fa-sign-out-alt"></i></a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <!--akhir navbar-->
    <!--crousel-->
    <div class="container">
      <div
        id="carouselExampleIndicators"
        class="carousel slide mt-4"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="5"
            aria-label="Slide 6"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./gambar/12.jpg"
              width="1200"
              class="d-block img-fluid"
              alt="gambar1"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./gambar/crausel/13.jfif"
              width="1200"
              class="d-block img-fluid"
              alt="gambar2"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./gambar/crausel/14.jfif"
              width="1200"
              class="d-block img-fluid"
              alt="gambar3"
            />
          
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!--akhir crousel-->
    <!--foter-->
    <footer class="bg-light p-3 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="./gambar/logo.png" style="width: 40px" />
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
