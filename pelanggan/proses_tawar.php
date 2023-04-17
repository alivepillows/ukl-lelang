<?php
    session_start();
    include "koneksi.php";
    $id_barang = $_POST['id_barang'];
    // echo $id_barang;
    $harga_tawar = $_POST['harga_tawar'] ;
    
    $harga = $_POST['harga_awal'];
    $tgl_lelang = $_POST['tgl_lelang'];

        if ($harga_tawar <= $harga) {
            echo "<script>alert('Tawaran anda dibawah harga lelang');location.href='lelang.php?id_barang=$id_barang'</script>";
        }else {
            $qry = mysqli_query($conn,"select * from history_lelang where id_masyarakat = '".$_SESSION['id_masyarakat']."' and id_barang = '".$id_barang."' ");
            if(mysqli_num_rows($qry) > 0){
                mysqli_query($conn,"UPDATE history_lelang SET harga = '".$harga_tawar."', WHERE id_masyarakat = '".$_SESSION['id_masyarakat']."'");

                $query_lelang = mysqli_query($conn, "INSERT INTO lelang (id_barang, tgl_lelang, harga_akhir, id_masyarakat)
                VALUES ('".$id_barang."', '".$tgl_lelang."', '".$harga_tawar."', '".$_SESSION['id_masyarakat']."' )");
                mysqli_query($conn,"UPDATE barang SET harga_awal = '".$harga_tawar."', id_pemenang = '".$_SESSION['id_masyarakat']."' WHERE id_barang = '".$id_barang."'");
                
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='lelang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='lelang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($conn);
                }
            }else {       

                $query_history_lelang = mysqli_query($conn, "INSERT INTO history_lelang (id_barang, id_masyarakat, harga, tgl_lelang)
                VALUES ('".$id_barang."', '".$_SESSION['id_masyarakat']."', '".$harga_tawar."', '".$tgl_lelang."' )");

                $query_lelang = mysqli_query($conn, "INSERT INTO lelang (id_barang, tgl_lelang, harga_akhir, id_masyarakat)
                VALUES ('".$id_barang."', '".$tgl_lelang."', '".$harga_tawar."', '".$_SESSION['id_masyarakat']."' )");

                mysqli_query($conn,"UPDATE barang SET harga_awal = '".$harga_tawar."', id_pemenang = '".$_SESSION['id_masyarakat']."' WHERE id_barang = '".$id_barang."'");

        
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='lelang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='lelang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($conn);
                }

            }    
        }
?>