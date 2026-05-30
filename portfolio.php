<?php
$page_title       = 'ADNAP Portfolio — Our Work';
$page_description = 'Explore ADNAP\'s portfolio of brand identity, web design, and digital growth projects across technology, e-commerce, finance, and more.';
?>
<!DOCTYPE html>

<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
<?php include __DIR__ . '/partials/head.php'; ?>
</head>

<body class="counter-scroll">
    <canvas class="cursor-trail d-none d-xl-block" id="trail"></canvas>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-arrow-caret-right"></span>
        </span>
    </button>
    <!-- /Scroll Top -->

    <main id="wrapper">
<?php include __DIR__ . '/partials/nav-header.php'; ?>
        <div class="section-page-title">
            <div class="container text-center">
                <h1 class="page-title fw-semibold effectFade fadeZoom">Portfolio</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Portfolio</div>
                </div>
            </div>
        </div>

        <!-- Portfolio Intro -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp">OUR SELECTED WORK</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp">
                            Projects that <br>speak for themselves
                        </h2>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="text-body-1 text-white-64 effectFade fadeUp">
                            From brand identity to full-scale digital ecosystems — each project is built with purpose, precision, and a clear outcome in mind.
                        </p>
                    </div>
                </div>

                <!-- Featured Projects -->
                <div class="work-list stack-element-main position-relative">
                    <div class="element">
                        <a href="#" class="wg-work effectFade fadeUp no-div">
                            <div class="work-image">
                                <video class="" muted="" autoplay="" loop="" playsinline="">
                                    <source src="assets/images/video/nexbot.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Nexora_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Technology</li>
                                        <li class="effectFade fadeUp">SaaS</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">2025</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-5.jpg" alt="Vantara project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Vantara_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">E-Commerce</li>
                                        <li class="effectFade fadeUp">Retail</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Strategy</li>
                                        <li class="effectFade fadeUp">UI/UX Design</li>
                                        <li class="effectFade fadeUp">Web Development</li>
                                    </ul>
                                    <h5 class="letter-space--2">2025</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-6.jpg" alt="Kelsara project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Kelsara_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Finance</li>
                                        <li class="effectFade fadeUp">Fintech</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Digital Strategy</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">2025</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-1.jpg" alt="Lumara project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Lumara_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Healthcare</li>
                                        <li class="effectFade fadeUp">Wellness</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">2024</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-2.jpg" alt="Orbis project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Orbis_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Technology</li>
                                        <li class="effectFade fadeUp">AI</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">UI/UX Design</li>
                                        <li class="effectFade fadeUp">Web Development</li>
                                    </ul>
                                    <h5 class="letter-space--2">2024</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-3.jpg" alt="Stratum project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Stratum_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Real Estate</li>
                                        <li class="effectFade fadeUp">Property</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Strategy</li>
                                        <li class="effectFade fadeUp">Digital Growth</li>
                                    </ul>
                                    <h5 class="letter-space--2">2024</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="element">
                        <a href="#" class="wg-work">
                            <div class="work-image">
                                <img loading="lazy" width="1296" height="648" src="assets/images/section/work-4.jpg" alt="Meridian project">
                            </div>
                            <div class="work-content">
                                <div class="work_top">
                                    <h5 class="letter-space--2">Meridian_</h5>
                                    <ul class="tf-list vertical text-end">
                                        <li class="text-white-64">Industry</li>
                                        <li class="effectFade fadeUp">Professional</li>
                                        <li class="effectFade fadeUp">Services</li>
                                    </ul>
                                </div>
                                <div class="work_bottom">
                                    <ul class="tf-list vertical">
                                        <li class="text-white-64">Services</li>
                                        <li class="effectFade fadeUp">Brand Identity</li>
                                        <li class="effectFade fadeUp">Web Design</li>
                                    </ul>
                                    <h5 class="letter-space--2">2023</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <a href="contact.php" class="tf-btn style-2">
                        + START YOUR PROJECT
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <div class="section-brand flat-spacing bg-surface">
            <div class="container">
                <div class="row text-center text-black">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="120">10</span><span class="text-primary">+</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">PROJECTS DELIVERED</p>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="98">10</span><span class="text-primary">%</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">CLIENT SATISFACTION</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-display-1 fw-semibold letter-space--3 text-black">
                            <span class="odometer" data-number="5">1</span><span class="text-primary">+</span>
                        </p>
                        <p class="text-caption fw-medium letter-space--1 text-black-64">YEARS IN BUSINESS</p>
                    </div>
                </div>
            </div>
        </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

