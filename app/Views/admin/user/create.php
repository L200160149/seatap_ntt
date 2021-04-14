<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/users">Pengguna</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pengguna</li>
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
                        <h3 class="card-title">Tambah Data Pengguna</h3>

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

                        <form action="/users/save" method="post">

                            <div class="mb-3">
                                <label for="InputForName" class="form-label">Name</label>
                                <input type="text" required name="username" value="<?= old('name'); ?>" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="InputForName"><?= $validation->getError('name'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="InputForEmail" class="form-label">Email address</label>
                                <input type="email" required name="email" value="<?= old('email'); ?>" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="InputForEmail">
                                <?= $validation->getError('email'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="InputForPassword" class="form-label">Password</label>
                                <input type="password" required name="password_hash" value="<?= old('password_hash'); ?>" class="form-control  <?= ($validation->hasError('password_hash')) ? 'is-invalid' : ''; ?>" id="InputForPassword"><?= $validation->getError('password_hash'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card -->
                    <div class="card-footer">
                        Tambah Data Pengguna
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