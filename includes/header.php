<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

if (!isset($pageTitle)) {
    $pageTitle = $site['seo_title'];
}

if (!isset($pageDescription)) {
    $pageDescription = $site['seo_description'];
}

if (!isset($pageKeywords)) {
    $pageKeywords = $site['seo_keywords'];
}

if (!isset($geoRegion)) {
    $geoRegion = $site['geo_region'];
}

if (!isset($geoPlacename)) {
    $geoPlacename = $site['geo_placename'];
}

if (!isset($geoPosition)) {
    $geoPosition = '';
}

if (!isset($active)) {
    $active = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($pageTitle); ?></title>
  <meta name="description" content="<?php echo e($pageDescription); ?>">
  <meta name="keywords" content="<?php echo e($pageKeywords); ?>">
  <meta name="geo.region" content="<?php echo e($geoRegion); ?>">
  <meta name="geo.placename" content="<?php echo e($geoPlacename); ?>">
  <?php if ($geoPosition !== ''): ?>
  <meta name="geo.position" content="<?php echo e($geoPosition); ?>">
  <meta name="ICBM" content="<?php echo e(str_replace(';', ', ', $geoPosition)); ?>">
  <?php endif; ?>
  <?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' fill='%23021a42'/%3E%3Cpath d='M6 18 L16 8 L26 18 V26 H6Z' fill='%23fed000'/%3E%3C/svg%3E">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,560;9..144,640&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <a class="skip" href="#content">Skip to content</a>
  <header class="site-header">
    <div class="header-inner">
      <a class="logo" href="index.php"><?php echo e($site['name']); ?></a>
      <input class="nav-toggle" type="checkbox" id="nav-toggle">
      <label class="nav-burger" for="nav-toggle">Menu</label>
      <nav class="site-nav" aria-label="Primary">
        <a href="index.php"<?php echo $active === 'home' ? ' aria-current="page"' : ''; ?>>Home</a>
        <?php foreach ($services as $navService): ?>
          <a href="<?php echo e(service_href($navService)); ?>"<?php echo $active === $navService['slug'] ? ' aria-current="page"' : ''; ?>><?php echo e($navService['menu']); ?></a>
        <?php endforeach; ?>
        <a href="enquiries.php"<?php echo $active === 'enquiries' ? ' aria-current="page"' : ''; ?>>Enquiries</a>
      </nav>
      <div class="header-actions">
        <a class="header-phone" href="tel:<?php echo e($site['phone_tel']); ?>"><?php echo e($site['phone_display']); ?></a>
        <a class="btn btn-primary" href="index.php#enquiry">Get A Quote</a>
      </div>
    </div>
  </header>
  <main id="content">
