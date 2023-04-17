<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_cek=mysqli_query($conn, "select * from pelanggan where username ='".$username."' and password='".MD5($password)."'");
            if(mysqli_num_rows($qry_cek)>0){
                session_start();
                $dt_login=mysqli_fetch_array($qry_cek);
                $_SESSION['id_pelanggan']=$dt_login['id_pelanggan'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;
                header('location: home.php');
            }else{
                echo "<script>alert('username dan password salah');location.href='login.php';</script>";
            }
        }
}else{
echo 'salah buka';
}
?>