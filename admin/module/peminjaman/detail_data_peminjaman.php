<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

$id = $_GET['id_peminjaman'];
$i = 1;
$sql =
    "SELECT id_peminjaman, nama_anggota, nama_staff, tanggal, waktu, anggota.id_anggota
    FROM peminjaman
    INNER JOIN anggota ON anggota.id_anggota = peminjaman.id_anggota 
    INNER JOIN staff ON staff.id_staff = peminjaman.id_staff
    WHERE id_peminjaman='$id'";
$ress = mysqli_query($conn, $sql);

// Periksa apakah query berhasil dieksekusi
if ($ress) {
    $data = mysqli_fetch_array($ress);

    // Mengasumsikan Anda memiliki tag HTML di sekitar kode ini
    ?>
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
        <label for="">Tanggal</label>
        <div class="col-sm-10">
            <p><?php echo $data['tanggal']; ?></p>
        </div>
    </div>
    <div class="form-group">
        <label for="">Waktu</label>
        <div class="col-sm-10">
            <p><?php echo $data['waktu']; ?></p>
        </div>
    </div>
    <button type="button" class="btn btn-primary"
    onclick="location.href='index.php?module=peminjaman';">Kembali</button>
    <?php
} else {
    echo "Error: " . mysqli_error($conn);
}
?>