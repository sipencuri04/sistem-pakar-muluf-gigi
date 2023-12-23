<div class="container">
    <div class="card">
        <div class="card header text-center"><h4>Edit Pasien</h4></div>
        <div class="card-body">
            <a href="<?php echo base_url().'admin/petugas' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i>Kembali</a>
            <br/><br/>
            <?php foreach($petugas as $p)
            { ?>
            <form method="post" action="<?php echo base_url().'admin/petugas_update'; ?>">
            <div class="form-group">
                <label  class="font-weight-bold" for="nama">Nomor Induk Kepegawaian</label>
                <input type="hidden" value="<?php echo $p->id; ?>" name="id">
                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" required="required" value="<?php echo $p->NIK; ?>">
            </div>
            <div class="form-group">
                <label  class="font-weight-bold" for="nama">Nama Pasien</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required="required" value="<?php echo $p->M_biodata_pegawai_nama; ?>">
            </div>
            <div class="form-group">
                <label  class="font-weight-bold" for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan username" required="required" value="<?php echo $p->username; ?>">
            </div>
            <div class="form-group">
                <label  class="font-weight-bold" for="password">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Masukkan password" required="required" value="<?php echo $p->password; ?>">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password. </small>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
        </div>
    </div>