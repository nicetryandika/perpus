<?php ?>
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Data Anggota Perpustakaan</h5>
        <button type="button" class="btn btn-primary rounded-pill"
        onclick="location.href='index.php?module=tambah_data_anggota';">Tambah Anggota</button>
      </div>
    <div class="table-responsive">
        <!-- Tabel data buku -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto Anggota</th>
                    <th class="text-center">Aksi</th>
                </tr>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                $sql = "Select * from anggota";
                $ress = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($ress)) {
                    echo 
                    '<tr>
                        <td>'.$i.'</td>
                        <td>'.$data['id_anggota'].'</td>
                        <td>'.$data['nama_anggota'].'</td>
                        <td>'.$data['username_anggota'].'</td>
                        <td>'.$data['password_anggota'].'</td>
                        <td>'.$data['jeniskelamin_anggota'].'</td>
                        <td>'.$data['foto_anggota'].'</td>
                        <td class="text-center">
                            <a href="index.php?module=edit_data_anggota&id_anggota='.$data['id_anggota'].'" class="btn btn-primary btn btn-sm">Edit</a>
                            <a href="module/anggota/aksi_hapus_data_anggota.php?id_anggota='.$data['id_anggota'].'" onclick="return confirm(\'Apa anda yakin ingin menghapus '.$data['id_anggota'].'?\')" class="btn btn-danger btn btn-sm">Hapus</a>
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