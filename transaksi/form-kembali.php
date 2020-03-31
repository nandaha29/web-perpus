<?php

include '../aset/header.php';
include '../koneksi.php';
include 'fungsi-transaksi.php';


$id_pinjam = $_GET['id_pinjam'];
$id_buku = $_GET['id_buku'];

$sql = "SELECT judul FROM buku WHERE id_buku = $id_buku";
echo  $_GET['id_pinjam'];
$res = mysqli_query($kon,$sql);
$data = mysqli_fetch_assoc($res);

$kembali = ambilPeminjamanBuku($kon, $id_pinjam);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Pengembalian</h5>
                <div class="card-body">
                <form method="post" action="proses-kembali.php">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input class="form-control" type="text" disabled value="<?php $kembali['judul']?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali">
                    </div>
                    <input type="hidden" name="id_pinjam" value="<?php $id_pinjam?>">
                    <input type="hidden" name="id_buku" value="<?php $id_buku?>">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>