<?php
require 'functions.php';

$No= $_GET["No"];

if( hapus($No) > 0 ){
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'latihan1.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'latihan1.php';
        </script>
    ";
}

?>