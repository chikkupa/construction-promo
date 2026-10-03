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

<section class="service-story">
  <div class="story-copy">
    <p class="eyebrow">The work</p>
    <h2><?php echo e($service['story_title']); ?></h2>
    <?php foreach ($service['story'] as $paragraph): ?>
      <p><?php echo e($paragraph); ?></p>
    <?php endforeach; ?>
  </div>
  <img src="<?php echo e($service['gallery'][0]['src']); ?>" alt="<?php echo e($service['gallery'][0]['alt']); ?>">
</section>

<?php if (!empty($service['choices'])): ?>
<section class="system-choices">
  <div class="section-heading">
    <p class="eyebrow">The system</p>
    <h2>Three ways a house can use the roof.</h2>
  </div>
  <div class="choice-grid">
    <?php foreach ($service['choices'] as $choice): ?>
      <article>
        <h3><?php echo e($choice['title']); ?></h3>
        <p><?php echo e($choice['text']); ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<section class="work-steps">
  <div class="section-heading">
    <p class="eyebrow">In order</p>
    <h2>How the work is carried out.</h2>
  </div>
  <ol class="step-list">
    <?php foreach ($service['steps'] as $index => $step): ?>
      <li>
        <span><?php echo $index + 1; ?></span>
        <h3><?php echo e($step['title']); ?></h3>
        <p><?php echo e($step['text']); ?></p>
      </li>
    <?php endforeach; ?>
  </ol>
</section>

<section class="work-gallery">
  <div class="section-heading">
    <p class="eyebrow">On site</p>
    <h2>A closer look at the work.</h2>
  </div>
  <div class="gallery-grid">
    <?php foreach ($service['gallery'] as $photo): ?>
      <figure>
        <img src="<?php echo e($photo['src']); ?>" alt="<?php echo e($photo['alt']); ?>">
        <figcaption><?php echo e($photo['alt']); ?></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>

<section class="work-scope">
  <article class="scope-card">
    <h2>What is included</h2>
    <ul>
      <?php foreach ($service['included'] as $item): ?>
        <li><?php echo e($item); ?></li>
      <?php endforeach; ?>
    </ul>
  </article>
  <article class="scope-card">
    <h2>Typical jobs</h2>
    <ul>
      <?php foreach ($service['jobs'] as $job): ?>
        <li><?php echo e($job); ?></li>
      <?php endforeach; ?>
    </ul>
  </article>
</section>

<?php if (!empty($service['aftercare'])): ?>
<section class="aftercare">
  <div class="section-heading">
    <p class="eyebrow">After the install</p>
    <h2>The system still has someone to call.</h2>
  </div>
  <div class="choice-grid">
    <?php foreach ($service['aftercare'] as $item): ?>
      <article>
        <h3><?php echo e($item['title']); ?></h3>
        <p><?php echo e($item['text']); ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

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
          <p><?php echo e($other['summary']); ?></p>
          <span class="card-link">Open this service</span>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/footer.php'; ?>
