<?php

include '../koneksi.php';
include '../aset/header.php';
include 'fungsi-transaksi.php';

$id_pinjam = $_GET['id_pinjam'];

$sql = "SELECT * FROM detail_pinjam  
        INNER JOIN buku ON detail_pinjam.id_buku = buku.id_buku 
        INNER JOIN peminjaman ON detail_pinjam.id_pinjam = peminjaman.id_pinjam 
        WHERE peminjaman.id_pinjam = '$id_pinjam' ";

$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Peminjaman</h2>
            <hr class="bg-light">
            <table class="table table-bordered">
                <tr>
                    <td><strong>Judul</strong></td>
                    <td><?= $detail['judul'] ?></td>
                </tr>
                <tr>
                    <td><strong>Tanggal Pinjam</strong></td>
                    <td><?= date('d F Y', strtotime($detail['tgl_pinjam'])) ?></td>
                </tr>
                <tr>
                    <td><strong>Tanggal Jatuh Tempo</strong></td>
                    <td><?= date('d FY', strtotime($detail['tgl_jatuh_tempo'])) ?></td>
                </tr>
                <tr>
                    <td><strong>Tanggal Kembali</strong></td>
                    <td>
                        <?php
                        if ($detail['tgl_kembali'] == NULL)
                            echo '-';
                        else
                            echo date('d F Y', strtotime($detail['tgl_kembali']));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Status</strong></td>
                    <td><?= $detail['status'] ?></td>
                </tr>

                <?php  
                $denda = hitungDenda($kon, $id_pinjam, $detail['tgl_kembali']);

                if ($denda > 0 ) { 
                ?>
                    <tr>
                        <td class="table-danger" colspan="2">
                            <strong>Denda yang harus dibayar: </strong>Rp <?= $detail['denda'] ?>
                        </td>
                    </tr>

                <?php
                }

                // echo $detail['id_buku'];
                // echo $detail['id_pinjam'];
                ?>

                <tr>
                    <td class="text-right" colspan="2">
                    <a class="btn btn-primary" href="form-kembali.php?id_pinjam=<?= $detail['id_pinjam'] ?>&id_buku=<?= $detail['id_buku'] ?>" class="badge badge-success">Kembalikan</a>
            
                    <a href="index.php" class="btn btn-success"><i class="fa fa-angle-double-left"></i> Kembali </a>
                 

                </tr>
            </table>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>


