<?php
session_start();
include 'koneksi.php';
 
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
    <title>Welcome Hotel    </title>

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
          <strong>Welcome HOTEL</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav"> 
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i></a>
            </li>
            
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
            <a href="mobil.php" class="text-decoration-none">list hotel</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">tambah data</li>
        </ol>
      </nav>
    </div>
    <!--akhir bredcrum-->
  <!--awal tambah-->
  <div class="section">
        <div class="container">
            <h3 class="textjudul">Tambah Data</h3>
            <br> 
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data" style="margin-left:120px;">
                    <input type="text" name="nama" class="form-control" placeholder="jenis hotel" style="width:850px;" required>
                    <input type="text" name="harga" class="form-control" placeholder="Harga hotel"style="width:850px;" required>
                    <input type="file" name="gambar" class="form-control"style="width:850px;" required>
                    <select class="form-control" name="status"style="width:850px;" >
                        <option value="">--pilih--</option>
                        <option value="1">ready</option>
                        <option value="0">tidak ready</option>
                    </select>
                    <input type="submit" name="submit" value="Submit" class="btn btn-danger mt-2">
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    //    print_r($_FILES['gambar']);
                    // Menampung inputan dari form 
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $status = $_POST['status'];

                    // menampung file yang diupload
                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];
                    
                    $type1 = explode('.',$filename);
                    $type2 = $type1[1];
                    
                    $newname = 'produk'.time().'.'.$type2;

                    // Menampung format file yang diizinkan
                    $tipe_diizinkan= array('jpg','jpeg','png','gif');
                    // Validasi Format file
                    if (!array($type2, $tipe_diizinkan)) {
                        // jika tidak ada tipe yang diizinkan
                        echo '<script>alert("Format File tidak Diizinkan")</script>';
                    }else{
                         // proses Upload file sekaligus insert database
                        //  jika format sesuai dengan yang ada didalam array/ diizikan
                        move_uploaded_file($tmp_name, './produk/'.$newname);
                        
                        $insert =mysqli_query($conn, "INSERT INTO tb_mobil VALUES(
                            null,
                            '".$nama."',
                            '".$harga."',
                            '".$newname."',
                            '".$status."')");

                        if ($insert) {
                            echo '<script>alert("Tambah data Berhasil")</script>';
                            echo '<script>window.location="data.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    }
                   



                }
                ?>
            </div>  
        </div>
    </div>
  <!--akhir tambah-->
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
