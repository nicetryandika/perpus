<?php ?>
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Data Peminjaman Buku</h5>
        <button type="button" class="btn btn-primary rounded-pill" onclick="location.href='index.php?module=tambah_data_peminjaman';">Tambah Peminjaman</button>
    </div>
    <div class="table-responsive">
        <!-- Tabel data buku -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Staff</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                $sql = "SELECT id_peminjaman, nama_anggota, nama_staff, tanggal, waktu FROM peminjaman
                        INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
                        INNER JOIN staff ON peminjaman.id_staff = staff.id_staff;";
                $ress = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($ress)) {
                    echo 
                    '<tr>
                        <td>'.$i.'</td>
                        <td>'.$data['nama_anggota'].'</td>
                        <td>'.$data['nama_staff'].'</td>
                        <td>'.$data['tanggal'].'</td>
                        <td>'.$data['waktu'].'</td>
                        <td class="text-center">
                            <a href="index.php?module=edit_data_peminjaman&id_peminjaman='.$data['id_peminjaman'].'" class="btn btn-primary btn btn-sm">Edit</a>
                            <a href="index.php?module=detail_data_peminjaman&id_peminjaman='.$data['nama_anggota'].'" class="btn btn-sm" style="background-color: green; color: white;">Detail</a>
                            <a href="module/peminjaman/aksi_hapus_data_peminjaman.php?id_peminjaman='.$data['id_peminjaman'].'" onclick="return confirm(\'Apa anda yakin ingin menghapus '.$data['nama_anggota'].'?\')" class="btn btn-danger btn btn-sm">Hapus</a>
                        </tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php ?>