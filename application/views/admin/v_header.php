<!DOCTYPE html>
<html>
    <head>
        <title>Admin - SISTEM PAKAR PENYAKIT GIGI DAN MULUT</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/awesome/css/font-awesome.css' ?>">
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js' ?>"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">SIPAGIMU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin'; ?>"><i class="fa fa-home"></i>&nbsp; Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/obat'; ?>"><i class="fa fa-users"></i>&nbsp; Obat</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/gejala'; ?>"><i class="fa fa-book"></i>&nbsp; Gejala</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/penyakit'; ?>"><i class="fa fa-user"></i>&nbsp; Penyakit</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/solusi'; ?>"><i class="fa fa-book"></i>&nbsp; Solusi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/petugas_tambah'; ?>"><i class="fa fa-book"></i>&nbsp; Pasien</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/ganti_password'; ?>"><i class="fa fa-lock"></i>&nbsp; Ganti Password</a></li>
            </ul>
            <span class="navbar-text mr-3 text-center">Halo, <?php echo $this->session->userdata('username'); ?>[admin]</span>
            <a href="<?php echo base_url().'admin/logout' ?>" class="btn btn-outline-light ml-1"><i class="fa fa-power-off"></i>&nbsp; Keluar</a>
        </div>
    </div>
</nav>
        <br>
        <br>
    </body>
</html>