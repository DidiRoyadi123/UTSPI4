<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>

<html>
    <head>
    <title> Tabel Prodi</title>
    </head>

    <body>
    <body align="center">
	
	<div class="tabel">
		<h1>Data Prodi</h1>		
		<a class="btn btn-sm btn-success" href="create_prodi.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>Kode Prodi</th>
					<th>Nama Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_prodi();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$index++ ?></td>
							<td><?=$data->kode_prodi ?></td>
							<td><?=$data->nama_prodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_prodi.php?kode_prodi=<?=$data->kode_prodi ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?kode_prodi=<?=$data->kode_prodi ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
    </body>


	<?php
include 'footer.html';
?>

</html>