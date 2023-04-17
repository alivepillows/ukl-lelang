<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang</title>


<!-- nav bootstrap -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="lelang..css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="row">
<?php
include "koneksi.php";
    $qry_data=mysqli_query($conn,"select * from barang");
    $no=0;
    while($data_barang=mysqli_fetch_array($qry_data)){
        $no++;
?>
            <div class="col-md-3">
                <div class="card">
                        <center><div class="header"><?=$data_barang['nama_barang']?></div></center>

                        <div class="card-body">
                        <img src="../foto/<?=$data_barang['foto']?>"class="card-img-top" width="150px" height="350px" alt="Image">
                        </div>

                        <div class="dates">
                            <div class="start">
                                <strong>STARTS</strong> <?=$data_barang['tanggal_awal']?>
                                <span></span>
                            </div>
                            <div class="ends">
                                <strong>ENDS</strong> <?=$data_barang['tanggal_akhir']?>
                            </div>
                        </div>

                        <div class="dates">
                                <strong>DESKRIPSI</strong> <?=$data_barang['deskripsi']?>
                                <span></span>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>HARGA AWAL</strong> <?=$data_barang['harga_awal']?>
                            </div>

                            <div>
                                <strong>PENAWARAN TERTINGGI</strong> <?=$data_barang['harga_akhir']?>
                            </div>

                            <div>
                                <strong>STATUS</strong> <?=$data_barang['status']?>
                            </div>

                        </div>

                        <div class="footer ">
                        <?php 
                                        if($data_barang['status']== 'dibuka'){
                                        ?>
                                    <form method= "POST" action="proses_status.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                                        <input type="hidden" name="status" value="ditutup">
                                        <center>
                                        <input type="submit" name="simpan" class="btn btn-danger" value="ditutup" >
                                    </center>
                                    </form>

                                    <?php
                                }else{
                                ?>
                                <center>
                                    <p>DITUTUP</p>
                                    </center>
                                <?php
                                }
                                ?>


                           <!-- <center>
                                <a href="dt_bid.php?id_barang=<?=$data_barang['id_barang']?>" class="Cbtn Cbtn-danger">IKUT LELANG</a>
                            </center>  -->
                        </div>
                    </div>
                </div> 
            
    <?php
 }
?>

</body>
</html>



