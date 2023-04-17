<?php
include "header.php";
?>
<div class="container">
    <div class="card">
        <h1 class="card-header">
            <div class="card-body">
                <form method="POST"action="proses_simpan_barang.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label"><h5>Nama barang</h5></label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukan barang"required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_awal" class="form-label"><h5>harga_awal</h5></label>
                        <input type="text" class="form-control" name="harga_awal" placeholder="Masukan harga_awal"required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label"><h5>deskripsi</h5></label>
                        <input type="textarea" class="form-control" name="deskripsi" placeholder="Masukan deskripsi"required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_awal" class="form-label"><h5>tanggal_awal</h5></label>
                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Masukan tanggal_awal"required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label"><h5>foto</h5></label>
                        <input type="file" class="form-control" name="foto" placeholder="Masukan foto"required>
                    </div>
                    <input type="submit" name="simpan"class="btn btn-primary" value="SIMPAN">
                </form>
            </div>
        </h1>
    </div>
</div>