<?php
require 'functions.php';
// Ambil data di URL
$No = $_GET["No"];
// Query Data berdasarkan ID
$barang = query("SELECT * FROM tokoabc  WHERE No = '$No'")[0];


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil diubah atau tidak
    if (ubah_data($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'latihan1.php';
            </script>
        ";
    }else{
        echo"
        <script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'latihan1.php';
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Daftar Barang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Daftar Barang</h1>
        <form action="" method="post">
            <input type="hidden" name="No" value="<?=$barang["No"];?>">
            <div class="form-group">
                <label for="namabarang">Nama Barang :</label>
                <input type="text" name="namabarang" id="namabarang" class="form-control" required value="<?=$barang["namabarang"];?>">
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang :</label>
                <input type="text" name="kode_barang" id="kode_barang" class="form-control" required value="<?=$barang["kode_barang"];?>">
            </div>
            <div class="form-group">
                <label for="hargajual">Harga Barang :</label>
                <input type="text" name="hargajual" id="hargajual" class="form-control"required value="<?=$barang["hargajual"];?>">
            </div>
            <div class="form-group">
                <label for="stokbarang">Stok Barang :</label>
                <input type="text" name="stokbarang" id="stokbarang" class="form-control" required value="<?=$barang["stokbarang"];?>">
            </div>
            <div class="form-group">
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" class="form-control" required value="<?=$barang["Gambar"];?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Daftar Barang!</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
