<?php
if ($_GET['id_lelang']) {
    include "koneksi.php";
    global $conn;
    $id = $_GET['id_lelang'];
    $cek = mysqli_query($conn, "SELECT * FROM lelang WHERE lelang = '".$id."'");
    $data = mysqli_fetch_array($cek);
    if ($data['status'] == "mengikuti") {
        $newstatus = 'menang';
    } elseif ($data['status'] == "menang") {
        $newstatus = 'selamat menang';
    } else {
        echo "<script>alert('selesai');</script>";
    }

    $acc= mysqli_query ($conn, "UPDATE lelang set status='".$newstatus."' where id_lelang = '".$id."'") or die (mysqli_error($conn));

    if ($acc) {
        echo "<script>alert('Pengiriman Produk Berhasil');location.href='lelang.php';</script>";
    }
    else{
        echo "<script>alert('Pengiriman Produk Gagal');location.href='lelang.php';</script>";
    }
}
?>