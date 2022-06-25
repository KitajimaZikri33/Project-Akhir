<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Tiket Bioskop</title>
</head>
<body>
	<h1>Data Film</h1>

	<a href="#" class="btn btn-neutral" role="button">FILM</a>
	<a href="jadwal" class="btn btn-neutral" role="button">JADWAL</a>
	<a href="#" class="btn btn-neutral" role="button">KURSI</a>
	<a href="#" class="btn btn-neutral" role="button">OPERATOR</a>
	<a href="#" class="btn btn-neutral" role="button">TEATER</a>
	<a href="#" class="btn btn-neutral" role="button">TRANSAKSI</a>
	<p></p>
	<table class="table table-bordered table-hover">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Judul</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Produksi</th>
			<th>Distributor</th>
			<th>Durasi</th>
			<th>Country</th>

			<th colspan="2">Aksi</th>
		</tr>
			<?php
			$count = 0;
				foreach($queryAllDataFilm as $row){
					$count = $count + 1;

			?>
			<tr>
				<td><?php echo $count ?></td>
				<td><?php echo $row->id_film ?></td>
				<td><?php echo $row->judul ?></td>
				<td><?php echo $row->genre ?></td>
				<td><?php echo $row->rating ?></td>
				<td><?php echo $row->produksi; ?></td>
				<td><?php echo $row->distributor ?></td>
				<td><?php echo $row->durasi ?></td>
				<td><?php echo $row->country ?></td>
				<td>
					<a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id_film ?>" class="btn btn-warning" role="button">Update</a>
					<a href="#" class="btn btn-danger" role="button">Delete</a>
				</td>
			</tr>
			<?php } ?>
	</table>
	<a href="create_film" class="btn btn-primary" role="button">Tambah Data</a>

</body>
</html>