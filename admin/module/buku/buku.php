<?php ?>
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Data Buku Perpustakaan</h5>
        <button type="button" class="btn btn-primary rounded-pill"
        onclick="location.href='index.php?module=tambah_data_buku';">Tambah Buku</button>
      </div>
    <div class="table-responsive">
        <!-- Tabel data buku -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Stok</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                $sql = "Select * from buku";
                $ress = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($ress)) {
                    echo 
                    '<tr>
                        <td>'.$i.'</td>
                        <td>'.$data['kd_buku'].'</td>
                        <td>'.$data['judul_buku'].'</td>
                        <td>'.$data['penulis'].'</td>
                        <td>'.$data['penerbit'].'</td>
                        <td>'.$data['stok'].'</td>
                        <td class="text-center">
                            <a href="index.php?module=edit_data_buku&kd_buku='.$data['kd_buku'].'" class="btn btn-primary btn btn-sm">Edit</a>
                            <a href="module/buku/aksi_hapus_data_buku.php?kd_buku='.$data['kd_buku'].'" onclick="return confirm(\'Apa anda yakin ingin menghapus '.$data['judul_buku'].'?\')" class="btn btn-danger btn btn-sm">Hapus</a>
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