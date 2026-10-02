<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$service = null;
foreach ($services as $item) {
    if ($item['slug'] === $serviceSlug) {
        $service = $item;
        break;
    }
}

if ($service === null) {
    header('Location: services.php');
    exit;
}

$pageTitle = $service['seo_title'];
$pageDescription = $service['seo_description'];
$pageKeywords = $service['seo_keywords'];
$geoPlacename = $service['geo_placename'];
$geoPosition = isset($service['geo_position']) ? $service['geo_position'] : '';
$active = $service['slug'];
require __DIR__ . '/header.php';
?>
<section class="page-banner">
  <img src="<?php echo e($service['image']); ?>" alt="<?php echo e($service['alt']); ?>">
  <div class="page-banner-copy">
    <p class="eyebrow"><?php echo e($service['coverage']); ?></p>
    <h1><?php echo e($service['name']); ?></h1>
    <p class="lede"><?php echo e($service['coverage_note']); ?></p>
    <a class="btn btn-primary" href="index.php?service=<?php echo urlencode($service['name']); ?>#enquiry">Enquire about this</a>
  </div>
</section>

<section class="service-page">
  <div class="detail-copy">
    <p><?php echo e($service['summary']); ?></p>
    <div class="detail-lists">
      <div>
        <h3>Included</h3>
        <ul>
          <?php foreach ($service['included'] as $item): ?>
            <li><?php echo e($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h3>Typical jobs</h3>
        <ul>
          <?php foreach ($service['jobs'] as $job): ?>
            <li><?php echo e($job); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="service-gallery">
    <?php foreach ($service['gallery'] as $photo): ?>
      <img src="<?php echo e($photo['src']); ?>" alt="<?php echo e($photo['alt']); ?>">
    <?php endforeach; ?>
  </div>
</section>

<section class="more-services">
  <div class="section-heading">
    <p class="eyebrow">Also from <?php echo e($site['name']); ?></p>
    <h2>The other services.</h2>
  </div>
  <div class="card-grid more-grid">
    <?php foreach ($services as $other): ?>
      <?php if ($other['slug'] === $service['slug']) { continue; } ?>
      <a class="service-card" href="<?php echo e(service_href($other)); ?>">
        <img src="<?php echo e($other['image']); ?>" alt="<?php echo e($other['alt']); ?>">
        <span class="card-body">
          <h3><?php echo e($other['name']); ?></h3>
          <p class="coverage"><?php echo e($other['coverage']); ?></p>
          <span class="card-link">Open this service</span>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/footer.php'; ?>
