<div role="main" class="main">
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">


                    <h1 class="text-dark font-weight-bold text-8">Halaman Blog</h1>
                    <span class="sub-title text-dark">Check out our Latest News!</span>
                </div>

                <div class="col-md-12 align-self-center order-1">


                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4 my-5">
        <div class="row text-center mb-5">
            <div class="col-md-10 mx-md-auto">
                <?php if (count($blogs) > 0) :  ?>
                    <?php foreach ($blogs as $blog) : ?>
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="/blog/detail/<?= $blog['slug'] ?>">
                                        <img src="img/<?= $blog['cover'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/blog/detail/<?= $blog['slug'] ?>"><?= $blog['title'] ?></a></h2>
                                    <p><?= word_limiter($blog['desc'], 20) ?></p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#"><?= $blog['author'] ?></a> </span>
                                        <!-- <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span> -->
                                        <!-- <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
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