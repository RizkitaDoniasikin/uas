
<?php
session_start();
if ($_SESSION['status_login'] != true) {
  echo '<script>window.location="login.php"</script>';
}
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
    <link rel="stylesheet" type="text/css" href="./style.css" />
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
            src="./gambar/logo1.jfif"
            alt=""
            width="50"
            height="50"
            class="me-2"
          />
          <strong>Booking hotel</strong>
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
          <li class="breadcrumb-item active" aria-current="page">list</li>
        </ol>
      </nav>
    </div>
    <!--akhir bredcrum-->
    <!--awal data produk-->
  <div class="section">
        <div class="container">
        <h3 class="textjudul">Check-in+Check-out</h3>
            <div>
            <table class="table" border="2">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th>nama HOTEL</th>
                            <th>harga-sewa</th>
                            <th>gambar</th>
                            <th>status</th>
                            <th ></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no=1;
                        $produk =mysqli_query($conn, "SELECT * FROM tb_mobil ORDER BY nama DESC");
                        if (mysqli_num_rows($produk) > 0) {
                        while ($row =mysqli_fetch_array($produk)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama']?></td>
                            <td>Rp. <?php echo number_format($row['harga_sewa'])?></td>
                            <td>
                               <a href="produk/<?php echo $row['gambar'] ?>"> <img src="produk/<?php echo $row['gambar'] ?>" width="50px">
                               </a></td>
                            <td><?php echo ($row['status']== 0)? 'Tidak ready':'ready'; ?></td>
                            <td>
                                <a href="detail.php?id=<?php echo $row['id_kamar']?>">detail</a>
                            </td>
                        </tr>
                        <?php }}else{ ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                            <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
  <!--akhir data produk-->
    <!--foter-->
    <footer class="bg-light p-3 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="./gambar/logo1.jFIF" style="width: 40px" />
            </a>
            <span class="ps-1"
              >Copyright @2022 | created by
              <span class="text-dark fw-bold">HOTEL</span></span
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
