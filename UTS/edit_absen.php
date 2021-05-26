<?php
include 'header.html';
$id_absen = $_GET['id_absen'];
include 'model.php';
$model = new Model();
$data = $model->edit_absen($id_absen);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit absen</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit absen</h1>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID absen</label>
		<br>
		<input class="form-control" type="number" name="id_absen" value="<?php echo $data->id_absen ?>">
		<br>
		<label>Tanggal Absen</label>
		<br>
		<input class="form-control" type="date" name="tgl_absen" value="<?php echo $data->tgl_absen ?>">
		<br>
        <label>Masuk</label>
		<br>
		<input class="form-control" type="time" name="masuk" value="<?php echo $data->masuk ?>">
		<br>
        <label>keluar</label>
		<br>
		<input class="form-control" type="time" name="keluar" value="<?php echo $data->keluar?>">
		<br>
        <label>Kode Dosen</label>
		<br>
		<input class="form-control" type="number" name="kode_dosen" value="<?php echo $data->kode_dosen ?>">
		<br>
        <label>Sesi</label>
		<br>
		<input class="form-control" type="number" name="sesi" value="<?php echo $data->sesi ?>">
		<br>
        <label>Kelas sesi</label>
		<br>
		<input class="form-control" type="number" name="kelas_sesi" value="<?php echo $data->kelas_sesi ?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tblabsen.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editabsen">Submit</button> 
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
