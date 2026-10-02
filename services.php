<?php

declare(strict_types=1);

$pageTitle = 'Home Services in Kollam, Trivandrum and Kerala | HavenBuild';
$pageDescription = 'Construction in Kollam and Trivandrum, waterproofing in Trivandrum and Kollam, painting in both, and interiors and solar across Kerala.';
$pageKeywords = 'construction Kollam, waterproofing Trivandrum, interior design Kerala, painting Kollam Trivandrum, solar panel installation Kerala';
$active = 'services';
require __DIR__ . '/includes/header.php';
?>
<section class="page-banner">
  <img src="images/hero-home.jpg" alt="">
  <div class="page-banner-copy">
    <p class="eyebrow">Services</p>
    <h1>Work for the structure, the rooms, and the roof.</h1>
    <p class="lede">Open a service to see how that job is planned, or send an enquiry and we will help you decide where to begin.</p>
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
          <p><?php echo e($service['summary']); ?></p>
          <span class="card-link">Open this service</span>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
