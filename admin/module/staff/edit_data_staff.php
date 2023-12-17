<?php ?>

<!-- FORMULIR TAMBAH DATA staff -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data staff</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                        if (isset($_GET['id_staff'])){
                            $id = $_GET['id_staff'];
                        };
                            $sql = "SELECT * FROM staff where id_staff='$id'";
                            $ress = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_array($ress);
                        ?>
                        <form class="forms-sample" action="module/staff/aksi_edit_data_staff.php" method="post" id="staffForm">
                            <div class="form-group">
                                <label for="idStaff">ID Staff</label>
                                <input type="text" value="<?php echo $data['id_staff']; ?>" class="form-control" id="" name="idStaff" placeholder="Silahkan Masukan ID staff">
                            </div>
                            <div class="form-group">
                                <label for="namaStaff">Nama staff</label>
                                <input type="text" value="<?php echo $data['nama_staff']; ?>" class="form-control" id="namaStaff" name="namaStaff" placeholder="Silahkan Masukan Nama Staff">
                            </div>
                            <div class="form-group">
                                <label for="usernameStaff">Username Staff</label>
                                <input type="text" value="<?php echo $data['username_staff']; ?>" class="form-control" id="usernameStaff" name="usernameStaff" placeholder="Silahkan Masukan Username Staff">
                            </div>
                            <div class="form-group">
                                <label for="passwordStaff">Password Staff</label>
                                <input type="text" value="<?php echo $data['password_staff']; ?> "class="form-control" id="passwordStaff" name="passwordStaff" placeholder="Silahkan Masukan Password Staff">
                            </div>
                            <div class="form-group">
                                <label for="jeniskelaminStaff">Jenis Kelamin Staff</label>
                                <input type="text" value="<?php echo $data['jeniskelamin_staff']; ?>" class="form-control" id="jeniskelaminStaff" name="jeniskelaminStaff" placeholder="Silahkan Masukan Jenis Kelamin Staff">
                            </div>
                            <div class="form-group">
                                <label for="fotoStaff">Foto Staff</label>
                                <input type="text" value="<?php echo $data['foto_staff']; ?>" class="form-control" id="fotoStaff" name="fotoStaff" placeholder="Silahkan Masukan Foto Staff">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Data staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>