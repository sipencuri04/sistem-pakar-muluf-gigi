<div class="container">
    <div class="card">
        <div class="card-header text-center"><h4>Input Data Gejala</h4></div>
        <div class="card-body">
            <a href="<?php echo base_url().'admin/gejala'?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
            <br/>
            <br/>
            <form method="post" action="<?php echo base_url().'admin/penyakit_tambah_aksi'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="kode_penyakit">Kode Penyakit</label>
                    <input type="text" class="form-control" name="kode_penyakit" placeholder="Masukkan kode Penyakit" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="nama_penyakit">Nama Penyakit</label>
                    <input type="text" class="form-control" name="nama_penyakit" placeholder="Masukkan nama gejala" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="obat">obat</label>
                    <input type="text" class="form-control" name="obat" placeholder="Masukkan Obat gejala" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="soulsi">soulsi</label>
                    <input type="text" class="form-control" name="soulsi" placeholder="Masukkan Solusi gejala" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
