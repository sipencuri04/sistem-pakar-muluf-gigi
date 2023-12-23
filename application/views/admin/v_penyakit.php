<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data penyakit</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'admin/penyakit_tambah'; ?>" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah penyakit
            </a>
            <br/><br/>
            <form method="post" action="<?php echo base_url() . 'admin/proses_pilih_penyakit'; ?>">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="1">NO</th>
                        <th>Kode penyakit</th>
                        <th>Nama penyakit</th>
                        <th>Obat</th>
                        <th>Solusi</th>
                      
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($penyakit as $g) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $g->kode_penyakit; ?></td>
                            <td><?php echo $g->nama_penyakit; ?></td>
                            <td><?php echo $g->obat; ?></td>
                            <td><?php echo $g->solusi; ?></td>
                            
                            <td>
                                <a href="<?php echo base_url() . 'admin/penyakit_edit/' . $g->kode_penyakit; ?>" class="btn btn-warning">
                                    <i class="fa fa-wrench"></i> Edit
                                </a>
                                <a href="<?php echo base_url() . 'admin/penyakit_hapus/' . $g->kode_penyakit; ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Hapus
                                </a>
                            </td>

                            <td>
                                <input type="checkbox" name="gejala_id[]" value="<?php echo $g->kode_penyakit; ?>">
                            </td>
                            
                           
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <input type="submit" class="btn btn-primary" value="Proses Pilihan">
            </form>
        </div>
    </div>
</div>
