<?php
    if ($_GET['id_pelanggan']) {
        include "koneksi.php";
        $query_hapus = mysqli_query($conn, "DELETE FROM pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='data_masyarakat.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='data_masyarakat.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>