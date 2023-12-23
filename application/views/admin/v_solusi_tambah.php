<div class="container">
    <div class="card">
        <div class="card-header text-center"><h4>Input Data solusi</h4></div>
        <div class="card-body">
            <a href="<?php echo base_url().'admin/solusi'?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
            <br/>
            <br/>
            <form method="post" action="<?php echo base_url().'admin/solusi_tambah_aksi'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="kode_solusi">kode_solusi</label>
                    <input type="text" class="form-control" name="kode_solusi" placeholder="Masukkan kode solusi" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="nama_solusi">Nama solusi</label>
                    <input type="text" class="form-control" name="nama_solusi" placeholder="Masukkan nama solusi" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="kode_penyakit">kode_penyakit</label>
                    <input type="text" class="form-control" name="kode_penyakit" placeholder="Masukkan nama solusi" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
