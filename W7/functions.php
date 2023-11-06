<?php
//Koneksi ke Database
$connect = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah_data($data){
    global $connect;
    // Ambil data dari tiap elemen form
    $namabarang = htmlspecialchars($data["namabarang"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    $hargabarang = htmlspecialchars($data["hargajual"]);
    $stokbarang = htmlspecialchars($data["stokbarang"]);
    $kodebarang = htmlspecialchars($data["kode_barang"]);

    // Query insert data
    $query = "INSERT INTO tokoabc (namabarang, Gambar, hargajual, stokbarang, kode_barang)
    VALUES ('$namabarang', '$gambar', '$hargabarang', '$stokbarang', '$kodebarang')";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function hapus($No) {

    global $connect;
    mysqli_query($connect, "DELETE FROM tokoabc WHERE No = $No");

    return mysqli_affected_rows($connect);

}

function ubah_data($data){
    global $connect;

    $No = $data['No'];
    // Ambil data dari tiap elemen form
    $namabarang = htmlspecialchars($data["namabarang"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    $hargabarang = htmlspecialchars($data["hargajual"]);
    $stokbarang = htmlspecialchars($data["stokbarang"]);
    $kodebarang = htmlspecialchars($data["kode_barang"]);

    // Query insert data
    $query = "UPDATE tokoabc SET 
        namabarang = '$namabarang',
        Gambar = '$gambar',
        hargajual = $hargabarang,
        stokbarang = $stokbarang,
        kode_barang = '$kodebarang'
    WHERE No = $No
    ";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}



?>