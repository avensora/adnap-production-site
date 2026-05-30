<?php
$page_title       = 'ADNAP Services — Brand Strategy, Web Design & Digital Growth';
$page_description = 'Explore ADNAP\'s full-service offerings: brand strategy, web design & development, and digital growth — with transparent pricing for every stage of growth.';
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
                <h1 class="page-title fw-semibold effectFade fadeZoom">Services</h1>
                <div class="breadcrumbs effectFade fadeUp">
                    <a href="index.php" class="link">Home</a>
                    <div>/</div>
                    <div>Services</div>
                </div>
            </div>
        </div>

        <!-- Services Intro -->
        <section class="flat-spacing">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <p class="mini-title text-caption text-white-64 effectFade fadeUp">WHAT WE DO</p>
                        <h2 class="text-display-2 letter-space--3 fw-semibold effectFade fadeUp">
                            Strategy-led work <br>that delivers results
                        </h2>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <p class="text-body-1 text-white-64 effectFade fadeUp">
                            Every service we offer is designed to work together. Whether you need a brand refresh, a new website, or a full-scale growth strategy — we build forward from a clear outcome.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Accordion -->
        <section class="section-service-v2 flat-spacing">
            <div class="container">
                <div class="br-line d-flex"></div>
                <div class="service-accordion-main" id="service-accordion-main">
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action" data-bs-target="#service-1" role="button"
                            data-bs-toggle="collapse" aria-controls="service-1" aria-expanded="true">
                            <h5 class="text-display-1 letter-space--3">Brand Strategy</h5>
                        </div>
                        <div id="service-1" class="collapse show" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-4.jpg" alt="Brand Strategy">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">01</p>
                                    <p class="text-body-1 text-white-64 mb-4">
                                        We build brand identities that are strategically grounded and visually distinctive. Starting from your target audience and market position, we craft a brand system that communicates trust, clarity, and differentiation at every touchpoint.
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> Market Positioning</li>
                                        <li><span class="text-primary">//</span> Visual Identity Design</li>
                                        <li><span class="text-primary">//</span> Logo & Typography</li>
                                        <li><span class="text-primary">//</span> Colour Palette Creation</li>
                                        <li><span class="text-primary">//</span> Brand Guidelines</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action collapsed" data-bs-target="#service-2" role="button"
                            data-bs-toggle="collapse" aria-controls="service-2" aria-expanded="false">
                            <h5 class="text-display-1 letter-space--3">Web Design & Dev</h5>
                        </div>
                        <div id="service-2" class="collapse" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-5.jpg" alt="Web Design">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">02</p>
                                    <p class="text-body-1 text-white-64 mb-4">
                                        We design and build websites that convert. Every decision — from information architecture to micro-interactions — is made with your user's journey in mind. Fast, responsive, and built to perform.
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> UI/UX Design</li>
                                        <li><span class="text-primary">//</span> Responsive Web Development</li>
                                        <li><span class="text-primary">//</span> CMS & Webflow Builds</li>
                                        <li><span class="text-primary">//</span> Landing Page Design</li>
                                        <li><span class="text-primary">//</span> Performance Optimisation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-accordion_item effectFade fadeUp no-div" role="presentation">
                        <div class="accordion-action collapsed" data-bs-target="#service-3" role="button"
                            data-bs-toggle="collapse" aria-controls="service-3" aria-expanded="false">
                            <h5 class="text-display-1 letter-space--3">Digital Growth</h5>
                        </div>
                        <div id="service-3" class="collapse" data-bs-parent="#service-accordion-main">
                            <div class="accordion-content">
                                <div class="image-left">
                                    <img width="860" height="373" src="assets/images/section/service-6.jpg" alt="Digital Growth">
                                </div>
                                <div class="content-right">
                                    <p class="number-order text-display-1 fw-medium letter-space--3 text-white-32">03</p>
                                    <p class="text-body-1 text-white-64 mb-4">
                                        Growth that's measurable and sustainable. We deploy data-driven strategies across SEO, paid media, and social to drive qualified traffic and grow your bottom line — month over month.
                                    </p>
                                    <ul class="tf-list vertical gap-12 text-body-1">
                                        <li><span class="text-primary">//</span> SEO & Content Strategy</li>
                                        <li><span class="text-primary">//</span> Social Media Management</li>
                                        <li><span class="text-primary">//</span> Paid Media Campaigns</li>
                                        <li><span class="text-primary">//</span> Analytics & Reporting</li>
                                        <li><span class="text-primary">//</span> Conversion Optimisation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section class="section-pricing type-2 flat-spacing flat-animate-tab">
            <div class="s-header d-block overflow-hidden">
                <div class="infiniteSlide infiniteSlide_select_work" data-clone="5">
                    <p class="text-display-1 letter-space--3 fw-semibold">Our Packages</p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                    <p class="text-display-1 letter-space--3 fw-semibold">Our Packages</p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                    <p class="text-display-1 letter-space--3 fw-semibold">Our Packages</p>
                    <div class="icon-app">
                        <img loading="lazy" width="120" height="120" src="assets/images/item/global.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="pricing-tab_btn" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#monthly" data-bs-toggle="tab" class="tf-btn-tab active">
                            <span class="dot-active"></span>
                            Monthly
                        </a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#annual" data-bs-toggle="tab" class="tf-btn-tab">
                            <span class="dot-active"></span>
                            <span>Annually — <span class="text-primary">Save 20%</span></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="monthly" role="tabpanel">
                        <div class="tf-grid-layout md-col-2 lg-col-3">
                            <div class="wg-plan">
                                <div class="br-line"></div>
                                <div class="plan-name letter-space--1 fw-medium">Starter</div>
                                <h4 class="plan-price">
                                    $800 <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For startups and small businesses ready to establish a strong online presence.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-troke w-100">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span>//</span> Brand identity kit</li>
                                    <li><span>//</span> 5-page website design</li>
                                    <li><span>//</span> Mobile-first responsive build</li>
                                    <li><span>//</span> Basic SEO foundation</li>
                                    <li><span>//</span> 30-day post-launch support</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-2">
                                <div class="bg-img bg-img_2">
                                    <img loading="lazy" width="416" height="625" src="assets/images/item/bg-6.png" alt="">
                                </div>
                                <div class="br-line bg-primary"></div>
                                <div class="plan-name letter-space--1 fw-medium">Growth</div>
                                <h4 class="plan-price">
                                    <span><span class="text-primary">$</span>1,600</span>
                                    <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For growing brands that need full-service digital strategy and execution.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-fill w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span class="text-primary">//</span> Full brand strategy</li>
                                    <li><span class="text-primary">//</span> Custom web design & dev</li>
                                    <li><span class="text-primary">//</span> SEO & content strategy</li>
                                    <li><span class="text-primary">//</span> Social media management</li>
                                    <li><span class="text-primary">//</span> Monthly performance reports</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-3">
                                <div class="bg-img bg-img_1"></div>
                                <div class="br-line bg-white"></div>
                                <div class="plan-name letter-space--1 fw-medium">Enterprise</div>
                                <h4 class="plan-price">
                                    $3,200 <span class="text-body-2 fw-normal text-white-64">/month</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For established organisations seeking a fully bespoke, end-to-end digital solution.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-fill-white w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">LET'S TALK</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span>//</span> Everything in Growth</li>
                                    <li><span>//</span> Paid media campaigns</li>
                                    <li><span>//</span> Dedicated account manager</li>
                                    <li><span>//</span> Advanced analytics dashboard</li>
                                    <li><span>//</span> Priority 24/7 support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="annual" role="tabpanel">
                        <div class="tf-grid-layout md-col-2 lg-col-3">
                            <div class="wg-plan">
                                <div class="br-line"></div>
                                <div class="plan-name letter-space--1 fw-medium">Starter</div>
                                <h4 class="plan-price">
                                    $7,680 <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For startups and small businesses ready to establish a strong online presence.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-troke w-100">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span>//</span> Brand identity kit</li>
                                    <li><span>//</span> 5-page website design</li>
                                    <li><span>//</span> Mobile-first responsive build</li>
                                    <li><span>//</span> Basic SEO foundation</li>
                                    <li><span>//</span> 30-day post-launch support</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-2">
                                <div class="bg-img bg-img_2">
                                    <img loading="lazy" width="416" height="625" src="assets/images/item/bg-6.png" alt="">
                                </div>
                                <div class="br-line bg-primary"></div>
                                <div class="plan-name letter-space--1 fw-medium">Growth</div>
                                <h4 class="plan-price">
                                    <span><span class="text-primary">$</span>15,360</span>
                                    <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For growing brands that need full-service digital strategy and execution.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-fill w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">GET STARTED</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span class="text-primary">//</span> Full brand strategy</li>
                                    <li><span class="text-primary">//</span> Custom web design & dev</li>
                                    <li><span class="text-primary">//</span> SEO & content strategy</li>
                                    <li><span class="text-primary">//</span> Social media management</li>
                                    <li><span class="text-primary">//</span> Monthly performance reports</li>
                                </ul>
                            </div>
                            <div class="wg-plan style-2 type-3">
                                <div class="bg-img bg-img_1"></div>
                                <div class="br-line bg-white"></div>
                                <div class="plan-name letter-space--1 fw-medium">Enterprise</div>
                                <h4 class="plan-price">
                                    $30,720 <span class="text-body-2 fw-normal text-white-64">/annual</span>
                                </h4>
                                <p class="plan-desc text-white-64 letter-space--1">
                                    For established organisations seeking a fully bespoke, end-to-end digital solution.
                                </p>
                                <a href="contact.php" class="btn-action tf-btn style-2 style-fill-white w-100 animate-btn animate-dark">
                                    <span class="text-caption fw-medium">LET'S TALK</span>
                                </a>
                                <ul class="benefit-list tf-list vertical">
                                    <li class="benefit_title letter-space--1 text-white-64">What's included:</li>
                                    <li><span>//</span> Everything in Growth</li>
                                    <li><span>//</span> Paid media campaigns</li>
                                    <li><span>//</span> Dedicated account manager</li>
                                    <li><span>//</span> Advanced analytics dashboard</li>
                                    <li><span>//</span> Priority 24/7 support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Pricing -->

        <!-- FAQ -->
        <section class="section-faq type-2 flat-spacing bg-surface">
            <div class="container">
                <div class="s-header d-block">
                    <h2 class="title text-display-2 letter-space--3 text-center text-black effectFade fadeUp">
                        <span class="text">
                            Frequently
                            <span class="icon"><img loading="lazy" width="80" height="80" src="assets/images/item/global-2.svg" alt="Image"></span>
                        </span> <br>
                        asked questions
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="accordion-faq_list" id="accordion-faq_list">
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-1" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-1" aria-expanded="false">
                                    <span class="accordion-order text-black-64">01</span>
                                    <p class="accordion-text text-black">How long does a typical project take?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-1" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Most brand and website projects are completed within 4–8 weeks, depending on scope and revisions. Digital growth retainers begin showing measurable results within 60–90 days. We always agree on a clear timeline before work begins.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium"
                                    data-bs-target="#faq-2" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-2" aria-expanded="true">
                                    <span class="accordion-order text-black-64">02</span>
                                    <p class="accordion-text text-black">Do you work with international clients?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-2" class="collapse show" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Absolutely. ADNAP works with clients across Southeast Asia, the Middle East, Europe, and beyond. We use async collaboration tools and video calls to keep every project running smoothly regardless of timezone.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-3" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-3" aria-expanded="false">
                                    <span class="accordion-order text-black-64">03</span>
                                    <p class="accordion-text text-black">What industries do you specialise in?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-3" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        We work across technology, e-commerce, finance, healthcare, and professional services. Our strength is adapting our approach to fit the nuances of each industry while maintaining a consistently high standard of craft.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-4" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-4" aria-expanded="false">
                                    <span class="accordion-order text-black-64">04</span>
                                    <p class="accordion-text text-black">What does the engagement process look like?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-4" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        We start with a discovery call to understand your goals, then propose a clear scope and timeline. A 50% deposit secures your spot. We deliver in structured milestones with regular check-ins, and the final balance is due on approval.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-faq_item cl-line-2" role="presentation">
                                <div class="accordion-action text-body-1 letter-space--1 fw-medium collapsed"
                                    data-bs-target="#faq-5" role="button" data-bs-toggle="collapse"
                                    aria-controls="faq-5" aria-expanded="false">
                                    <span class="accordion-order text-black-64">05</span>
                                    <p class="accordion-text text-black">Do you provide ongoing support after launch?</p>
                                    <div class="ic-wrap d-flex">
                                        <i class="icon icon-arrow-caret-down fs-10 text-black"></i>
                                    </div>
                                </div>
                                <div id="faq-5" class="collapse" data-bs-parent="#accordion-faq_list">
                                    <p class="accordion-content text-black-64">
                                        Yes. We offer retainer packages covering website maintenance, performance monitoring, content updates, and ongoing digital marketing. Think of us as your long-term digital partner, not just a one-off vendor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /FAQ -->

<?php include __DIR__ . '/partials/footer.php'; ?>
    </main>
<?php include __DIR__ . '/partials/mobile-menu.php'; ?>
<?php include __DIR__ . '/partials/scripts.php'; ?>
</body>

</html>

