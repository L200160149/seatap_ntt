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
                        <li class="breadcrumb-item active">Edit Data Blog</li>
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
                        <h3 class="card-title">Edit Data Blog</h3>

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
                        <form action="/blogs/update/<?= $blog['id'] ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $blog['slug'] ?>">
                            <input type="hidden" name="coverLama" value="<?= $blog['cover']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" value="<?= (old('title') ? old('title') : $blog['title']); ?>" autofocus class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" placeholder="Masukkan Judul">
                                    <span class="error invalid-feedback"><?= $validation->getError('title'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi</label>
                                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control <?= ($validation->hasError('desc')) ? 'is-invalid' : ''; ?>"><?= (old('desc') ? old('desc') : $blog['desc']); ?></textarea>
                                    <span class="error invalid-feedback"><?= $validation->getError('desc'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="author">Penulis</label>
                                    <input type="text" name="author" value="<?= (old('author') ? old('author') : $blog['author']); ?>" autofocus class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="author" placeholder="Masukkan Judul">
                                    <span class="error invalid-feedback"><?= $validation->getError('author'); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="cover">Cover</label>
                                    <div class="col-sm-2 mb-1">
                                        <img src="/img/<?= $blog['cover'] ?>" class="img-thumbnail img-preview">
                                    </div>
                                    <input type="file" value="" name="cover" class="form-control <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="cover" onchange="previewImg()">
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
                        Edit Data Blog
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