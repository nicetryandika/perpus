<?php ?>
<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Detail Peminjaman Buku</h4>
                        <?php
                        include "/xampp/htdocs/perpus/admin/config/koneksi.php";
                        if (isset($_GET['kd_buku'])){
                            $id = $_GET['kd_buku'];
                        };
                        $i = 1;
                        $sql =
                        //querybox join 3 tabel
                        "SELECT nama_anggota, nama_staff, tanggal, waktu FROM peminjaman
                        INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
                        INNER JOIN staff ON peminjaman.id_staff = staff.id_staff;";
                        $ress = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($ress))
                        ?>
                            <div class="form-group">
                                <label for="idDetailPeminjaman">ID Detail Peminjaman Buku</label>
                                <input type="text" class="form-control" id="" name="idDetail" placeholder="Silahkan Masukan ID Detail">
                            </div>
                            <div class="form-group">
                                <label for="idPeminjaman">ID Peminjaman</label>
                                <input type="text" class="form-control" id="judul_buku" name="idPinjam" placeholder="Silahkan Masukan ID Peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="idBuku">ID Buku</label>
                                <input type="text" class="form-control" id="penulis" name="idBuku" placeholder="Silahkan Masukan ID Buku">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data Buku</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>