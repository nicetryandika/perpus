<?php ?>

<!-- FORMULIR TAMBAH DATA Anggota -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Peminjaman</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                        // if (isset($_GET['id_anggota'])){
                        //     // $id = $_GET['nama_anggota']; ///workkkkk ditinggal ngelamun bisa wkwkk
                        // };
                            // $id = $_GET['id_peminjaman'];
                            // $sql = "SELECT * FROM peminjaman where id_peminjaman='$id'"; //anjir ditinggal bisa
                            // $ress = mysqli_query($conn, $sql);
                            // $data = mysqli_fetch_array($ress);
                            $id = $_GET['id_peminjaman'];
                            $sql = "select * from peminjaman where id_peminjaman='$id'";
                            $ress = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($ress);
                        ?>
                        <form class="forms-sample" action="module/peminjaman/aksi_edit_data_peminjaman.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="idPeminjaman">ID Peminjaman</label>
                                <input type="text" value="<?php echo $data['id_peminjaman']; ?>" class="form-control" id="" name="idPeminjaman" placeholder="Silahkan Masukan ID Peminjaman">
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
                                <label for="tanggalPinjam">Tanggal Peminjaman</label>
                                <input type="text" value="<?php echo $data['tanggal']; ?>" class="form-control" id="" name="tanggalPinjam" placeholder="Silahkan Masukan Tanggal Peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="waktuPinjam">Waktu Peminjaman</label>
                                <input type="text" value="<?php echo $data['waktu']; ?>" class="form-control" id="" name="waktuPinjam" placeholder="Silahkan Masukan Waktu Peminjaman">
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
<?php ?>