        <?php $this->load->view('template/header'); ?>
        <?php $this->load->view('template/navbar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
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

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (validation_errors()) {
                        ?>
                            <div class="alert alert-danger">
                                <?= validation_errors() ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?= form_open('mahasiswa/edit/'.$mahasiswa['id']); ?>
                        <div class="form-group mt-2">
                            <label>Nim</label>
                            <input type="text" name="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="<?= $mahasiswa['jenis_kelamin']; ?>"><?= $mahasiswa['jenis_kelamin']; ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" value="<?= $mahasiswa['jurusan']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                        </div>
                        <?php form_close(); ?>
                    </div>
                </div>
        </div>
        </section>
        <!-- /.content -->
        <!-- /.content-wrapper -->
        <?php $this->load->view('template/footer'); ?>