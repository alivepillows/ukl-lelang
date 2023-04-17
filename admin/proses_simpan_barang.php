<?php
    $nama_barang = $_POST["nama_barang"];
    // $bid = $_POST["bid"];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga_awal'];
    $harga_akhir=0;
    
    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = $_FILES['foto']['name'];
    $folder = "./foto";
    
    include "koneksi.php";

    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')){
        move_uploaded_file($temp, $folder . $name);
        $lama_buka = 7;
        $tgl_harus_tutup = date('Y-m-d', mktime(0,0,0,date('m'),date('d')+$lama_buka,date('Y')));

        $input = mysqli_query($conn, "INSERT INTO barang 
        (nama_barang, harga_awal, harga_akhir,deskripsi, tanggal_awal, tanggal_akhir, foto) VALUES 
        ('".$nama_barang."', '".$harga."','".$harga_akhir."','".$deskripsi."', '".date('Y-m-d')."', '".$tgl_harus_tutup."','".$name."')");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='barang.php';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='tambah_barang.php';</script>";
        }
    }
?>