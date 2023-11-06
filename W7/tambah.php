<?php
require 'functions.php';
// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah_data($_POST) > 0 ){
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
    <title>Tambah Daftar Barang</title>
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
        <h1>Tambah Daftar Barang</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="namabarang">Nama Barang :</label>
                <input type="text" name="namabarang" id="namabarang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang :</label>
                <input type="text" name="kode_barang" id="kode_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hargajual">Harga Barang :</label>
                <input type="text" name="hargajual" id="hargajual" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="stokbarang">Stok Barang :</label>
                <input type="text" name="stokbarang" id="stokbarang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Daftar Barang!</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
