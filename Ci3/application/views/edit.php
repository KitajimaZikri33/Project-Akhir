<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Update Data Film</title>
</head>
<body>
	<h2>Update Data</h2>


    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" placeholder="Masukan Judul" required />

        </div>
        <div class="form-group">
            <label>Genre:</label>
            <input type="text" name="genre" class="form-control" value="<?php echo $data['genre']; ?>" placeholder="Masukan Genre" required/>

        </div>
        <div class="form-group">
            <label>Rating:</label>
            <input type="text" name="rating" class="form-control" value="<?php echo $data['rating']; ?>" placeholder="Masukan Rating"required/>
        </div>
        <div class="form-group">
            <label>Produksi:</label>
            <input type="text" name="produksi" class="form-control" value="<?php echo $data['produksi']; ?>" placeholder="Masukan Produksi" required/>
        </div>
        <div class="form-group">
            <label>Distributor:</label>
            <input type="text" name="distributor" class="form-control" value="<?php echo $data['distributor']; ?>" placeholder="Masukan distributor" required/>
        </div>
        <div>
            <label>Durasi:</label>
            <input type="text" name="durasi" class="form-control" value="<?php echo $data['durasi']; ?>" placeholder="Masukan Durasi" required/>
        </div>
        <div>
            <label>Country:</label>
            <input type="text" name="country" class="form-control" value="<?php echo $data['country']; ?>" placeholder="Masukan Country" required/>
        </div>

        <input type="hidden" name="id_film" value="<?php echo $data['id_film']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>