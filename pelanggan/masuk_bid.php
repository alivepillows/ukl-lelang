<?php
    session_start();
    include "koneksi.php";
    $qry_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_detail_barang);

    $penawaran=$_POST['penawaran'];
    $harga_akhir = $dt_barang['harga_akhir'];
    // $hasil=$harga_akhir+$penawaran;
    $nama_barang = $dt_barang["nama_barang"];
    // $bid = $dt_barang["bid"];
    $deskripsi = $dt_barang['deskripsi'];
    $harga = $dt_barang["harga_awal"];

    if ($penawaran > $harga) {
        if ($penawaran > $harga_akhir) {
        $query_harting = mysqli_query($conn, "update barang set
        nama_barang= '".$nama_barang."', 
        deskripsi='".$deskripsi."', harga_awal='".$harga."', harga_akhir='".$penawaran."'
        where id_barang='".$_GET['id_barang']."'");

            $query_beli = mysqli_query($conn, "INSERT INTO lelang (id_pelanggan, id_barang, id_petugas, tgl_lelang)
            VALUES ('".$_SESSION['id_pelanggan']."','".$_GET['id_barang']."', '2','".date('Y-m-d')."')");

            if ($query_harting) {

                if ($query_beli) {
                    $id = mysqli_insert_id($conn);
                        mysqli_query($conn, "INSERT INTO history (id_lelang, id_barang, id_pelanggan, penawaran_harga)
                        VALUES ('".$id."', '".$_GET['id_barang']."','".$_SESSION['id_pelanggan']."','".$penawaran."')");
                    echo "<script>alert('Selamat anda penawar tertinggi');location.href='history.php'</script>";
                }
                else{
                    echo "<script>alert('Gagal tertinggi');location.href='barang.php'</script>";
                }
            }
            else{
                echo "<script>alert('Gagal lelang');location.href='barang.php'</script>";
            }
        }else{
            echo "<script>alert('penawaran harus lebih dari harga tertinggi');location.href='barang.php'</script>";
        }
    }else{
        echo "<script>alert('penawaran harus lebih dari harga buka lelang');location.href='barang.php'</script>";
        // $query_beli = mysqli_query($conn, "INSERT INTO tb_lelang (id_user, id_barang, id_petugas, tgl_lelang)
        //     VALUES ('".$_SESSION['id_user']."','".$_GET['id_barang']."', '2','".date('Y-m-d')."')");

        //     if ($query_beli) {
        //         $id = mysqli_insert_id($conn);
        //             mysqli_query($conn, "INSERT INTO history_lelang (id_lelang, id_barang, id_user, penawaran_harga)
        //             VALUES ('".$id."', '".$_GET['id_barang']."','".$_SESSION['id_user']."','".$penawaran."')");
        //         echo "<script>alert('Selamat anda penawararan berhasil');location.href='lelang.php'</script>";
        //     }
        //     else{
        //         echo "<script>alert('Gagal nawar');location.href='lelang.php'</script>";
        //     }
    }
?>


