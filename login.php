
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
    <title>Welcom HOTEL</title>
  </head>
  <body>
    
    <div >
      <form class="form-container" method="POST" action="cek_login.php" style="background-color:gold;">
        <h1 class="textjudul mb-4">LOGIN</h1>
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
        <div class="d-grid mt-4">
          <button type="submit" name="submit" class="btn btn-outline-primary textform">
            Masuk
          </button>
        </div>
        <div class="mt-1">
          <span class="textform"
            >Belum Punya Akun?
            <a class=" text-hover"><a href="daftar.php" style="text-decoration:none;">Daftar</a></span
          >
        </div>
      </form>
      <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '<script>alert("username atau password anda salah")</script>';
		}
	}
	?>
     
     
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
