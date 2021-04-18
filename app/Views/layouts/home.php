<div role="main" class="main">

    <div class="container py-4 my-5">
        <div class="row text-center mb-5">
            <div class="col-md-10 mx-md-auto">
                <h1 class="word-rotator-title font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                    OPEN DONATION FOR NTT
                </h1>
                <h1 class="word-rotator-title font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                    Komunitas Seatap & Tridaya Journals
                </h1>
                <p class="lead text-4 font-weight-normal appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    Donasi akan ditutup dalam waktu dibawah ini
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="countdown countdown-borders" data-plugin-countdown data-plugin-options="{'date': '2021/04/25 23:59:00', 'numberClass': 'font-weight-extra-bold'}"></div>
            </div>
        </div>
    </div>


    <!-- <hr class="my-0"> -->
    <!-- <div class="row">
                <div class="col">
                    <div class="countdown" data-plugin-countdown data-plugin-options="{'date': '2022/01/01 12:00:00', 'numberClass': 'font-weight-extra-bold'}"></div>
                </div>
            </div> -->

    <section class="section bg-color-grey-scale-1 section-no-border section-center mb-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <div class="owl-carousel owl-theme mt-2 nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
                        <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                            <h2 class="font-weight-normal text-6 pb-2 mb-4"><strong class="font-weight-extra-bold">Total Donasi</strong></h2>
                            <?php foreach ($total as $to) : ?>
                                <h1>
                                    <strong><?php echo 'Rp. ' . number_format($to->donasi); ?></strong>
                                </h1>
                                <!-- <label>Rupiah</label> -->
                            <?php endforeach; ?>
                            <p class="text-4">Total donasi yang terkumpul sampai saat ini sebesar <?php echo 'Rp.' . number_format($to->donasi, 2); ?> dengan rincian sebagai berikut :</p>

                            <div class="table-responsive">
                                <table id="example1" class="table mt-10 table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Besar Donasi</th>
                                            <th>Dikirim ke</th>
                                            <th>Waktu Donasi</th>
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
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center pt-5 my-5">
            <div class="col-lg-8 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                <h2 class="font-weight-bold mb-3">Blog</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p> -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="blog-posts">

                    <div class="row">

                        <?php if (count($blogs) > 0) :  ?>
                            <?php foreach ($blogs as $blog) : ?>
                                <div class="col-md-4">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="/blog/detail/<?= $blog['slug'] ?>">
                                                <img src="/img/<?= $blog['cover'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/blog/detail/<?= $blog['slug'] ?>"><?= $blog['title'] ?></a></h2>
                                            <p><?= $blog['desc'] ?></p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#"><?= $blog['author'] ?></a> </span>
                                                <span class="d-block mt-2"><a href="/blog/detail/<?= $blog['slug'] ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <h4 class="col text-center">-- Belum Tersedia --</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-color-dark">
        <div class="row">
            <div class="col text-center p-0">
                <a class="btn btn-dark btn-block text-3 py-4" href="/blog">LIHAT BLOG SELENGKAPNYA...</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section class="section section-dark section-height-4 border-0 m-0">
        <div class="container appear-animation" data-appear-animation="fadeIn">
            <div class="row mt-1 mb-2">
                <div class="text-center col-md-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <img class="img-fluid" width="500" src="/img/pobuku.jpg" alt="Card Image">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">
                    <a href="https://wa.me/6281278888142" class="btn btn-primary font-weight-semibold rounded-0 text-3 px-5 btn-py-3">Per-Order Buku!</a>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="text-center col-md-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                    <img class="img-fluid" width="500" src="/img/pamplet2.jpeg" alt="Card Image">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col text-center">
                    <a href="/img/pamplet2.jpeg" class="btn btn-primary font-weight-semibold rounded-0 text-3 px-5 btn-py-3">Download Gambar!</a>
                </div>
            </div>
        </div>
    </section>
</div>