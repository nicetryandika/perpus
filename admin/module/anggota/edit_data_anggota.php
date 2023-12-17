<?php ?>

<!-- FORMULIR TAMBAH DATA Anggota -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data Anggota</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                        if (isset($_GET['id_anggota'])){
                            $id = $_GET['id_anggota'];
                        };
                            $sql = "SELECT * FROM anggota where id_anggota='$id'";
                            $ress = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($ress);
                        ?>
                        <form class="forms-sample" action="module/anggota/aksi_edit_data_anggota.php" method="post" id="AnggotaForm">
                            <div class="form-group">
                                <label for="idAnggota">ID Anggota</label>
                                <input type="text" value="<?php echo $data['id_anggota']; ?>" class="form-control" id="" name="idAnggota" placeholder="Silahkan Masukan ID Anggota">
                            </div>
                            <div class="form-group">
                                <label for="namaAnggota">Nama Anggota</label>
                                <input type="text" value="<?php echo $data['nama_anggota']; ?>" class="form-control" id="namaAnggota" name="namaAnggota" placeholder="Silahkan Masukan Nama Anggota">
                            </div>
                            <div class="form-group">
                                <label for="usernameAnggota">Username Anggota</label>
                                <input type="text" value="<?php echo $data['username_anggota']; ?>" class="form-control" id="usernameAnggota" name="usernameAnggota" placeholder="Silahkan Masukan Username Anggota">
                            </div>
                            <div class="form-group">
                                <label for="passwordAnggota">Password Anggota</label>
                                <input type="text" value="<?php echo $data['password_anggota']; ?> "class="form-control" id="passwordAnggota" name="passwordAnggota" placeholder="Silahkan Masukan Password Anggota">
                            </div>
                            <div class="form-group">
                                <label for="jeniskelaminAnggota">Jenis Kelamin Anggota</label>
                                <input type="text" value="<?php echo $data['jeniskelamin_anggota']; ?>" class="form-control" id="jeniskelaminAnggota" name="jeniskelaminAnggota" placeholder="Silahkan Masukan Jenis Kelamin Anggota">
                            </div>
                            <div class="form-group">
                                <label for="fotoAnggota">Foto Anggota</label>
                                <input type="text" value="<?php echo $data['foto_anggota']; ?>" class="form-control" id="fotoAnggota" name="fotoAnggota" placeholder="Silahkan Masukan Foto Anggota">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Data Anggota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>