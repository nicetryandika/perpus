<?php ?>
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Data Staff Perpustakaan</h5>
        <button type="button" class="btn btn-primary rounded-pill"
        onclick="location.href='index.php?module=tambah_data_staff';">Tambah Staff</button>
      </div>
    <div class="table-responsive">
        <!-- Tabel data buku -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Staff</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto Staff</th>
                    <th class="text-center">Aksi</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                $sql = "Select * from staff";
                $ress = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($ress)) {
                    echo 
                    '<tr>
                        <td>'.$i.'</td>
                        <td>'.$data['id_staff'].'</td>
                        <td>'.$data['nama_staff'].'</td>
                        <td>'.$data['username_staff'].'</td>
                        <td>'.$data['password_staff'].'</td>
                        <td>'.$data['jeniskelamin_staff'].'</td>
                        <td>'.$data['foto_staff'].'</td>
                        <td class="text-center">
                            <a href="index.php?module=edit_data_staff&id_staff='.$data['id_staff'].'" class="btn btn-primary btn btn-sm">Edit</a>
                            <a href="module/staff/aksi_hapus_data_staff.php?id_staff='.$data['id_staff'].'" onclick="return confirm(\'Apa anda yakin ingin menghapus '.$data['id_staff'].'?\')" class="btn btn-danger btn btn-sm">Hapus</a>
                        </td>
                    </tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php ?>