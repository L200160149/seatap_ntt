<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Donasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/donasi">Donasi</a></li>
                        <li class="breadcrumb-item active">Ubah Data Donasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-8">
                <!-- Default box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Data Donatur</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/donasi/update/<?= $donasi['id_donasi'] ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="buktiLama" value="<?= $donasi['bukti_transfer']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="donatur">Nama Donatur</label>
                                    <input type="text" name="nama" value="<?= (old('nama')) ? old('nama') : $donasi['nama']; ?>" autofocus class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="donatur" placeholder="Masukkan Nama Donatur">
                                    <span class="error invalid-feedback"><?= $validation->getError('nama'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="donasi">Nominal Donasi</label>
                                    <input type="text" name="donasi" value="<?= (old('donasi')) ? old('donasi') : $donasi['donasi']; ?>" class="form-control <?= ($validation->hasError('donasi')) ? 'is-invalid' : ''; ?>" id="donasi" placeholder="Masukkan Nominal Donasi">
                                    <span class="error invalid-feedback"><?= $validation->getError('donasi'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="pembayaran">Pembayaran</label>
                                    <select name="pembayaran" id="pembayaran" class="form-control">
                                        <option value="">-- Pilih Pembayaran --</option>
                                        <option value="LinkAja - 085776536282 a.n Cahaya Dwi Dzullia" <?= $donasi['pembayaran'] == 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia' ? 'selected' : ''; ?>>LinkAja - 085776536282 a.n Cahaya Dwi Dzullia</option>
                                        <option value="Gopay - 085776536282 a.n Cahaya Dwi Dzullia" <?= $donasi['pembayaran'] == 'Gopay - 085776536282 a.n Cahaya Dwi Dzullia' ? 'selected' : ''; ?>>Gopay - 085776536282 a.n Cahaya Dwi Dzullia</option>
                                        <option value="BRI - 6431 0101 9470 538 a.n Supriadi" <?= $donasi['pembayaran'] == 'BRI - 6431 0101 9470 538 a.n Supriadi' ? 'selected' : ''; ?>>BRI - 6431 0101 9470 538 a.n Supriadi</option>
                                        <option value="BNI - 0455636684 a.n Hamzah Miftakhuddin" <?= $donasi['pembayaran'] == 'BNI - 0455636684 a.n Hamzah Miftakhuddin' ? 'selected' : ''; ?>>BNI - 0455636684 a.n Hamzah Miftakhuddin</option>
                                        <option value="Dana - Muhammad Rosyad Baktiar" <?= $donasi['pembayaran'] == 'Dana - Muhammad Rosyad Baktiar' ? 'selected' : ''; ?>>Dana - Muhammad Rosyad Baktiar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="waktu_donasi">Waktu Donasi</label>
                                    <input type="date" name="waktu_donasi" value="<?= (old('waktu_donasi')) ? old('waktu_donasi') : $donasi['waktu_donasi']; ?>" class="form-control <?= ($validation->hasError('waktu_donasi')) ? 'is-invalid' : ''; ?>" id="waktu_donasi" placeholder="Masukkan Waktu Donasi">
                                    <span class="error invalid-feedback"><?= $validation->getError('waktu_donasi'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bukti Donasi</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="bukti_transfer" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            <span class="error invalid-feedback"><?= $validation->getError('bukti_transfer'); ?></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card -->
                    <div class="card-footer">
                        Ubah Data Donatur
                    </div>
                    <!-- /.card-footer-->
                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->