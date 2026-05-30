<?php
$page_title       = 'ADNAP — Page Not Found';
$page_description = 'ADNAP Digital Agency — Think Backward. Build Forward. Brand strategy, web design, and digital growth for modern businesses.';
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
        <!-- 404 -->
        <section class="section-404 flat-spacing">
            <div class="container text-center">
                <h1 class="title text-dispaly-1 effectFade fadeZoom">404 Page Not Found</h1>
                <p class="desc text-body-1 text-white-64 effectFade fadeZoom">
                    Sorry, we couldn't find the page you where looking for. <br>
                    We suggest that you return to homepage.
                </p>
                <div class="effectFade fadeZoom">
                    <a href="index.php" class="tf-btn">
                        <span class="text-body-2 fw-semibold">HOME PAGE</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- /404 -->
<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

