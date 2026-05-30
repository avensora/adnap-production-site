<?php
$page_title       = 'ADNAP — 3D Animation Services';
$page_description = 'ADNAP 3D animation brings depth and realism to your brand, creating visually striking experiences that elevate perception and leave a lasting impression. Built with detail, motion, and purpose.';
?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<head>
<?php include __DIR__ . '/partials/head.php'; ?>
</head>
<body class="counter-scroll">
<canvas class="cursor-trail d-none d-xl-block" id="trail"></canvas>
<button id="goTop"><span class="border-progress"></span><span class="ic-wrap"><span class="icon icon-arrow-caret-right"></span></span></button>
<main id="wrapper">
<?php include __DIR__ . '/partials/nav-header.php'; ?>

    <div class="section-page-title">
        <div class="container text-center">
            <h1 class="page-title fw-semibold effectFade fadeZoom">3D Animation</h1>
            <div class="breadcrumbs effectFade fadeUp">
                <a href="index.php" class="link">Home</a><div>/</div>
                <a href="services.php" class="link">Services</a><div>/</div>
                <div>3D Animation</div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <section class="flat-spacing">
        <div class="container">
            <div class="effectFade fadeUp" style="aspect-ratio:16/9;overflow:hidden;border-radius:4px;background:#111;">
                <video muted="" autoplay="" loop="" playsinline="" poster="assets/images/section/work-5.jpg" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <source src="assets/images/video/3d-demo.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="flat-spacing flat-animate-tab" id="tabs-section" style="padding-top:0;">
        <div class="container">
            <ul class="pricing-tab_btn" role="tablist">
                <li class="nav-tab-item"><a href="#overview-3d" data-bs-toggle="tab" class="tf-btn-tab active" role="tab"><span class="dot-active"></span>Overview</a></li>
                <li class="nav-tab-item"><a href="#inquiry-3d" data-bs-toggle="tab" class="tf-btn-tab" role="tab"><span class="dot-active"></span>Get a Quote</a></li>
            </ul>

            <div class="tab-content">

                <!-- OVERVIEW -->
                <div class="tab-pane active show" id="overview-3d" role="tabpanel">

                    <div class="row align-items-start mb-5">
                        <div class="col-lg-6">
                            <p class="mini-title text-caption text-white-64 effectFade fadeUp">3D ANIMATION</p>
                            <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp mt-2">Depth, realism,<br>and purpose</h2>
                            <p class="text-body-1 text-white-64 mt-4 effectFade fadeUp">Our 3D animation brings depth and realism to your brand, creating visually striking experiences that elevate perception and leave a lasting impression. Built with detail, motion, and purpose.</p>
                            <a href="#inquiry-3d" data-bs-toggle="tab" class="tf-btn style-2 mt-4 effectFade fadeUp"><span class="text-caption">START A PROJECT</span></a>
                        </div>
                        <div class="col-lg-5 ms-auto mt-5 mt-lg-0 effectFade fadeUp">
                            <p class="text-caption fw-medium letter-space--1 text-white-64 mb-4">WHAT WE DELIVER</p>
                            <ul class="tf-list vertical gap-12 text-body-1">
                                <li><span class="text-primary">//</span> 3D Modelling & Asset Creation</li>
                                <li><span class="text-primary">//</span> Texturing, Shading & Lighting</li>
                                <li><span class="text-primary">//</span> Character & Product Animation</li>
                                <li><span class="text-primary">//</span> Visual Effects & Simulations</li>
                                <li><span class="text-primary">//</span> Final Compositing & Colour Grade</li>
                                <li><span class="text-primary">//</span> 4K Broadcast-Ready Delivery</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Process -->
                    <div class="effectFade fadeUp">
                        <p class="mini-title text-caption text-white-64 mb-4">HOW WE WORK</p>
                        <div class="br-line d-flex"></div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">01</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Brief & Concept</p><p class="text-body-2 text-white-64 mb-0">We define the visual direction, style references, and purpose. Every detail — camera angles, lighting mood, colour tone — is agreed before modelling begins.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">02</span>
                            <div><p class="fw-medium letter-space--1 mb-1">3D Modelling</p><p class="text-body-2 text-white-64 mb-0">Assets built from scratch or adapted from your references. Every polygon placed with the final output in mind — clean topology, production-ready geometry.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">03</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Texturing & Lighting</p><p class="text-body-2 text-white-64 mb-0">Materials and light define mood and realism. We use PBR workflows and HDRI lighting to ensure your output looks grounded in the real world.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">04</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Rigging & Animation</p><p class="text-body-2 text-white-64 mb-0">Movement brought to life with physics, weight, and intention. Whether product showcase or character performance — motion here serves purpose.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">05</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Compositing & Delivery</p><p class="text-body-2 text-white-64 mb-0">Final render polished in post — colour graded, sound designed, and exported in all required formats and resolutions.</p></div>
                        </div>
                        <div class="br-line d-flex"></div>
                    </div>

                    <!-- Why ADNAP -->
                    <div class="row mt-5 g-4 effectFade fadeUp">
                        <div class="col-12"><p class="mini-title text-caption text-white-64 mb-2">WHY ADNAP</p></div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">01 —</p>
                            <h6 class="letter-space--2 mb-2">Cinematic realism</h6>
                            <p class="text-body-2 text-white-64 mb-0">Detail that demands a second look — photorealistic renders built with production-level craft and intentional composition.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">02 —</p>
                            <h6 class="letter-space--2 mb-2">Purpose-driven motion</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every move is designed with intent. We animate for impact, not decoration — keeping the viewer's attention exactly where it needs to be.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">03 —</p>
                            <h6 class="letter-space--2 mb-2">4K broadcast delivery</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every project delivered in full 4K resolution, broadcast-ready and optimised for web, social, and presentation formats simultaneously.</p>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="mt-5">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp mb-4">SELECTED WORK</p>
                        <div dir="ltr" class="swiper tf-swiper effectFade fadeUp"
                             data-preview="2.5" data-tablet="2" data-mobile-sm="1.5" data-mobile="1.1"
                             data-loop="true" data-auto="true" data-delay="2800" data-speed="800"
                             data-space="20" data-space-md="16" data-space-lg="24">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-5.jpg" alt="3D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-6.jpg" alt="3D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-1.jpg" alt="3D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-3.jpg" alt="3D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                            </div>
                            <div class="group-btn-slider mt-4">
                                <div class="lh-1 nav-prev-swiper"><i class="fs-8 icon icon-arrow-caret-left"></i></div>
                                <div class="sw-dot-default tf-sw-pagination"></div>
                                <div class="lh-1 nav-next-swiper"><i class="fs-8 icon icon-arrow-caret-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Specs -->
                    <div class="row mt-5">
                        <div class="col-lg-8 mx-auto">
                            <div class="br-line d-flex mb-4"></div>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">FORMAT</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> MP4 / MOV / ProRes</li><li><span class="text-primary">//</span> 4K & broadcast ready</li><li><span class="text-primary">//</span> Multiple aspect ratios</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">TIMELINE</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> 3–6 weeks (standard)</li><li><span class="text-primary">//</span> Rush delivery available</li><li><span class="text-primary">//</span> Milestone-based reviews</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">USE CASES</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Product visualisation</li><li><span class="text-primary">//</span> Architectural rendering</li><li><span class="text-primary">//</span> Brand films & ads</li></ul>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">SOFTWARE</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Blender / Cinema 4D</li><li><span class="text-primary">//</span> After Effects</li><li><span class="text-primary">//</span> Unreal Engine (on request)</li></ul>
                                </div>
                            </div>
                            <div class="br-line d-flex mt-4"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="#inquiry-3d" data-bs-toggle="tab" class="tf-btn style-2">+ GET A QUOTE</a>
                    </div>
                </div>

                <!-- INQUIRY -->
                <div class="tab-pane" id="inquiry-3d" role="tabpanel">
                    <div class="section-cta" style="padding-top:0;">
                        <div class="s-header d-block mb-5">
                            <div class="row">
                                <div class="col-2"><a href="index.php" class="logo-custom"><div class="logo-site-sv"><img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="34" height="34" style="object-fit:contain;"></div><span class="line-vertical left"></span><span class="line-vertical right"></span><span class="line-horizontal top"></span><span class="line-horizontal bottom"></span></a></div>
                                <div class="col-10 col-lg-8"><h2 class="text-display-2 letter-space--3 effectFade fadeUp">Start your<br>3D Animation project</h2></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <form class="form-cta">
                                    <div class="form-content">
                                        <div class="tf-grid-layout sm-col-2">
                                            <fieldset class="tf-field"><input class="tf-input" type="text" placeholder required><label class="tf-lable">Name <span class="text-primary">*</span></label></fieldset>
                                            <fieldset class="tf-field"><input class="tf-input" type="email" placeholder required><label class="tf-lable">Email <span class="text-primary">*</span></label></fieldset>
                                        </div>
                                        <div class="tf-grid-layout sm-col-2">
                                            <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Company</label></fieldset>
                                            <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Budget in USD</span><ul class="list"><li class="option disabled">-- Select budget --</li><li class="option">Under $5,000</li><li class="option">$5,000 – $15,000</li><li class="option">$15,000 – $50,000</li><li class="option">$50,000+</li></ul></div></div>
                                        </div>
                                        <div class="tf-grid-layout sm-col-2">
                                            <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Animation type</span><ul class="list"><li class="option disabled">-- Select type --</li><li class="option">Product Visualisation</li><li class="option">Character Animation</li><li class="option">Architectural / Environment</li><li class="option">Brand Film / Commercial</li></ul></div></div>
                                            <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Estimated video length</span><ul class="list"><li class="option disabled">-- Select duration --</li><li class="option">Under 30 seconds</li><li class="option">30–60 seconds</li><li class="option">1–3 minutes</li><li class="option">3+ minutes</li></ul></div></div>
                                        </div>
                                        <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Project details & brief</label></fieldset>
                                    </div>
                                    <div class="form-action">
                                        <button type="submit" class="tf-btn"><span class="text-caption">SUBMIT INQUIRY</span></button>
                                        <p class="text-body-1">or email — <a href="mailto:hello@adnap.com" class="text-primary">hello@adnap.com</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-faq type-2 flat-spacing bg-surface">
        <div class="container">
            <div class="s-header d-block">
                <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">3D Animation<br>FAQ</h2>
            </div>
            <div class="row"><div class="col-lg-8 mx-auto">
                <div class="accordion-faq_list" id="faq-3d">
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q3d-1" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">01</span><p class="accordion-text text-black">Can you work with existing 3D assets or models?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="q3d-1" class="collapse" data-bs-parent="#faq-3d">
                            <p class="accordion-content text-black-64">Yes. If you have existing CAD files, 3D models, or reference assets, we can work from those directly. We support most standard formats including OBJ, FBX, STL, and STEP. We'll assess the files in the brief stage and advise if any cleanup is needed.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q3d-2" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">02</span><p class="accordion-text text-black">How long does a 3D project typically take?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="q3d-2" class="collapse" data-bs-parent="#faq-3d">
                            <p class="accordion-content text-black-64">Most 3D projects run 3–6 weeks depending on complexity. A simple product visualisation or 30-second loop can be turned around in 2–3 weeks. Full character animation or complex architectural walkthroughs take longer. We'll give you a firm timeline in your proposal.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q3d-3" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">03</span><p class="accordion-text text-black">What rendering software do you use?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="q3d-3" class="collapse" data-bs-parent="#faq-3d">
                            <p class="accordion-content text-black-64">We primarily work in Blender with Cycles rendering and Cinema 4D with Redshift. For real-time projects or interactive visualisations, we also use Unreal Engine 5. The tool choice depends on the project type and desired visual output.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q3d-4" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">04</span><p class="accordion-text text-black">Do you offer still renders as well as animation?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="q3d-4" class="collapse" data-bs-parent="#faq-3d">
                            <p class="accordion-content text-black-64">Yes. Many clients combine a 3D animation with a set of hero still renders for use across print, web, and social. We offer 3D renders as a standalone service or as part of an animation project — often at a reduced rate when bundled together.</p>
                        </div>
                    </div>
                </div>
            </div></div>
        </div>
    </section>

    <!-- Related -->
    <div class="section-brand flat-spacing bg-surface">
        <div class="container">
            <h6 class="mini-title text-caption text-black-64 mb-4">OTHER SERVICES</h6>
            <div class="d-flex flex-wrap gap-3">
                <a href="service-2d-animation.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">2D ANIMATION</span></a>
                <a href="service-branding.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">BRANDING</span></a>
                <a href="service-ai-video.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">AI VIDEO</span></a>
                <a href="service-web-design.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">WEB DESIGN</span></a>
                <a href="services.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">ALL SERVICES</span></a>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/partials/footer.php'; ?>
</main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (new URLSearchParams(window.location.search).get('tab') === 'inquiry') {
        const t = document.querySelector('[href="#inquiry-3d"][data-bs-toggle="tab"]');
        if (t) { new bootstrap.Tab(t).show(); document.getElementById('tabs-section').scrollIntoView({behavior:'smooth'}); }
    }
});
</script>
</body>
</html>
