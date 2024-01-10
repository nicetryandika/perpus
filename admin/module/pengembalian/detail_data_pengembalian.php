<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";
        
        $id = $_GET['id_pengembalian'];
        $i = 1;
        $sql =
            "SELECT id_pengembalian, nama_anggota, nama_staff, tanggal, waktu, anggota.id_anggota FROM pengembalian
            INNER JOIN anggota ON anggota.id_anggota = pengembalian.id_anggota 
            INNER JOIN staff ON staff.id_staff = pengembalian.id_staff
            WHERE id_pengembalian='$id'";
        $ress = mysqli_query($conn, $sql);

        // Periksa apakah query berhasil dieksekusi
        if ($ress) {
            $data = mysqli_fetch_array($ress);
            // Mengasumsikan Anda memiliki tag HTML di sekitar kode ini
            ?>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0">Detail Pengembalian Buku</h5>
            </div>
            <div class="form-group">
                <label for="">ID Anggota</label>
                <div class="col-sm-10">
                    <p><?php echo $data['id_anggota']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label for="">Nama Anggota</label>
                <div class="col-sm-10">
                    <p><?php echo $data['nama_anggota']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label for="">Tanggal Kembali</label>
                <div class="col-sm-10">
                    <p><?php echo $data['tanggal']; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label for="">Waktu Kembali</label>
                <div class="col-sm-10">
                    <p><?php echo $data['waktu']; ?></p>
                </div>
            </div>
            <button type="button" class="btn btn-primary"
            onclick="location.href='index.php?module=pengembalian';">Kembali</button>
<?php ?>

    <!-- Tampilkan Data pengembalian Buku -->
    <!-- Ini berada di tabel detail_pengembalian -->
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="m-0">Data Pengembalian Buku</h5>
        <button type="button" class="btn btn-primary rounded-pill"
        onclick="location.href='index.php?module=tambah_data_buku_pengembalian&id_pengembalian=<?php echo $data['id_pengembalian']?>';">Tambah pengembalian Buku</button>
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
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                $sql = "SELECT kd_buku, judul_buku, penulis, penerbit FROM buku
                inner join detail_pengembalian 
                on kd_buku = id_buku
                where id_pengembalian = '$_GET[id_pengembalian]'";
                $ress = mysqli_query($conn, $sql);
                while ($detail_buku = mysqli_fetch_array($ress)) {
                    echo 
                    '<tr>
                        <td>'.$i.'</td>
                        <td>'.$detail_buku['kd_buku'].'</td>
                        <td>'.$detail_buku['judul_buku'].'</td>
                        <td>'.$detail_buku['penulis'].'</td>
                        <td>'.$detail_buku['penerbit'].'</td>
                        <td class="text-center">
                            <a href="index.php?module=edit_data_buku_pengembalian&kd_buku='.$detail_buku['kd_buku'].'" class="btn btn-primary btn btn-sm">Edit</a>
                            <a href="module/pengembalian/aksi_hapus_data_pengembalian_buku.php?id_buku='.$detail_buku['kd_buku'].'"
                            onclick="return confirm(\'Apa anda yakin ingin menghapus '.$detail_buku['judul_buku'].'?\')" class="btn btn-danger btn btn-sm">Hapus</a>
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
                <?php
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>