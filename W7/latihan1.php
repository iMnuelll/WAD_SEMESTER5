<?php
require 'functions.php';
$tokoabc = query("SELECT * FROM tokoabc");
?>
<html>
  <head>
    <title>HALAMAN ADMIN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            background-color: #fff;
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td {
            border-top: 1px solid #ccc;
        }

        a {
            text-decoration: none;
        }
    </style>
  </head>  
  <body>
    <div class="container">
        <h1>Daftar Barang TOKO ABC</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Daftar Barang</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tokoabc as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?No=<?= $row["No"]; ?>">Ubah</a> |
                            <a href="hapus.php?No=<?= $row["No"]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus?');">Hapus</a>
                        </td>
                        <td><img src="image/<?php echo $row["Gambar"]; ?>" width="50"></td>
                        <td><?= $row["namabarang"]; ?></td>
                        <td><?= $row["kode_barang"]; ?></td>
                        <td><?= $row["hargajual"]; ?></td>
                        <td><?= $row["stokbarang"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
