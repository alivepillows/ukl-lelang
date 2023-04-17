<?php
    if ($_GET['id_lelang']) {
        include "koneksi.php";
        
        $query_hapus = mysqli_query($conn, "DELETE FROM lelang where id_lelang = '".$_GET['id_lelang']."'");
                if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='live.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='live.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>