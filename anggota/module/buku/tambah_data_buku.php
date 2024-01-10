<?php ?>
<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Buku</h4>
                        <form class="forms-sample" action="module/buku/aksi_tambah_data_buku.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="kodeBuku">Kode Buku</label>
                                <input type="text" class="form-control" id="" name="kodeBuku" placeholder="Silahkan Masukan Kode Buku">
                            </div>
                            <div class="form-group">
                                <label for="judulBuku">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judulBuku" placeholder="Silahkan Masukan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="penulisBuku">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulisBuku" placeholder="Silahkan Masukan Penulis Buku">
                            </div>
                            <div class="form-group">
                                <label for="penerbitBuku">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbitBuku" placeholder="Silahkan Masukan Penerbit Buku">
                            </div>
                            <div class="form-group">
                                <label for="stokBuku">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stokBuku" placeholder="Silahkan Masukan Stok Buku">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data Buku</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>