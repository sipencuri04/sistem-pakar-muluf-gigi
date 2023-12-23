<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data solusi</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'admin/solusi_tambah'; ?>" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah solusi
            </a>
            <br/><br/>
            <form method="post" action="<?php echo base_url() . 'admin/proses_pilih_solusi'; ?>">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="1">NO</th>
                        <th>Kode solusi</th>
                        <th>Nama solusi</th>
                     
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($solusi as $g) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $g->kode_solusi; ?></td>
                            <td><?php echo $g->nama_solusi; ?></td>
                            
                            
                            <td>
                                <a href="<?php echo base_url() . 'admin/solusi_edit/' . $g->kode_solusi; ?>" class="btn btn-warning">
                                    <i class="fa fa-wrench"></i> Edit
                                </a>
                                <a href="<?php echo base_url() . 'admin/solusi_hapus/' . $g->kode_solusi; ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Hapus
                                </a>
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
