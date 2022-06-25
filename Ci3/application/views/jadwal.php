<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Jadwal</title>
</head>
<body>
    <h1>Data Jadwal</h1>

    <a href="home" class="btn btn-neutral" role="button">FILM</a>
    <a href="jadwal" class="btn btn-neutral" role="button">JADWAL</a>
    <a href="#" class="btn btn-neutral" role="button">KURSI</a>
    <a href="#" class="btn btn-neutral" role="button">OPERATOR</a>
    <a href="#" class="btn btn-neutral" role="button">TEATER</a>
    <a href="#" class="btn btn-neutral" role="button">TRANSAKSI</a>
    <p></p>
	<table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>ID Jadwal</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Harga</th>
            <th>ID Film</th>
            <th>ID Teater</th>
            <th>Created</th>
            <th>Update</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
            $count = 0;
                foreach($queryAllDataJadwal as $row){
                    $count = $count + 1;

            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->id_jadwal ?></td>
                <td><?php echo $row->hari ?></td>
                <td><?php echo $row->jam ?></td>
                <td><?php echo $row->harga ?></td>
                <td><?php echo $row->id_film; ?></td>
                <td><?php echo $row->id_teater ?></td>
                <td>
                    <a href="#" class="btn btn-warning" role="button">Update</a>
                    <a href="#" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            <?php } ?>
</body>
</html>