<?php
$page_title       = 'ADNAP — Web Design & Development Services';
$page_description = 'ADNAP designs and builds modern, high-performing websites that are visually refined and strategically structured to convert. Every element built with user experience and business goals in mind.';
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
            <h1 class="page-title fw-semibold effectFade fadeZoom">Web Design & Dev</h1>
            <div class="breadcrumbs effectFade fadeUp">
                <a href="index.php" class="link">Home</a><div>/</div>
                <a href="services.php" class="link">Services</a><div>/</div>
                <div>Web Design & Dev</div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <section class="flat-spacing">
        <div class="container">
            <div class="effectFade fadeUp" style="aspect-ratio:16/9;overflow:hidden;border-radius:4px;background:#111;">
                <img src="assets/images/section/work-6.jpg" alt="Web Design & Development" style="width:100%;height:100%;object-fit:cover;display:block;">
            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="flat-spacing flat-animate-tab" id="tabs-section" style="padding-top:0;">
        <div class="container">
            <ul class="pricing-tab_btn" role="tablist">
                <li class="nav-tab-item"><a href="#overview-web" data-bs-toggle="tab" class="tf-btn-tab active" role="tab"><span class="dot-active"></span>Overview</a></li>
                <li class="nav-tab-item"><a href="#inquiry-web" data-bs-toggle="tab" class="tf-btn-tab" role="tab"><span class="dot-active"></span>Get a Quote</a></li>
            </ul>

            <div class="tab-content">

                <!-- OVERVIEW -->
                <div class="tab-pane active show" id="overview-web" role="tabpanel">

                    <div class="row align-items-start mb-5">
                        <div class="col-lg-6">
                            <p class="mini-title text-caption text-white-64 effectFade fadeUp">WEB DESIGN & DEVELOPMENT</p>
                            <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp mt-2">Websites built<br>to convert</h2>
                            <p class="text-body-1 text-white-64 mt-4 effectFade fadeUp">We design and build modern, high-performing websites that are not only visually refined but strategically structured to convert. Every element is created with user experience and business goals in mind.</p>
                            <a href="#inquiry-web" data-bs-toggle="tab" class="tf-btn style-2 mt-4 effectFade fadeUp"><span class="text-caption">START A PROJECT</span></a>
                        </div>
                        <div class="col-lg-5 ms-auto mt-5 mt-lg-0 effectFade fadeUp">
                            <p class="text-caption fw-medium letter-space--1 text-white-64 mb-4">WHAT WE DELIVER</p>
                            <ul class="tf-list vertical gap-12 text-body-1">
                                <li><span class="text-primary">//</span> UI/UX Design & Prototyping</li>
                                <li><span class="text-primary">//</span> Responsive Web Development</li>
                                <li><span class="text-primary">//</span> CMS, Webflow & Framer Builds</li>
                                <li><span class="text-primary">//</span> Landing Page Design</li>
                                <li><span class="text-primary">//</span> Performance & SEO Optimisation</li>
                                <li><span class="text-primary">//</span> 30-Day Post-Launch Support</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Process -->
                    <div class="effectFade fadeUp">
                        <p class="mini-title text-caption text-white-64 mb-4">HOW WE WORK</p>
                        <div class="br-line d-flex"></div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">01</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Discovery</p><p class="text-body-2 text-white-64 mb-0">Goals, target audience, competitor analysis, and site structure mapped before any design begins. We build a clear brief so the project stays on track from day one.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">02</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Wireframe</p><p class="text-body-2 text-white-64 mb-0">Information architecture mapped before visual design. Wireframes let us validate structure and user flow early — saving time and avoiding costly redesigns later.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">03</span>
                            <div><p class="fw-medium letter-space--1 mb-1">UI Design</p><p class="text-body-2 text-white-64 mb-0">High-fidelity mockups in Figma with your brand applied. Every layout decision is deliberate — visual hierarchy, spacing, and micro-interactions all serve the user journey.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4" style="border-bottom:1px solid rgba(255,255,255,0.08);">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">04</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Development</p><p class="text-body-2 text-white-64 mb-0">Built in your chosen platform — Webflow, Framer, WordPress, or custom code. Mobile-first, fast-loading, and SEO-ready from the first line of code.</p></div>
                        </div>
                        <div class="d-flex align-items-start gap-4 py-4">
                            <span class="text-primary fw-semibold letter-space--1" style="min-width:3rem;flex-shrink:0;">05</span>
                            <div><p class="fw-medium letter-space--1 mb-1">Launch & Support</p><p class="text-body-2 text-white-64 mb-0">Full QA, performance testing, and launch. Followed by 30 days of post-launch support — bug fixes, content tweaks, and anything that needs attention after go-live.</p></div>
                        </div>
                        <div class="br-line d-flex"></div>
                    </div>

                    <!-- Why ADNAP -->
                    <div class="row mt-5 g-4 effectFade fadeUp">
                        <div class="col-12"><p class="mini-title text-caption text-white-64 mb-2">WHY ADNAP</p></div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">01 —</p>
                            <h6 class="letter-space--2 mb-2">Conversion-focused design</h6>
                            <p class="text-body-2 text-white-64 mb-0">Every layout decision is backed by UX principles. We design for the user's journey first — beautiful is a byproduct of functional, not the other way around.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">02 —</p>
                            <h6 class="letter-space--2 mb-2">Performance-built from day one</h6>
                            <p class="text-body-2 text-white-64 mb-0">Fast, responsive, and SEO-ready from the first line of code. We don't optimise as an afterthought — speed and accessibility are built into the foundation.</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-primary fw-semibold text-caption letter-space--1 mb-2">03 —</p>
                            <h6 class="letter-space--2 mb-2">Fully owned by you</h6>
                            <p class="text-body-2 text-white-64 mb-0">Full handover with CMS training and documentation. Your team can edit, update, and grow the site independently from day one after launch.</p>
                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="mt-5">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp mb-4">SELECTED WORK</p>
                        <div dir="ltr" class="swiper tf-swiper effectFade fadeUp"
                             data-preview="2.5" data-tablet="2" data-mobile-sm="1.5" data-mobile="1.1"
                             data-loop="true" data-auto="true" data-delay="3200" data-speed="800"
                             data-space="20" data-space-md="16" data-space-lg="24">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-6.jpg" alt="Web Design" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-5.jpg" alt="Web Design" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-2.jpg" alt="Web Design" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-4.jpg" alt="Web Design" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
                                <div class="swiper-slide"><img loading="lazy" src="assets/images/section/work-1.jpg" alt="Web Design" style="width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:4px;"></div>
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
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">TECH STACK</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Figma (design)</li><li><span class="text-primary">//</span> Webflow / Framer</li><li><span class="text-primary">//</span> WordPress / Custom HTML</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">TIMELINE</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> 4–8 weeks (standard)</li><li><span class="text-primary">//</span> Landing pages in 1–2 weeks</li><li><span class="text-primary">//</span> Milestone-based delivery</li></ul>
                                </div>
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">WHAT'S INCLUDED</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Mobile-first responsive build</li><li><span class="text-primary">//</span> CMS integration & training</li><li><span class="text-primary">//</span> 30-day post-launch support</li></ul>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-caption fw-medium letter-space--1 text-white-64 mb-2">IDEAL FOR</p>
                                    <ul class="tf-list vertical gap-8 text-body-1"><li><span class="text-primary">//</span> Business & portfolio sites</li><li><span class="text-primary">//</span> SaaS & product launches</li><li><span class="text-primary">//</span> E-commerce & landing pages</li></ul>
                                </div>
                            </div>
                            <div class="br-line d-flex mt-4"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="#inquiry-web" data-bs-toggle="tab" class="tf-btn style-2">+ GET A QUOTE</a>
                    </div>
                </div>

                <!-- INQUIRY -->
                <div class="tab-pane" id="inquiry-web" role="tabpanel">
                    <div class="section-cta" style="padding-top:0;">
                        <div class="s-header d-block mb-5">
                            <div class="row">
                                <div class="col-2"><a href="index.php" class="logo-custom"><div class="logo-site-sv"><img src="assets/images/logo/adnap-logo.png" alt="ADNAP" width="34" height="34" style="object-fit:contain;"></div><span class="line-vertical left"></span><span class="line-vertical right"></span><span class="line-horizontal top"></span><span class="line-horizontal bottom"></span></a></div>
                                <div class="col-10 col-lg-8"><h2 class="text-display-2 letter-space--3 effectFade fadeUp">Start your<br>Web project</h2></div>
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
                                        <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Company / Brand name</label></fieldset>
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Project type</span><ul class="list"><li class="option disabled">-- Select type --</li><li class="option">New Website</li><li class="option">Website Redesign</li><li class="option">Landing Page</li><li class="option">E-Commerce</li></ul></div></div>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Budget in USD</span><ul class="list"><li class="option disabled">-- Select budget --</li><li class="option">Under $3,000</li><li class="option">$3,000 – $8,000</li><li class="option">$8,000 – $20,000</li><li class="option">$20,000+</li></ul></div></div>
                                        <div class="nc-wrap"><div class="nice-select"><span class="current letter-space--1">Preferred platform</span><ul class="list"><li class="option disabled">-- Select platform --</li><li class="option">Webflow</li><li class="option">Framer</li><li class="option">WordPress</li><li class="option">Custom / No Preference</li></ul></div></div>
                                    </div>
                                    <fieldset class="tf-field"><input class="tf-input" type="text" placeholder><label class="tf-lable">Project details & goals</label></fieldset>
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
                <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">Web Design<br>FAQ</h2>
            </div>
            <div class="row"><div class="col-lg-8 mx-auto">
                <div class="accordion-faq_list" id="faq-web">
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qweb-1" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">01</span><p class="accordion-text text-black">Do I own my website after delivery?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qweb-1" class="collapse" data-bs-parent="#faq-web">
                            <p class="accordion-content text-black-64">Yes — completely. You own 100% of everything we build. We hand over all source files, design files (Figma), CMS access, and any code repositories. We also provide training so your team can manage the site independently. No retainer required unless you want one.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qweb-2" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">02</span><p class="accordion-text text-black">What platform do you recommend?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qweb-2" class="collapse" data-bs-parent="#faq-web">
                            <p class="accordion-content text-black-64">It depends on your needs. Webflow is our go-to for marketing sites and portfolios — powerful, fast, and client-friendly. Framer suits interactive or motion-heavy builds. WordPress for content-heavy or e-commerce sites with plugin ecosystems. We'll recommend the right tool after understanding your goals and team capacity.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qweb-3" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">03</span><p class="accordion-text text-black">Do you offer ongoing maintenance after launch?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qweb-3" class="collapse" data-bs-parent="#faq-web">
                            <p class="accordion-content text-black-64">Yes. We offer monthly retainers covering updates, new pages, performance monitoring, and technical support. Think of it as having a dedicated web team on call without the overhead of a full-time hire. Retainer slots are limited — ask about availability during your inquiry.</p>
                        </div>
                    </div>
                    <div class="accordion-faq_item cl-line-2">
                        <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed" data-bs-target="#qweb-4" data-bs-toggle="collapse" aria-expanded="false">
                            <span class="accordion-order text-black-64">04</span><p class="accordion-text text-black">Can you work with my existing brand assets?</p><div class="ic-wrap d-flex"><i class="icon icon-arrow-caret-down fs-10 text-black"></i></div>
                        </div>
                        <div id="qweb-4" class="collapse" data-bs-parent="#faq-web">
                            <p class="accordion-content text-black-64">Absolutely. If you have brand guidelines, a logo, and a colour palette, we work within them. If your existing assets need refreshing as part of the web project, we can handle that too — often at a reduced rate when combined with a web build.</p>
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
                <a href="service-ai-video.php" class="tf-btn style-2" style="background:transparent;border-color:rgba(0,0,0,0.2);color:#000;"><span class="text-caption">AI VIDEO</span></a>
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
        const t = document.querySelector('[href="#inquiry-web"][data-bs-toggle="tab"]');
        if (t) { new bootstrap.Tab(t).show(); document.getElementById('tabs-section').scrollIntoView({behavior:'smooth'}); }
    }
});
</script>
</body>
</html>
