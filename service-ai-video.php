<?php
$page_title       = 'ADNAP — AI Video Generation Services';
$page_description = 'ADNAP leverages advanced AI tools to produce high-quality video content faster and more efficiently — without compromising on creativity. Scalable, visually compelling videos for modern digital platforms.';
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
            <h1 class="page-title fw-semibold effectFade fadeZoom">AI Video Generation</h1>
            <div class="breadcrumbs effectFade fadeUp">
                <a href="index.php" class="link">Home</a><div>/</div>
                <a href="services.php" class="link">Services</a><div>/</div>
                <div>AI Video Generation</div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <section class="flat-spacing">
        <div class="container">
            <div class="effectFade fadeUp" style="aspect-ratio:16/9;overflow:hidden;border-radius:4px;background:#111;">
                <video muted="" autoplay="" loop="" playsinline="" poster="assets/images/section/work-3.jpg" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <source src="assets/images/video/ai-video-demo.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="flat-spacing flat-animate-tab" id="tabs-section" style="padding-top:0;">
        <div class="container">
            <ul class="pricing-tab_btn" role="tablist">
                <li class="nav-tab-item"><a href="#overview-ai" data-bs-toggle="tab" class="tf-btn-tab active" role="tab"><span class="dot-active"></span>Overview</a></li>
                <li class="nav-tab-item"><a href="#inquiry-ai" data-bs-toggle="tab" class="tf-btn-tab" role="tab"><span class="dot-active"></span>Get a Quote</a></li>
            </ul>

            <div class="tab-content">

                <!-- OVERVIEW -->
                <div class="tab-pane active show" id="overview-ai" role="tabpanel">

                    <div class="row align-items-start mb-5">
                        <div class="col-lg-6">
                            <p class="mini-title text-caption text-white-64 effectFade fadeUp">AI VIDEO GENERATION</p>
                            <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp mt-2">Scale your content<br>without limits</h2>
                            <p class="text-body-1 text-white-64 mt-4 effectFade fadeUp">We leverage advanced AI tools to produce high-quality video content faster and more efficiently — without compromising on creativity. From concept to execution, we combine intelligent automation with creative direction to deliver scalable, visually compelling videos tailored for modern digital platforms.</p>
                            <a href="#inquiry-ai" data-bs-toggle="tab" class="tf-btn style-2 mt-4 effectFade fadeUp"><span class="text-caption">START A PROJECT</span></a>
                        </div>
                        <div class="col-lg-5 ms-auto mt-5 mt-lg-0 effectFade fadeUp">
                            <p class="text-caption fw-medium letter-space--1 text-white-64 mb-4">WHAT WE DELIVER</p>
                            <ul class="tf-list vertical gap-12 text-body-1">
                                <li><span class="text-primary">//</span> AI Concept Development</li>
                                <li><span class="text-primary">//</span> Script & Prompt Engineering</li>
                                <li><span class="text-primary">//</span> AI-Assisted Video Production</li>
                                <li><span class="text-primary">//</span> Post-Production & Colour Grade</li>
                                <li><span class="text-primary">//</span> Voiceover & Sound Design</li>
                                <li><span class="text-primary">//</span> Platform-Ready Multi-Format Delivery</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Process -->
                    <div class="effectFade fadeUp">
                        <p class="mini-title text-caption text-white-64 mb-4">HOW WE WORK</p>
                        <div class="br-line d-flex"></div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">01</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Brief & Script</p><p class="text-body-2 text-white-64 mb-0">Goals, tone, and narrative defined upfront. We align on the message, audience, and platform before a single prompt is written — strategy always comes first.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">02</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Prompt Engineering</p><p class="text-body-2 text-white-64 mb-0">Custom prompts crafted for precise AI output. This is where the craft lives — structured, tested, and refined to produce visuals that are on-brand from the first generation.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">03</span>
                            <div><p class="fw-medium letter-space--1 mb-1">AI Generation</p><p class="text-body-2 text-white-64 mb-0">High-quality footage produced at scale using the best available AI video tools. We curate and select only the strongest outputs — nothing generic ships.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">04</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Post-Production</p><p class="text-body-2 text-white-64 mb-0">Edit, colour grade, motion graphics, and sound design applied. AI generates the raw material — human creative direction shapes the final output.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">05</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Delivery</p><p class="text-body-2 text-white-64 mb-0">Platform-optimised files in every required format and aspect ratio — ready to publish across Instagram, TikTok, YouTube, website, and paid media simultaneously.</p></div>
                        </div>
                        <div class="br-line d-flex"></div>
                    </div>

                    <!-- Why ADNAP -->
                    <div class="row mt-5 g-4 effectFade fadeUp">
                        <div class="col-12"><p class="mini-title text-caption text-white-64 mb-2">WHY ADNAP</p></div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">01 —</p>
                            <h6 class="letter-space--2 mb-2">Speed at scale</h6>
                            <p class="text-body-2 text-white-64 mb-0">High-quality content in days, not weeks. AI production timelines mean you move faster than your competitors without sacrificing output quality.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">02 —</p>
                            <h6 class="letter-space--2 mb-2">AI as a tool, not a shortcut</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every output is directed, curated, and refined by our creative team. We use AI to amplify creativity — not replace it. The result looks intentional, not generated.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">03 —</p>
                            <h6 class="letter-space--2 mb-2">Multi-platform ready</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every format and ratio covered in one production run. 16:9, 9:16, 1:1 — all delivered together so you launch everywhere on the same day.</p>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="mt-5">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp mb-4">SELECTED WORK</p>
                        <div dir="ltr" class="swiper tf-swiper effectFade fadeUp"
                             data-preview="2.5" data-tablet="2" data-mobile-sm="1.5" data-mobile="1.1"
                             data-loop="true" data-auto="true" data-delay="2500" data-speed="800"
                             data-space="20" data-space-md="16" data-space-lg="24">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-3.jpg" alt="AI Video" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-1.jpg" alt="AI Video" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-4.jpg" alt="AI Video" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-6.jpg" alt="AI Video" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-2.jpg" alt="AI Video" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
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
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> MP4 / MOV delivery</li><li><span class="text-primary">//</span> Multiple aspect ratios</li><li><span class="text-primary">//</span> Web & social optimised</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">TIMELINE</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> 3–7 days (AI-assisted)</li><li><span class="text-primary">//</span> Rush delivery available</li><li><span class="text-primary">//</span> Bulk content packages</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">USE CASES</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Social media campaigns</li><li><span class="text-primary">//</span> Product launches</li><li><span class="text-primary">//</span> Brand & promo videos</li></ul>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">PLATFORMS</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Instagram / TikTok / YouTube</li><li><span class="text-primary">//</span> Website & landing pages</li><li><span class="text-primary">//</span> Ads & paid media</li></ul>
                                </div>
                            </div>
                            <div class="br-line d-flex mt-4"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="#inquiry-ai" data-bs-toggle="tab" class="tf-btn style-2">+ GET A QUOTE</a>
                    </div>
                </div>

                <!-- INQUIRY -->
                <div class="tab-pane" id="inquiry-ai" role="tabpanel">
                    <div class="section-cta" style="padding-top:0;">
                        <div class="s-header d-block mb-5">
                            <div class="row">
                                <div class="col-2"><a href="index.php" class="logo-custom"><div class="logo-site-sv"><img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="34" height="34" style="object-fit:contain;"></div><span class="line-vertical left"></span><span class="line-vertical right"></span><span class="line-horizontal top"></span><span class="line-horizontal bottom"></span></a></div>
                                <div class="col-10 col-lg-8"><h2 class="text-display-2 letter-space--3 effectFade fadeUp">Start your<br>AI Video project</h2></div>
                            </div>
                        </div>
                        <div class="row"><div class="col-lg-8 mx-auto">
                            <form class="form-cta">
                                <div class="form-content">
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field"><input class="tf-input" type="text" placeholder required><label class="tf-lable">Name <span class="text-primary">*</span></label></fieldset>
                                        <fieldset class="tf-field"><input class="tf-input" type="email" placeholder required><label class="tf-lable">Email <span class="text-primary">*</span></label></fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Company</label></fieldset>
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Budget in USD</span><ul class="list"><li class="option disabled">-- Select budget --</li><li class="option">Under $1,500</li><li class="option">$1,500 – $5,000</li><li class="option">$5,000 – $15,000</li><li class="option">$15,000+</li></ul></div></div>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Number of videos</span><ul class="list"><li class="option disabled">-- Select quantity --</li><li class="option">1 video</li><li class="option">2–5 videos</li><li class="option">6–10 videos</li><li class="option">10+ videos</li></ul></div></div>
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Intended platform</span><ul class="list"><li class="option disabled">-- Select platform --</li><li class="option">Social Media</li><li class="option">Website / Landing Page</li><li class="option">Paid Ads</li><li class="option">Multiple Platforms</li></ul></div></div>
                                    </div>
                                    <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Project details & brief</label></fieldset>
                                </div>
                                <div class="form-action">
                                    <button type="submit" class="tf-btn"><span class="text-caption">SUBMIT INQUIRY</span></button>
                                    <p class="text-body-1">or email — <a href="mailto:hello@adnap.com" class="text-primary">hello@adnap.com</a></p>
                                </div>
                            </form>
                        </div></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-faq type-2 flat-spacing bg-surface">
        <div class="container">
            <div class="s-header d-block">
                <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">AI Video<br>FAQ</h2>
            </div>
            <div class="row"><div class="col-lg-8 mx-auto">
                <div class="accordion-faq_list" id="faq-ai">
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qai-1" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">01</span><p class="accordion-text text-black">How is AI video different from traditional video production?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qai-1" class="collapse" data-bs-parent="#faq-ai">
                            <p class="accordion-content text-black-64">AI video production replaces costly film crews, locations, and lengthy post-production timelines with AI-generated visuals directed by a human creative team. The result is significantly faster and more cost-effective — without looking like a cheap AI output, because creative direction is baked into every step.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qai-2" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">02</span><p class="accordion-text text-black">What's the quality like compared to traditional video?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qai-2" class="collapse" data-bs-parent="#faq-ai">
                            <p class="accordion-content text-black-64">For social media, digital ads, and brand content, AI video quality is now on par — and in some styles, visually superior — to standard production. It isn't right for every use case (live action with specific talent, for example), but for motion, atmosphere, and narrative-driven content it delivers exceptional results.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qai-3" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">03</span><p class="accordion-text text-black">Can I use AI video for paid advertising?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qai-3" class="collapse" data-bs-parent="#faq-ai">
                            <p class="accordion-content text-black-64">Yes. All AI video content we produce is cleared for commercial use and paid media. We use licensed tools and ensure full commercial rights are included in every deliverable. You can run it on Meta, Google, TikTok, and beyond without restrictions.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qai-4" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">04</span><p class="accordion-text text-black">Can you produce a large volume of content quickly?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qai-4" class="collapse" data-bs-parent="#faq-ai">
                            <p class="accordion-content text-black-64">Yes — this is one of the key advantages of AI production. We offer bulk content packages where 10, 20, or more videos can be produced in a single production run. Ideal for brands running A/B ad tests, content calendars, or product launch campaigns that need high volume without high cost.</p>
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
                <a href="service-3d-animation.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">3D ANIMATION</span></a>
                <a href="service-branding.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">BRANDING</span></a>
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
        const t = document.querySelector('[href="#inquiry-ai"][data-bs-toggle="tab"]');
        if (t) { new bootstrap.Tab(t).show(); document.getElementById('tabs-section').scrollIntoView({behavior:'smooth'}); }
    }
});
</script>
</body>
</html>
