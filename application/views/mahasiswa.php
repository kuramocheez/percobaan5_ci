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
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-info mb-3" href="<?= base_url('mahasiswa/input'); ?>">Tambah Data</a>
                    </div>
                    <div class="col-lg-12">
                        <?php if ($this->session->flashdata('inputSuccess')) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('inputSuccess'); ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($this->session->flashdata('editSuccess')) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('editSuccess'); ?>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($this->session->flashdata('deleteSuccess')) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('deleteSuccess'); ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>


                </div>
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($mahasiswa as $mhs) {
                            ?>
                                <tr>
                                    <td><?= $no += 1; ?></td>
                                    <td><?= $mhs['nim']; ?></td>
                                    <td><?= $mhs['nama']; ?></td>
                                    <td><?= $mhs['jenis_kelamin']; ?></td>
                                    <td><?= $mhs['jurusan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('mahasiswa/edit/' . $mhs['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('mahasiswa/delete/' . $mhs['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </section>
        <!-- /.content -->
        <!-- /.content-wrapper -->
        <?php $this->load->view('template/footer'); ?>