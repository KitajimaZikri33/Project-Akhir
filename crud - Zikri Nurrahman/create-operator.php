<!DOCTYPE html>
<html>
<head>
    <title>Tiket Bioskop</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_operator=input($_POST["id_operator"]);
        $nama=input($_POST["nama"]);
        $password=input($_POST["password"]);
        $created_at=input($_POST["created_at"]);
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into operator (id_operator,nama,password,created_at) values
        ('$id_operator','$nama','$password','$created_at')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:operator.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>ID Operator:</label>
            <input type="text" name="id_operator" class="form-control" placeholder="Masukan ID Operator" required/>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="text" name="password" class="form-control" placeholder="Masukan Password" required/>

        </div>
        <div class="form-group">
            <label>Created:</label>
            <input type="text" name="created_at" class="form-control" placeholder="Masukan Tanggal Buat" required/>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>