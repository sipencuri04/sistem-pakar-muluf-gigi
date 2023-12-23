<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Gejala</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'admin/gejala_tambah'; ?>" class="btn btn-sm btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah Gejala
            </a>
            <br/><br/>
            <form method="post" action="<?php echo base_url() . 'admin/proses_pilih_gejala'; ?>">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="1">NO</th>
                        <th>Kode Gejala</th>
                        <th>Nama Gejala</th>
                        
                        <th>Pilih</th> <!-- Menambahkan kolom "Pilih" -->
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($gejala as $g) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $g->kode_gejala; ?></td>
                            <td><?php echo $g->nama_gejala; ?></td>
                        
                            
                       
                            <td>
                                <input type="checkbox" name="gejala_id[]" value="<?php echo $g->kode_gejala; ?>">
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
