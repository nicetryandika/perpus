<?php ?>
<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Peminjaman Buku</h4>
                        <?php
                            include "/xampp/htdocs/perpus/admin/config/koneksi.php";

                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                $kd_buku = $_GET["kd_buku"];
                                $sql = "SELECT * FROM detail_peminjaman WHERE id_buku = '$kd_buku'";
                                $result = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_array($result);
                            }
                        ?>
                        <form class="forms-sample" action="module/peminjaman/aksi_edit_data_buku_peminjaman.php" method="post" id="">
                        <div class="form-group">
                                <label for="idPeminjaman"></label>
                                <input type="hidden" class="form-control" id="" name="idPeminjaman" value="<?php echo $data['id_peminjaman'];?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Buku">Kode Buku</label>   
                                <input type="text" class="form-control" id="" name="idBuku" value="" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Data Peminjaman</button>
                            <button type="button" class="btn btn-primary"
                            onclick="location.href='index.php?module=peminjaman';">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
