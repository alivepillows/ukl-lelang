]


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data barang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            
</head>
<body>
    <?php
    include"header.php"
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1><DATAg></DATAg> BARANG</h1>
                <form method="POST" action="data_barang.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search by id barang and harga" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID barang</th>
                    <th scope="col">NAMA barang</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_barang = mysqli_query($conn, "select * from barang  where id_barang = '$cari' or nama_barang like '%$cari%' or harga_awal like '%$cari%'");
                    }
                    else{
                        $query_barang = mysqli_query($conn, "select * from barang");
                    }
                    while($data_barang = mysqli_fetch_array($query_barang)){

                ?>
                    <tr>
                        <td><?=$data_barang['id_barang']?></td>
                        <td><?=$data_barang['nama_barang']?></td>
                        <td><?=$data_barang['tanggal_awal']?></td>
                        <td><?=$data_barang['harga_awal']?></td>
                        <td>
                            <a href="ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">Edit</a>
                            <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_barang.php" type="button" class="btn btn-primary">Tambah barang</a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>

