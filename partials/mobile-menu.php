<?php
if (!isset($_cp)) {
    $_cp          = basename($_SERVER['PHP_SELF']);
    $_isAbout     = ($_cp === 'about.php');
    $_isService   = ($_cp === 'services.php' || strpos($_cp, 'service-') === 0);
    $_isPortfolio = ($_cp === 'portfolio.php');
    $_isBlog      = (strpos($_cp, 'blog-') === 0);
    $_isContact   = ($_cp === 'contact.php');
}
if (!isset($_isSvcAll)) {
    $_cp          = $_cp ?? basename($_SERVER['PHP_SELF']);
    $_isSvcAll    = ($_cp === 'services.php');
    $_isSvc2d     = ($_cp === 'service-2d-animation.php');
    $_isSvc3d     = ($_cp === 'service-3d-animation.php');
    $_isSvcBrand  = ($_cp === 'service-branding.php');
    $_isSvcAI     = ($_cp === 'service-ai-video.php');
    $_isSvcWeb    = ($_cp === 'service-web-design.php');
    $_isBlogTwo   = ($_cp === 'blog-two-columns.php');
    $_isBlogThree = ($_cp === 'blog-three-columns.php');
    $_isBlogStd   = ($_cp === 'blog-standard.php');
}
?>
    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-bottom offcanvas-menu" id="mobileMenu">
        <div class="offcanvas-content">
            <div class="container h-100">
                <div class="offcanvas-content_wrapin">
                    <div class="canvas_head">
                        <a href="index.php" class="logo-site">
                            <img src="assets/images/logo/adnap-logo.png" alt="ADNAP" height="36" width="36" style="object-fit:contain;">
                        </a>
                        <a href="#" data-bs-dismiss="offcanvas" class="btn-mobile-menu text-caption link">
                            <i class="icon icon-close"></i>
                            CLOSE
                        </a>
                    </div>
                    <div class="canvas_center">
                        <ul class="nav-ul-mb">
                            <li>
                                <div class="item">
                                    <a href="about.php" class="mb-menu-link text-display-1<?php echo $_isAbout ? ' active' : ''; ?>">
                                        <span class="text">About</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Who We Are
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="services.php" class="mb-menu-link text-display-1<?php echo $_isService ? ' active' : ''; ?>">
                                        <span class="text">Services</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> What We Do
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="mb-sub-nav">
                                        <li><a href="services.php" class="<?php echo $_isSvcAll ? 'active' : ''; ?>">All Services</a></li>
                                        <li><a href="service-2d-animation.php" class="<?php echo $_isSvc2d ? 'active' : ''; ?>">2D Animation</a></li>
                                        <li><a href="service-3d-animation.php" class="<?php echo $_isSvc3d ? 'active' : ''; ?>">3D Animation</a></li>
                                        <li><a href="service-branding.php" class="<?php echo $_isSvcBrand ? 'active' : ''; ?>">Branding</a></li>
                                        <li><a href="service-ai-video.php" class="<?php echo $_isSvcAI ? 'active' : ''; ?>">AI Video</a></li>
                                        <li><a href="service-web-design.php" class="<?php echo $_isSvcWeb ? 'active' : ''; ?>">Web Design</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="portfolio.php" class="mb-menu-link text-display-1<?php echo $_isPortfolio ? ' active' : ''; ?>">
                                        <span class="text">Portfolio</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Our Work
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="blog-two-columns.php" class="mb-menu-link text-display-1<?php echo $_isBlog ? ' active' : ''; ?>">
                                        <span class="text">Blog</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Insights
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="contact.php" class="mb-menu-link text-display-1<?php echo $_isContact ? ' active' : ''; ?>">
                                        <span class="text">Contact</span>
                                        <div class="infiniteSlide_text_main">
                                            <div class="infiniteSlide infiniteSlide_text" data-clone="5">
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                                <p class="text-body-2 letter-space--1">
                                                    <span class="text-primary">//</span> Get In Touch
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="canvas_foot">
                        <div class="left">
                            <a href="mailto:hello@adnap.com" class="link text-caption">HELLO@ADNAP.COM</a>
                            <p class="text-caption">
                                KUL <span class="clock"></span>
                            </p>
                        </div>
                        <div class="right">
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                INSTAGRAM
                            </a>
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                LINKEDIN
                            </a>
                            <a href="#" class="tf-link-icon text-caption link">
                                <i class="icon icon-arrow-top-right"></i>
                                TWITTER (X)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->
