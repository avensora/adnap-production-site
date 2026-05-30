<?php
$page_title       = 'ADNAP Blog — Insights on Brand, Design & Digital Growth';
$page_description = 'ADNAP Digital Agency blog — Insights on brand strategy, web design, and digital growth. Think Backward. Build Forward.';
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
                <h1 class="page-title fw-semibold effectFade fadeZoom">Blog</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Blog</div>
                </div>
            </div>
        </div>
        <!-- Blog With Sidebar -->
        <section class="section-blog flat-spacing">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <div class="tf-grid-layout">
                            <div class="article-blog style-horizontal hover-img effectFade fadeUp no-div">
                                <a href="blog-single.php" class="blog-image img-style">
                                    <img loading="lazy" width="426" height="307" src="assets/images/blog/blog-1.jpg" alt="Image">
                                </a>
                                <div class="blog-content">
                                    <div class="infor">
                                        <p class="infor_sub text-white-64">
                                            Brand Strategy
                                        </p>
                                        <h6>
                                            <a href="blog-single.php" class="link infor_name">
                                                Why Brand Identity Is Your Most Valuable Asset
                                            </a>
                                        </h6>
                                    </div>
                                    <a href="blog-single.php" class="btn-action">
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="article-blog style-horizontal hover-img effectFade fadeUp no-div">
                                <a href="blog-single.php" class="blog-image img-style">
                                    <img loading="lazy" width="426" height="307" src="assets/images/blog/blog-2.jpg" alt="Image">
                                </a>
                                <div class="blog-content">
                                    <div class="infor">
                                        <p class="infor_sub text-white-64">
                                            Web Design
                                        </p>
                                        <h6>
                                            <a href="blog-single.php" class="link infor_name">
                                                Designing for Conversion: UX Principles That Drive Results
                                            </a>
                                        </h6>
                                    </div>
                                    <a href="blog-single.php" class="btn-action">
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="article-blog style-horizontal hover-img effectFade fadeUp no-div">
                                <a href="blog-single.php" class="blog-image img-style">
                                    <img loading="lazy" width="426" height="307" src="assets/images/blog/blog-3.jpg" alt="Image">
                                </a>
                                <div class="blog-content">
                                    <div class="infor">
                                        <p class="infor_sub text-white-64">
                                            Digital Growth
                                        </p>
                                        <h6>
                                            <a href="blog-single.php" class="link infor_name">
                                                Think Backward: Our Framework for Sustainable Growth
                                            </a>
                                        </h6>
                                    </div>
                                    <a href="blog-single.php" class="btn-action">
                                        <i class="icon icon-arrow-top-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="wd-full effectFade fadeUp no-div">
                                <ul class="wg-pagination">
                                    <li>
                                        <a href="#" class="pagination-item active">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pagination-item">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pagination-item">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pagination-item"><i class="icon icon-angle-right-solid"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar m-lg-0">
                            <div class="sidebar-item effectFade fadeUp no-div">
                                <h5 class="sidebar-title">
                                    Search
                                </h5>
                                <form class="form-search">
                                    <fieldset class="text">
                                        <input type="text" placeholder="Search" class="" name="search" tabindex="0" value="" aria-required="true"
                                            required="">
                                    </fieldset>
                                    <button type="submit" class="link text-white">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="sidebar-item effectFade fadeUp no-div">
                                <h5 class="sidebar-title">
                                    Recent posts
                                </h5>
                                <div class="list-relatest-post">
                                    <div class="relatest-post-item">
                                        <div class="image">
                                            <img loading="lazy" width="80" height="80" src="assets/images/blog/blog-1.jpg" alt="Recent Post">
                                        </div>
                                        <div class="content">
                                            <h6 class="title text-body-1">
                                                <a href="blog-single.php" class="link">
                                                    Why Brand Identity Is Your Most Valuable Asset
                                                </a>
                                            </h6>
                                            <p class="time text-body-3 text-white-64">May 10, 2026</p>
                                        </div>
                                    </div>
                                    <div class="relatest-post-item">
                                        <div class="image">
                                            <img loading="lazy" width="80" height="80" src="assets/images/blog/blog-2.jpg" alt="Recent Post">
                                        </div>
                                        <div class="content">
                                            <h6 class="title text-body-1">
                                                <a href="blog-single.php" class="link">
                                                    Designing for Conversion: UX Principles That Drive Results
                                                </a>
                                            </h6>
                                            <p class="time text-body-3 text-white-64">April 28, 2026</p>
                                        </div>
                                    </div>
                                    <div class="relatest-post-item">
                                        <div class="image">
                                            <img loading="lazy" width="80" height="80" src="assets/images/blog/blog-3.jpg" alt="Recent Post">
                                        </div>
                                        <div class="content">
                                            <h6 class="title text-body-1">
                                                <a href="blog-single.php" class="link">
                                                    Think Backward: Our Framework for Sustainable Growth
                                                </a>
                                            </h6>
                                            <p class="time text-body-3 text-white-64">April 15, 2026</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item effectFade fadeUp no-div">
                                <h5 class="sidebar-title">
                                    Category
                                </h5>
                                <div class="sidebar-categories">
                                    <div class="item">
                                        <a href="#" class="text-body-1 link">Brand Strategy</a>
                                        <span class="text-body-3 text-white-64">(5)</span>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="text-body-1 link">Web Design</a>
                                        <span class="text-body-3 text-white-64">(4)</span>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="text-body-1 link">Digital Growth</a>
                                        <span class="text-body-3 text-white-64">(3)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item effectFade fadeUp no-div">
                                <h5 class="sidebar-title">
                                    Popular tag
                                </h5>
                                <ul class="list-tags">
                                    <li><a class="text-body-2" href="#">Branding</a></li>
                                    <li><a class="text-body-2" href="#">UX Design</a></li>
                                    <li><a class="text-body-2" href="#">Digital Marketing</a></li>
                                    <li><a class="text-body-2" href="#">Web Development</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Blog With Sidebar -->
<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

