<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Absen</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah prodi</h1>
	<a class="btn btn-sm btn-info" href="tblprodi.php">Kembali</a>
	<br><br>
	<form action="Proses.php" method="post">
		<label>kode prodi</label>
		<br>
		<input class="form-control" type="number" name="kode_prodi">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input class="form-control" type="text" name="nama_prodi"><br>
		<br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_prodi">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>