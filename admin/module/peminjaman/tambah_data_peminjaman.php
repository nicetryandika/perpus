<?php ?>
<!-- FORMULIR TAMBAH DATA BUKU -->
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Tambah Data Peminjaman</h4>
                        <form class="forms-sample" action="module/peminjaman/aksi_tambah_data_peminjaman.php" method="post" id="bukuForm">
                            <div class="form-group">
                                <label for="idAnggota">ID Anggota</label>
                                <input type="text" class="form-control" id="" name="idAnggota" placeholder="Silahkan Masukan ID Anggota">
                            </div>
                            <div class="form-group">
                                <label for="idStaff">ID Staff</label>   
                                <input type="text" class="form-control" id="" name="idStaff" placeholder="Silahkan Masukan ID Staff">
                            </div>
                            <div class="form-group">
                                <label for="tanggalPinjam">Tanggal Peminjaman</label>
                                <input type="text" class="form-control" id="" name="tanggalPinjam" placeholder="Silahkan Masukan Tanggal Peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="waktuPinjam">Waktu Peminjaman</label>
                                <input type="text" class="form-control" id="" name="waktuPinjam" placeholder="Silahkan Masukan Waktu Peminjaman">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data Peminjaman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ?>