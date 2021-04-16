<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Blogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>/blogs">Blogs</a></li>
                        <li class="breadcrumb-item active">Tambah Data Blog</li>
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
                        <h3 class="card-title">Tambah Data Blog</h3>

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
                        <form action="/blogs/save" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" value="<?= old('title'); ?>" autofocus class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" placeholder="Masukkan Judul">
                                    <span class="error invalid-feedback"><?= $validation->getError('title'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi</label>
                                    <textarea name="desc" id="desc" cols="30" rows="10" value="<?= old('desc'); ?>" class="form-control <?= ($validation->hasError('desc')) ? 'is-invalid' : ''; ?>"></textarea>
                                    <span class="error invalid-feedback"><?= $validation->getError('desc'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="cover">Cover</label>
                                    <input type="file" name="cover" value="<?= old('cover'); ?>" class="form-control <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover">
                                    <span class="error invalid-feedback"><?= $validation->getError('cover'); ?></span>
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
                        Tambah Data Blog
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