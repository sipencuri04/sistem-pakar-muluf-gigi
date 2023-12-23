<div class="container">
    <div class="card">
        <div class="card-header text-center"><h4>Input Data Gejala</h4></div>
        <div class="card-body">
            <a href="<?php echo base_url().'admin/gejala'?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
            <br/>
            <br/>
            <form method="post" action="<?php echo base_url().'gejala/gejala_edit'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="kode_gejala">Kode Gejala</label>
                    <input type="text" class="form-control" name="kode_gejala" placeholder="Masukkan kode gejala" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="nama_gejala">Nama Gejala</label>
                    <input type="text" class="form-control" name="nama_gejala" placeholder="Masukkan nama gejala" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="MB">MB</label>
                    <input type="text" class="form-control" name="MB" placeholder="Masukkan MB" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="MD">MD</label>
                    <input type="text" class="form-control" name="MD" placeholder="Masukkan MD" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
