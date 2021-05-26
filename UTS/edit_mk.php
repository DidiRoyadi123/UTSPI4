<?php
include 'header.html';
$kode_mk = $_GET['kode_mk'];
include 'model.php';
$model = new Model();
$data = $model->edit_mk($kode_mk);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit prodi</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Mata Kuliah</h1>
	<br><br>
	<form action="proses.php" method="post">
    <label>Kode Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="kode_mk" value="<?php echo $data->kode_mk ?>">
		<br>
		<label>Nama Mata Kuliah</label>
		<br>
		<input class="form-control" type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
		<br>
		<label>Jumlah SKS</label>
		<br>
		<input class="form-control" type="number" name="jumlah_sks" value="<?php echo $data->jumlah_sks ?>">
		<br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester" value="<?php echo $data->semester ?>">
		<br>
		<label>Kode Prodi</label>
		<br>
		<input class="form-control" type="number" name="kode_prodi" value="<?php echo $data->kode_prodi ?>">
		<br><br>
		<a class="btn btn btn-info"  href="tblmk.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editmk">Submit</button> 
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
