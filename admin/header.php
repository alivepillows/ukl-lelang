<?php
session_start();
if($_SESSION['status_login']!=true){
header('location: perpus_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="#">EZY</a>
<button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="home.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="barang.php">Barang</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="data_barang.php">Data Barang</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="lelang.php">Data Lelang</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="data_masyarakat.php">Data Masyarakat</a>
</li>
<li class="nav-item">
<a class="nav-link" aria-current="page"
href="logout.php">Logout</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="container bg-light rounded" style="margin-top:10px">