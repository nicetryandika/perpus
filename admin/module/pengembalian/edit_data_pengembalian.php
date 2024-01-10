<?php ?>

<!-- FORMULIR TAMBAH DATA Anggota -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Pengembalian</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                            $id = $_GET['id_pengembalian'];
                            $sql = "select * from pengembalian where id_pengembalian='$id'";
                            $ress = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($ress);
                        ?>
                        <form class="forms-sample" action="module/pengembalian/aksi_edit_data_pengembalian.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="idPeminjaman">ID Pengembalian</label>
                                <input type="text" value="<?php echo $data['id_pengembalian']; ?>" class="form-control" id="" name="idPengembalian" placeholder="Silahkan Masukan ID Pengembalian">
                            </div>
                            <div class="form-group">
                                <label for="idAnggota">ID Anggota</label>
                                <input type="text" value="<?php echo $data['id_anggota']; ?>" class="form-control" id="" name="idAnggota" placeholder="Silahkan Masukan ID Anggota">
                            </div>
                            <div class="form-group">
                                <label for="idStaff">ID Staff</label>
                                <input type="text" value="<?php echo $data['id_staff']; ?>" class="form-control" id="" name="idStaff" placeholder="Silahkan Masukan Nama Staff">
                            </div>
                            <div class="form-group">
                                <label for="tanggalPinjam">Tanggal Pengembalian</label>
                                <input type="date" value="<?php echo $data['tanggal']; ?>" class="form-control" id="" name="tanggalKembali" placeholder="Silahkan Masukan Tanggal Pengembalian">
                            </div>
                            <div class="form-group">
                                <label for="waktuPinjam">Waktu Pengembalian</label>
                                <input type="time" value="<?php echo $data['waktu']; ?>" class="form-control" id="" name="waktuKembali" placeholder="Silahkan Masukan Waktu Pengembalian">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Data Pengembalian</button>
                            <button type="button" class="btn btn-primary"
                            onclick="location.href='index.php?module=pengembalian';">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>