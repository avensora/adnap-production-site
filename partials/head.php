<?php
$page_title = $page_title ?? 'ADNAP Digital Agency';
$page_description = $page_description ?? 'ADNAP Digital Agency — Brand strategy, web design, and digital growth for modern businesses.';

// Required: $page_title, $page_description
// Optional: $extra_css (array of CSS href strings inserted before styles.css)
$extra_css = $extra_css ?? [];
?>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="author" content="ADNAP Digital Agency">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">

    <!-- font -->
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <link rel="stylesheet" href="assets/icon/icomoon/style.css">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
<?php foreach ($extra_css as $css): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
<?php endforeach; ?>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/logo/adnap-logo.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo/adnap-logo.png">

