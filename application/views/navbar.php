<nav class="navbar navbar-expand-lg navbar-light fixed-top  navbar-fixed-top shadow border-top border-<?php echo $site_theme; ?>">

    <div class="container">

        <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo base_url('assets/images/FU.png'); ?>" width="50px" height="50px" class="img-circle" alt="Fhizyel University"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="page-scroll nav-link ml-2" href="#prodi">Program studi</a>
                </li>
                <li class="nav-item">
                    <a class="page-scroll nav-link ml-1" href="#alur">Cara Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="page-scroll nav-link ml-1" href="#daftar">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="page-scroll nav-link ml-1" href="#contact">Informasi</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown mr-3 mt-3">
                    <a href="javascript:void(0)" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-bullhorn"></i>Pengumuman Camaba<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($prodi as $data_pro) : ?>
                            <li><a class="dropdown-item" href="<?= base_url('home/pengumuman_maba/' . $data_pro->kode_prodi . '') ?>" target="_blank"><?= $data_pro->jenjang ?> <?= $data_pro->nama_prodi ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="nav-item mt-3"><a class="btn btn-<?php echo $site_theme; ?> btn-sm" href="<?php echo base_url('administrator') ?>"><i class="fa fa-user"></i> Masuk Admin</a></li>
            </ul>
        </div>
    </div>
</nav>