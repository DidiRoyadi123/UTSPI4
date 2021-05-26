<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>

<html>
    <head>
    <title> Tabel Dosen</title>
    </head>

    <body>
    <body align="center">
	
	<div class="tabel">
		<h1>Data Dosen</h1>		
		<a class="btn btn-sm btn-success" href="create_dosen.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>No</th>
					<th>Kode Dosen</th>
					<th>NIDN</th>
					<th>NIPY</th>
					<th>Nama Dosen</th>
                    <th>Kode Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_dosen();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$index++ ?></td>
							<td><?=$data->kode_dosen ?></td>
							<td><?=$data->nidn ?></td>
							<td><?=$data->nipy ?></td>
                            <td><?=$data->nama_dosen ?></td>
                            <td><?=$data->kode_prodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_dosen.php?kode_dosen=<?=$data->kode_dosen ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?kode_dosen=<?=$data->kode_dosen ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel dosen.</td>
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