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
                        <li class="breadcrumb-item active">Halaman Donasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Donatur</h3>

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
                <?php if (session()->getFlashdata('info')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('info'); ?>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                <?php endif; ?>
                <a href="/donasi/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Besar Donasi</th>
                            <th>Dikirim ke</th>
                            <th>Waktu Donasi</th>
                            <th>Bukti Transfer</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($donasi as $do) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $do['nama'] ?></td>
                                <td>Rp. <?= $do['donasi'] ?></td>
                                <td><?= $do['pembayaran'] ?></td>
                                <td><?= $do['waktu_donasi'] ?></td>
                                <td>
                                    <a href="/img/<?= $do['bukti_transfer'] ?>" data-toggle="lightbox" data-title="Bukti Trasnfer" data-gallery="gallery">
                                        <img src="/img/<?= $do['bukti_transfer'] ?>" class="img-fluid mb-2" alt="Bukti Trasnfer" />
                                    </a>

                                <td>
                                    <a style="margin: 2px;" href="/donasi/edit/<?= $do['id_donasi']; ?>" class="btn btn-info"><i class="fas fa-pen"></i> Ubah</a>
                                    <a style="margin: 2px;" href="/donasi/delete/<?= $do['id_donasi']; ?>" onclick="return confirm('Hapus Data ?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Besar Donasi</th>
                            <th>Dikirim ke</th>
                            <th>Waktu Donasi</th>
                            <th>Bukti Transfer</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
            <div class="card-footer">
                Daftar Donatur
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->