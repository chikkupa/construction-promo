<?php

declare(strict_types=1);

$pageTitle = 'Services — HavenBuild';
$active = 'services';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner">
  <img src="images/hero-home.jpg" alt="">
  <div class="page-banner-copy">
    <p class="eyebrow">Services</p>
    <h1>Work for the structure, the rooms, and the roof.</h1>
    <p class="lede"><?php echo e($site['service_area']); ?>. Pick a service, or send an enquiry and we will help you sort which one fits.</p>
  </div>
</section>

<section class="service-index">
  <div class="section-heading">
    <p class="eyebrow">Choose a service</p>
    <h2>Each one has its own page.</h2>
  </div>
  <div class="card-grid">
    <?php foreach ($services as $service): ?>
      <a class="service-card" href="<?php echo e(service_href($service)); ?>">
        <img src="<?php echo e($service['image']); ?>" alt="<?php echo e($service['alt']); ?>">
        <span class="card-body">
          <h3><?php echo e($service['name']); ?></h3>
          <p><?php echo e($service['promise']); ?></p>
          <span class="card-link">Open this service</span>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
