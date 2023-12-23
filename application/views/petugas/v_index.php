<div class="container">
    <div class="jumbotron text-center">
        <div class="col-sm-8 mx-auto">
            <h1>SISTEM PAKAR DIAGNOSA PENYAKIT GIGI DAN MULUT</h1>
            <p>Selamat Datang di Sistem Pakar Diagnosa Penyakit Gigi dan Mulut. <b>Semoga Anda Terbantu.</b></p>
            <p>Anda telah login sebagai <b><?php echo $this->session->userdata('nama'); ?></b> [petugas]</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h1><?php echo $this->M_data->get_data('obat')->num_rows(); ?>
                        <div class="pull-right"><i class="fa fa-users"></i></div>
                    </h1>
                    Jumlah Obat
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h1><?php echo $this->M_data->get_data('gejala')->num_rows(); ?>
                        <div class="pull-right"><i class="fa fa-book"></i></div>
                    </h1>
                    Jumlah Gejala
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h1><?php echo $this->M_data->get_data('solusi')->num_rows(); ?>
                        <div class="pull-right"><i class="fa fa-user"></i></div>
                    </h1>
                    Jumlah Solusi
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h1><?php echo $this->M_data->get_data('penyakit')->num_rows(); ?>
                        <div class="pull-right"><i class="fa fa-book"></i></div>
                    </h1>
                    Jumlah Jenis Penyakit
                </div>
            </div>
        </div>
    </div>
</div>
