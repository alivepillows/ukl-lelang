<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $telp=$_POST['telp'];

    include "koneksi.php";
    global $conn;
    $insert=mysqli_query($conn,"insert into pelanggan (nama, username, telp, password) value ('".$nama."','".$username."','".$telp."','".md5($password)."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script>alert('Anda telah terdaftar');location.href='login.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Akun');location.href='daftar.php';</script>";
    }
}
?>