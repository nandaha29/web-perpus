<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-bukutambah.php">
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul buku">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang Buku</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang ">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan kelas">
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover Buku</label>   
                            <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan kelas">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Buku</label>
                            <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan kelas">
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">Kategori</label>
                            <select name="id_kategori" class="form-control" name="id_kategori" id="id_kategori" placeholder="Masukkan kelas">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
