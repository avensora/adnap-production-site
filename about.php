<?php
$page_title       = 'ADNAP — About Us';
$page_description = 'ADNAP is a forward-thinking digital agency creating bold, functional, and results-driven experiences for ambitious brands worldwide. Meet the team behind the work.';
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
                <h1 class="page-title fw-semibold effectFade fadeZoom">About</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>About</div>
                </div>
            </div>
        </div>

        <!-- About Main -->
        <section class="section-about-me-v2 flat-spacing">
            <div class="container">
                <div class="about-main flat-spacing-bottom">
                    <div class="davies-video">
                        <video class="video" muted="" autoplay="" loop="" playsinline="">
                            <source src="assets/images/video/davies-video.mp4" type="video/mp4">
                        </video>
                        <div class="overlay mark"></div>
                        <div class="overlay bg-effect">
                            <img loading="lazy" width="1296" height="729" src="assets/images/item/dither-effect.svg" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <div class="top text-display-1 fw-semibold letter-space--3">
                            <p class="effectFade fadeUp">About</p>
                            <p class="effectFade fadeUp" data-delay="0.1">ADNAP<span class="text-primary">_</span></p>
                        </div>
                        <h5 class="text-color-change letter-space--2 fw-normal">
                            We are a forward-thinking digital agency creating bold, functional, and results-driven experiences that help ambitious brands connect, grow, and lead in their markets.
                        </h5>
                    </div>
                </div>

                <div class="br-line d-flex flat-spacing-bottom"></div>

                <!-- Timeline -->
                <div class="award-main">
                    <div class="left">
                        <div class="badget animate-box">
                            <img loading="lazy" width="156" height="156" src="assets/images/item/badge-design.png" alt="ADNAP Agency Badge">
                        </div>
                    </div>
                    <ul class="experience-list overflow-hidden">
                        <li>Our Journey</li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Full-service Digital Agency — ADNAP</p>
                            <p class="exp_year">2025</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Expanded into Web Development & Digital Marketing</p>
                            <p class="exp_year">2024 - 2025</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Launched Brand Strategy Division</p>
                            <p class="exp_year">2023 - 2024</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">First International Client Portfolio</p>
                            <p class="exp_year">2022 - 2023</p>
                        </li>
                        <li class="effectFade fadeRight">
                            <p class="exp_name">Founded — ADNAP Agency Established</p>
                            <p class="exp_year">2020</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Mission & Values -->
        <section class="flat-spacing bg-surface">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <p class="mini-title text-caption text-black-64 effectFade fadeUp">OUR PHILOSOPHY</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold text-black effectFade fadeUp">
                            Think Backward.<br>Build Forward.
                        </h2>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <p class="text-body-1 text-black-64 mb-4">
                            Every project begins at the end. We define the outcome your brand needs to achieve, then reverse-engineer every decision — from positioning and identity to web architecture and growth channels — to reach that destination with precision.
                        </p>
                        <p class="text-body-1 text-black-64 mb-5">
                            This backward-thinking framework is why the brands we build don't just look good — they perform. Strategy informs creativity, creativity informs execution, and execution delivers results.
                        </p>
                        <div class="tf-grid-layout sm-col-2 gap-4">
                            <div>
                                <p class="text-caption fw-medium letter-space--1 text-black-64 mb-2">// BOLD</p>
                                <p class="text-body-1 text-black-64">We don't do safe. Every brand we build is designed to stand out and be remembered.</p>
                            </div>
                            <div>
                                <p class="text-caption fw-medium letter-space--1 text-black-64 mb-2">// PRECISE</p>
                                <p class="text-body-1 text-black-64">Every pixel, word, and strategy decision is deliberate. We measure twice and build once.</p>
                            </div>
                            <div>
                                <p class="text-caption fw-medium letter-space--1 text-black-64 mb-2">// RESULTS-FIRST</p>
                                <p class="text-body-1 text-black-64">Aesthetics matter, but outcomes matter more. We track performance from day one.</p>
                            </div>
                            <div>
                                <p class="text-caption fw-medium letter-space--1 text-black-64 mb-2">// HONEST</p>
                                <p class="text-body-1 text-black-64">No vanity metrics, no overpromising. Just clear communication and work we stand behind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="section-testimonial flat-spacing">
            <div class="indicator-wrap">
                <div class="bg-img">
                    <img loading="lazy" width="1440" height="800" src="assets/images/item/gird-net.png" alt="Image">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wg-indicator mb-md-0">
                                <p class="indicate-title text-body-1 letter-space--1">
                                    <span class="text-primary">//</span> Projects Delivered
                                </p>
                                <p class="indicate-counter wg-counter text-display-1 fw-medium">
                                    <span class="odometer" data-number="120">10</span> <span class="text-primary">+</span>
                                </p>
                                <p class="indicate-sub">
                                    Bold work that drives <br>measurable results
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wg-indicator mb-md-0">
                                <p class="indicate-title text-body-1 letter-space--1">
                                    <span class="text-primary">//</span> Client Satisfaction
                                </p>
                                <p class="indicate-counter wg-counter text-display-1 fw-medium">
                                    <span class="odometer" data-number="98">10</span> <span class="text-primary">%</span>
                                </p>
                                <p class="indicate-sub">
                                    We focus on exceeding <br>every expectation
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wg-indicator mb-0">
                                <p class="indicate-title text-body-1 letter-space--1">
                                    <span class="text-primary">//</span> Years in Business
                                </p>
                                <p class="indicate-counter wg-counter text-display-1 fw-medium">
                                    <span class="odometer" data-number="5">1</span> <span class="text-primary">+</span>
                                </p>
                                <p class="indicate-sub">
                                    Building brands and <br>growing businesses
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="flat-spacing">
            <div class="container">
                <div class="s-header d-block mb-5">
                    <p class="mini-title text-caption text-white-64 text-center effectFade fadeUp">THE PEOPLE</p>
                    <h2 class="text-display-2 letter-space--3 fw-semibold text-center effectFade fadeUp">Meet the team</h2>
                </div>
                <div class="tf-grid-layout lg-col-3">
                    <!-- Alex Mercer -->
                    <div class="effectFade fadeUp">
                        <div class="wg-tech-v2" style="padding:0;overflow:hidden;">
                            <div style="aspect-ratio:3/4;overflow:hidden;">
                                <img loading="lazy" src="assets/images/section/tes-v2-1.jpg" alt="Alex Mercer"
                                    style="width:100%;height:100%;object-fit:cover;">
                            </div>
                            <div class="tech-content" style="padding:24px 0 0;">
                                <h5 class="tech-name letter-space--2">Alex Mercer</h5>
                                <p class="text-primary text-caption fw-medium letter-space--1 mb-3">Creative Director</p>
                                <p class="tech-desc letter-space--1">
                                    10 years shaping visual identities for brands across tech, finance, and consumer goods. Alex leads all creative decisions at ADNAP — from brand strategy to final pixel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Sam Lau -->
                    <div class="effectFade fadeUp" data-delay="0.1">
                        <div class="wg-tech-v2" style="padding:0;overflow:hidden;">
                            <div style="aspect-ratio:3/4;overflow:hidden;">
                                <img loading="lazy" src="assets/images/section/tes-v2-2.jpg" alt="Sam Lau"
                                    style="width:100%;height:100%;object-fit:cover;">
                            </div>
                            <div class="tech-content" style="padding:24px 0 0;">
                                <h5 class="tech-name letter-space--2">Sam Lau</h5>
                                <p class="text-primary text-caption fw-medium letter-space--1 mb-3">Lead Developer</p>
                                <p class="tech-desc letter-space--1">
                                    Full-stack developer with a front-end heart. Sam builds fast, accessible, and beautifully animated web experiences that perform under real-world conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Priya Nair -->
                    <div class="effectFade fadeUp" data-delay="0.2">
                        <div class="wg-tech-v2" style="padding:0;overflow:hidden;">
                            <div style="aspect-ratio:3/4;overflow:hidden;">
                                <img loading="lazy" src="assets/images/section/tes-v2-3.jpg" alt="Priya Nair"
                                    style="width:100%;height:100%;object-fit:cover;">
                            </div>
                            <div class="tech-content" style="padding:24px 0 0;">
                                <h5 class="tech-name letter-space--2">Priya Nair</h5>
                                <p class="text-primary text-caption fw-medium letter-space--1 mb-3">Strategy Lead</p>
                                <p class="tech-desc letter-space--1">
                                    Data-driven and client-obsessed. Priya owns the strategic layer of every engagement — from market research and positioning to growth planning and performance analysis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tools -->
        <section class="section-tech-stack-v2 flat-spacing bg-surface">
            <div class="container">
                <div class="s-header d-block">
                    <p class="mini-title text-caption text-black-64 text-center effectFade fadeUp">HOW WE BUILD</p>
                    <h2 class="text-display-2 letter-space--3 text-center text-black effectFade fadeUp">Our Tools</h2>
                </div>
                <div class="tf-grid-layout lg-col-3">
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2 text-black">Figma</h5>
                            <p class="tech-desc letter-space--1 text-black-64">
                                Collaborative design platform for <br>crafting, prototyping, and refining <br>world-class interfaces.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="33" height="48" src="assets/images/item/figma.svg" alt="Figma">
                            </div>
                        </div>
                    </div>
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2 text-black">Framer</h5>
                            <p class="tech-desc letter-space--1 text-black-64">
                                Rapid interactive website builder <br>for delivering high-fidelity digital <br>experiences at speed.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="32" height="48" src="assets/images/item/framer.svg" alt="Framer">
                            </div>
                        </div>
                    </div>
                    <div class="wg-tech-v2">
                        <div class="tech-content">
                            <h5 class="tech-name letter-space--2 text-black">Webflow</h5>
                            <p class="tech-desc letter-space--1 text-black-64">
                                Visual-first development tool for <br>designing, building, and deploying <br>responsive sites with precision.
                            </p>
                            <div class="ic-img">
                                <img loading="lazy" width="77" height="48" src="assets/images/item/webflow.svg" alt="Webflow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="flat-spacing">
            <div class="container text-center">
                <p class="mini-title text-caption text-white-64 effectFade fadeUp">READY TO START?</p>
                <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp mb-4">
                    Let's build something <span class="text-primary">great</span>
                </h2>
                <a href="contact.php" class="tf-btn">
                    <span class="text-caption">GET IN TOUCH</span>
                </a>
            </div>
        </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

