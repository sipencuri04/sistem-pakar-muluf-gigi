<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data obat</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'admin/obat_tambah'; ?>" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah Gejala
            </a>
            <br/><br/>
            <form method="post" action="<?php echo base_url() . 'admin/proses_pilih_gejala'; ?>">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="1">NO</th>
                        <th>kode_obat</th>
                        <th>nama_obat</th>
                         
                        <th>Pilih</th> <!-- Menambahkan kolom "Pilih" -->
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($obat as $g) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $g->kode_obat; ?></td>
                            <td><?php echo $g->nama_obat; ?></td>
                             
                            
                            <td>
                                <a href="<?php echo base_url() . 'admin/obat_edit/' . $g->kode_obat; ?>" class="btn btn-warning">
                                    <i class="fa fa-wrench"></i> Edit
                                </a>
                                <a href="<?php echo base_url() . 'admin/obat_hapus/' . $g->kode_obat; ?>" class="btn btn-danger">
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
