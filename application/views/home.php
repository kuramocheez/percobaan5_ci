        <?php $this->load->view('template/header'); ?>
        <?php $this->load->view('template/navbar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang</h1>
                    <p class="lead">Sistem informasi penginputan data mahasiswa</p>
                    <hr class="my-4">
                    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="<?= base_url('mahasiswa/input'); ?>" role="button">Tambah Mahasiswa</a>
                    </p>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('template/footer'); ?>