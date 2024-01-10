<?php ?>

<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Buku</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                        if (isset($_GET['kd_buku'])){
                            $id = $_GET['kd_buku'];
                        };
                            $sql = "SELECT * FROM buku where kd_buku='$id'";
                            $ress = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($ress);
                        ?>
                        <form class="forms-sample" action="module/buku/aksi_edit_data_buku.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="kodeBuku">Kode Buku</label>
                                <input type="text" value="<?php echo $data['kd_buku']; ?>" class="form-control" id="" name="kodeBuku" placeholder="Silahkan Masukan Kode Buku">
                            </div>
                            <div class="form-group">
                                <label for="judulBuku">Judul Buku</label>
                                <input type="text" value="<?php echo $data['judul_buku']; ?>" class="form-control" id="judul_buku" name="judulBuku" placeholder="Silahkan Masukan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="penulisBuku">Penulis</label>
                                <input type="text" value="<?php echo $data['penulis']; ?>" class="form-control" id="penulis" name="penulisBuku" placeholder="Silahkan Masukan Penulis Buku">
                            </div>
                            <div class="form-group">
                                <label for="penerbitBuku">Penerbit</label>
                                <input type="text" value="<?php echo $data['penerbit']; ?> "class="form-control" id="penerbit" name="penerbitBuku" placeholder="Silahkan Masukan Penerbit Buku">
                            </div>
                            <div class="form-group">
                                <label for="stokBuku">Stok</label>
                                <input type="text" value="<?php echo $data['stok']; ?>" class="form-control" id="stok" name="stokBuku" placeholder="Silahkan Masukan Stok Buku">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Data Buku</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>