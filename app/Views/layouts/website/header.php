<body data-plugin-page-transition>
    <div class="body">
        <header id="header" class="side-header d-flex">
            <div class="header-body">
                <div class="header-container container d-flex h-100">
                    <div class="header-column flex-row flex-lg-column justify-content-center h-100">
                        <div class="header-row flex-row justify-content-start justify-content-lg-center py-lg-5">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="100" height="100" src="/img/humanity.png">
                                </a>
                            </div>
                        </div>
                        <div class="header-row header-row-side-header flex-row h-100 pb-lg-5">
                            <div class="side-header-scrollable scrollable colored-slider" data-plugin-scrollable>
                                <div class="scrollable-content">
                                    <div class="header-nav header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class=" <?= ($uri->getSegment(1) == '' ? 'active' : '') ?>" href="/">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=" <?= ($uri->getSegment(1) == 'blog' ? 'active' : '') ?>" href="/blog">
                                                            Blog
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="/login">
                                                            Login
                                                        </a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-row justify-content-end pb-lg-3">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean d-sm-0">
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/seatapcommunity/" target="_blank" title="Seatap"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/tridayajournals/" target="_blank" title="Seatap"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <p class="d-none d-lg-block text-1 pt-3">Komunitas Seatap & Tridaya Journal</p>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>