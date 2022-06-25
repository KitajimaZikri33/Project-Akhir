<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Input Data Film</title>
</head>
<body>
	<h2>Input Data</h2>

	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
        <div class="form-group">
            <label>ID Film:</label>
            <input type="text" name="id_film" class="form-control" placeholder="Masukan ID Film" required/>
        </div>
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukan Judul film" required />

        </div>
        <div class="form-group">
            <label>Genre:</label>
            <input type="text" name="genre" class="form-control" placeholder="Masukan Genre" required/>

        </div>
        <div class="form-group">
            <label>Rating:</label>
            <input type="text" name="rating" class="form-control" placeholder="Masukan rating" required/>

        </div>
        <div class="form-group">
            <label>Produksi:</label>
            <input type="text" name="produksi" class="form-control" placeholder="Masukan Produksi" required/>
        </div>
        <div class="form-group">
            <label>Distributor:</label>
            <input type="text" name="distributor" class="form-control" placeholder="Masukan Distributor" required/>
        </div>
        <div class="form-group">
            <label>Durasi:</label>
            <input type="text" name="durasi" class="form-control" placeholder="Masukan Durasi" required/>
        </div>
        <div class="form-group">
            <label>Country:</label>
            <input type="text" name="country" class="form-control" placeholder="Masukan Country" required/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="Back" name="back" class="btn btn-primary">Back</button>
    </form>

</body>
</html>