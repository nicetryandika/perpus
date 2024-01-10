<?php ?>
<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Pengembalian</h4>
                        <form class="forms-sample" action="module/pengembalian/aksi_tambah_data_pengembalian.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="idAnggota">ID Anggota</label>
                                <input type="text" class="form-control" id="" name="idAnggota" placeholder="Silahkan Masukan ID Anggota">
                            </div>
                            <div class="form-group">
                                <label for="idStaff">ID Staff</label>   
                                <input type="text" class="form-control" id="" name="idStaff" placeholder="Silahkan Masukan ID Staff">
                            </div>
                            <div class="form-group">
                                <label for="tanggalKembali">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="" name="tanggalKembali" placeholder="Silahkan Masukan Tanggal Pengembalian">
                            </div>
                            <div class="form-group">
                                <label for="waktuKembali">Waktu Pengembalian</label>
                                <input type="time" class="form-control" id="" name="waktuKembali" placeholder="Silahkan Masukan Waktu Pengembalian">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data Pengembalian</button>
                            <button type="button" class="btn btn-primary" onclick="location.href='index.php?module=pengembalian';">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>