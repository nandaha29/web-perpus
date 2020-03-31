<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/UklMid2/siperpus/login/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

    <title>SiPERPUS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-book-reader"></i> Siperpus |Hai admin' </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="http://localhost/UklMid2/siperpus/index.php">Dashboard</a>
        <a class="nav-item nav-link" href="http://localhost/UklMid2/siperpus/buku/index.php">Buku</a>
        <a class="nav-item nav-link" href="http://localhost/UklMid2/siperpus/anggota/index.php">Anggota</a>
        <a class="nav-item nav-link" href="http://localhost/UklMid2/siperpus/transaksi/index.php">Peminjaman</a>
        <a class="nav-item nav-link" href="http://localhost/UklMid2/siperpus/login/logout.php">Logout</a>

        </div>
    </div>
</nav>


   <script src="http://localhost/UklMid2/siperpus/aset/jquery.js"></script>
   <script src="http://localhost/UklMid2/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>
   
</body>
</html>