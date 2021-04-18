<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">


                    <h1 class="text-dark font-weight-bold text-8">Halaman Detail Blog</h1>
                </div>

                <div class="col-md-12 align-self-center order-1">


                    <ul class="breadcrumb d-block text-center">
                        <li><a href="/">Home</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li class="active">Detail Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a href="#">
                                <img src="/img/<?= $blogs['cover'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="Cover Blog" />
                            </a>
                        </div>

                        <div class="post-date ml-0">
                            <span class="day"><?= date('d', strtotime($blogs['created_at'])) ?></span>
                            <span class="month"><?= date('M', strtotime($blogs['created_at'])) ?></span>
                        </div>

                        <div class="post-content ml-0">

                            <h2 class="font-weight-semi-bold"><a href="#"><?= $blogs['title'] ?></a></h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#"><?= $blogs['author'] ?></a> </span>
                            </div>

                            <div><?= $blogs['desc'] ?></div>
                        </div>
                </div>
            </div>
        </div>

        <div class="mt-5" id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://pedulintt.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>