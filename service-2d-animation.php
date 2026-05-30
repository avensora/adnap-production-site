<?php
$page_title       = 'ADNAP — 2D Animation Services';
$page_description = 'ADNAP creates clear, engaging 2D animations that simplify complex ideas and communicate your message with precision. From script to final output, every frame is built to deliver impact.';
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
            <h1 class="page-title fw-semibold effectFade fadeZoom">2D Animation</h1>
            <div class="breadcrumbs effectFade fadeUp">
                <a href="index.php" class="link">Home</a><div>/</div>
                <a href="services.php" class="link">Services</a><div>/</div>
                <div>2D Animation</div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <section class="flat-spacing">
        <div class="container">
            <div class="effectFade fadeUp" style="aspect-ratio:16/9;overflow:hidden;border-radius:4px;background:#111;">
                <video muted="" autoplay="" loop="" playsinline="" poster="assets/images/section/work-1.jpg" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <source src="assets/images/video/2d-demo.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="flat-spacing flat-animate-tab" id="tabs-section" style="padding-top:0;">
        <div class="container">
            <ul class="pricing-tab_btn" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#overview-2d" data-bs-toggle="tab" class="tf-btn-tab active" role="tab" aria-selected="true">
                        <span class="dot-active"></span>Overview
                    </a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#inquiry-2d" data-bs-toggle="tab" class="tf-btn-tab" role="tab" aria-selected="false">
                        <span class="dot-active"></span>Get a Quote
                    </a>
                </li>
            </ul>

            <div class="tab-content">

                <!-- OVERVIEW -->
                <div class="tab-pane active show" id="overview-2d" role="tabpanel">

                    <!-- Description + Deliverables -->
                    <div class="row align-items-start mb-5">
                        <div class="col-lg-6">
                            <p class="mini-title text-caption text-white-64 effectFade fadeUp">2D ANIMATION</p>
                            <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp mt-2">Motion that<br>tells your story</h2>
                            <p class="text-body-1 text-white-64 mt-4 effectFade fadeUp">We create clear, engaging 2D animations that simplify complex ideas and communicate your message with precision. From concept to final output, every frame is designed to capture attention and deliver impact.</p>
                            <a href="#inquiry-2d" data-bs-toggle="tab" class="tf-btn style-2 mt-4 effectFade fadeUp"><span class="text-caption">START A PROJECT</span></a>
                        </div>
                        <div class="col-lg-5 ms-auto mt-5 mt-lg-0 effectFade fadeUp">
                            <p class="text-caption fw-medium letter-space--1 text-white-64 mb-4">WHAT WE DELIVER</p>
                            <ul class="tf-list vertical gap-12 text-body-1">
                                <li><span class="text-primary">//</span> Script & Narrative Direction</li>
                                <li><span class="text-primary">//</span> Custom Storyboard & Style Frames</li>
                                <li><span class="text-primary">//</span> Professional Voice-over & Sound</li>
                                <li><span class="text-primary">//</span> Fully Animated Final Video</li>
                                <li><span class="text-primary">//</span> Multiple Aspect Ratios & Formats</li>
                                <li><span class="text-primary">//</span> Source Files on Request</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Process -->
                    <div class="effectFade fadeUp">
                        <p class="mini-title text-caption text-white-64 mb-4">HOW WE WORK</p>
                        <div class="br-line d-flex"></div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">01</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Brief & Script</p><p class="text-body-2 text-white-64 mb-0">We work with you to define the message, tone, and call to action. A clear script is the foundation of every great animation.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">02</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Storyboard</p><p class="text-body-2 text-white-64 mb-0">Every scene is mapped out visually before a single frame is animated — keeping the vision aligned and revisions minimal.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">03</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Animatics</p><p class="text-body-2 text-white-64 mb-0">A rough motion preview lets you feel the pacing and timing before full production begins. Approve early, save time later.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">04</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Voice-over</p><p class="text-body-2 text-white-64 mb-0">Professional narration recorded, directed, and synced precisely to the animation for a seamless final output.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">05</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Animation & Delivery</p><p class="text-body-2 text-white-64 mb-0">Final frames brought to life with smooth motion and precise timing. Delivered in all required formats, ready to publish.</p></div>
                        </div>
                        <div class="br-line d-flex"></div>
                    </div>

                    <!-- Why ADNAP -->
                    <div class="row mt-5 g-4 effectFade fadeUp">
                        <div class="col-12"><p class="mini-title text-caption text-white-64 mb-2">WHY ADNAP</p></div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">01 —</p>
                            <h6 class="letter-space--2 mb-2">Frame-perfect precision</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every detail crafted intentionally — motion, timing, and pacing all serve your message.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">02 —</p>
                            <h6 class="letter-space--2 mb-2">Brand-aligned style</h6>
                            <p class="text-body-2 text-white-64 mb-0">Your identity embedded in every frame — colours, typography, and tone stay on-brand throughout.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">03 —</p>
                            <h6 class="letter-space--2 mb-2">Clear communication</h6>
                            <p class="text-body-2 text-white-64 mb-0">Complex ideas simplified. We translate your message into visuals anyone can understand on first watch.</p>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="mt-5">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp mb-4">SELECTED WORK</p>
                        <div dir="ltr" class="swiper tf-swiper effectFade fadeUp"
                             data-preview="2.5" data-tablet="2" data-mobile-sm="1.5" data-mobile="1.1"
                             data-loop="true" data-auto="true" data-delay="3000" data-speed="800"
                             data-space="20" data-space-md="16" data-space-lg="24">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-1.jpg" alt="2D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-2.jpg" alt="2D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-3.jpg" alt="2D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-4.jpg" alt="2D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-5.jpg" alt="2D Animation" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
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
                                    <ul class="tf-list vertical gap-8 text-body-1">
                                        <li><span class="text-primary">//</span> MP4 / MOV delivery</li>
                                        <li><span class="text-primary">//</span> Web & broadcast quality</li>
                                        <li><span class="text-primary">//</span> Multiple aspect ratios</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">TIMELINE</p>
                                    <ul class="tf-list vertical gap-8 text-body-1">
                                        <li><span class="text-primary">//</span> 2–4 weeks (standard)</li>
                                        <li><span class="text-primary">//</span> Rush delivery available</li>
                                        <li><span class="text-primary">//</span> Milestone-based process</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">USE CASES</p>
                                    <ul class="tf-list vertical gap-8 text-body-1">
                                        <li><span class="text-primary">//</span> Explainer videos</li>
                                        <li><span class="text-primary">//</span> Product demos</li>
                                        <li><span class="text-primary">//</span> Social media content</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">REVISIONS</p>
                                    <ul class="tf-list vertical gap-8 text-body-1">
                                        <li><span class="text-primary">//</span> 2 rounds included</li>
                                        <li><span class="text-primary">//</span> Feedback at each milestone</li>
                                        <li><span class="text-primary">//</span> Source files on request</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="br-line d-flex mt-4"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="#inquiry-2d" data-bs-toggle="tab" class="tf-btn style-2">+ GET A QUOTE</a>
                    </div>
                </div>
                <!-- /Overview -->

                <!-- INQUIRY -->
                <div class="tab-pane" id="inquiry-2d" role="tabpanel">
                    <div class="section-cta" style="padding-top:0;">
                        <div class="s-header d-block mb-5">
                            <div class="row">
                                <div class="col-2"><a href="index.php" class="logo-custom"><div class="logo-site-sv"><img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="34" height="34" style="object-fit:contain;"></div><span class="line-vertical left"></span><span class="line-vertical right"></span><span class="line-horizontal top"></span><span class="line-horizontal bottom"></span></a></div>
                                <div class="col-10 col-lg-8"><h2 class="text-display-2 letter-space--3 effectFade fadeUp">Start your<br>2D Animation project</h2></div>
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
                                            <div class="nc-wrap">
                                                <div class="nice-select"><span class="current letter-space--1">Budget in USD</span><ul class="list"><li class="option disabled">-- Select budget --</li><li class="option">Under $2,000</li><li class="option">$2,000 – $5,000</li><li class="option">$5,000 – $15,000</li><li class="option">$15,000+</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="tf-grid-layout sm-col-2">
                                            <div class="nc-wrap">
                                                <div class="nice-select"><span class="current letter-space--1">Estimated video length</span><ul class="list"><li class="option disabled">-- Select duration --</li><li class="option">Under 30 seconds</li><li class="option">30–60 seconds</li><li class="option">1–3 minutes</li><li class="option">3+ minutes</li></ul></div>
                                            </div>
                                            <div class="nc-wrap">
                                                <div class="nice-select"><span class="current letter-space--1">Intended platform</span><ul class="list"><li class="option disabled">-- Select platform --</li><li class="option">Website / Landing Page</li><li class="option">Social Media</li><li class="option">Presentation / Pitch</li><li class="option">Broadcast / Commercial</li></ul></div>
                                            </div>
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
                <!-- /Inquiry -->

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-faq type-2 flat-spacing bg-surface">
        <div class="container">
            <div class="s-header d-block">
                <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">2D Animation<br>FAQ</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion-faq_list" id="faq-2d">
                        <div class="accordion-faq_item cl-line-2">
                            <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q2d-1" data-bs-toggle="collapse" aria-expanded="false">
                                <span class="accordion-order text-black-64">01</span><p class="accordion-text text-black">What file formats do you deliver in?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                            </div>
                            <div id="q2d-1" class="collapse" data-bs-parent="#faq-2d">
                                <p class="accordion-content text-black-64">We deliver in MP4 as standard, with MOV and ProRes available on request. We also export at any aspect ratio needed — 16:9, 9:16, 1:1 — so your animation is ready for every platform from day one.</p>
                            </div>
                        </div>
                        <div class="accordion-faq_item cl-line-2">
                            <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q2d-2" data-bs-toggle="collapse" aria-expanded="false">
                                <span class="accordion-order text-black-64">02</span><p class="accordion-text text-black">Can I provide my own script or voice-over?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                            </div>
                            <div id="q2d-2" class="collapse" data-bs-parent="#faq-2d">
                                <p class="accordion-content text-black-64">Absolutely. You can supply your own script, voice-over recording, or both. We'll adapt the storyboard and animation to match. If you need help with the script, our team can write or refine it as part of the brief.</p>
                            </div>
                        </div>
                        <div class="accordion-faq_item cl-line-2">
                            <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q2d-3" data-bs-toggle="collapse" aria-expanded="false">
                                <span class="accordion-order text-black-64">03</span><p class="accordion-text text-black">How many revisions are included?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                            </div>
                            <div id="q2d-3" class="collapse" data-bs-parent="#faq-2d">
                                <p class="accordion-content text-black-64">Every project includes 2 structured revision rounds — one after the animatic and one after the full animation. Additional revision rounds are available at a flat rate. Our milestone process is designed to catch issues early so revisions stay minimal.</p>
                            </div>
                        </div>
                        <div class="accordion-faq_item cl-line-2">
                            <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#q2d-4" data-bs-toggle="collapse" aria-expanded="false">
                                <span class="accordion-order text-black-64">04</span><p class="accordion-text text-black">Do you handle the music and sound design?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                            </div>
                            <div id="q2d-4" class="collapse" data-bs-parent="#faq-2d">
                                <p class="accordion-content text-black-64">Yes. We include licensed background music and basic sound design in every project. For custom music composition, this is available as an add-on. All audio is rights-cleared for commercial use.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related -->
    <div class="section-brand flat-spacing bg-surface">
        <div class="container">
            <h6 class="mini-title text-caption text-black-64 mb-4">OTHER SERVICES</h6>
            <div class="d-flex flex-wrap gap-3">
                <a href="service-3d-animation.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">3D ANIMATION</span></a>
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
        const t = document.querySelector('[href="#inquiry-2d"][data-bs-toggle="tab"]');
        if (t) { new bootstrap.Tab(t).show(); document.getElementById('tabs-section').scrollIntoView({behavior:'smooth'}); }
    }
});
</script>
</body>
</html>
