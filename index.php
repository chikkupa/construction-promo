<?php

declare(strict_types=1);

$active = 'home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <img class="hero-photo" src="images/hero-home.jpg" alt="A modern Kerala concrete house with a flat roof, porch, and coconut palms">
  <div class="hero-copy">
    <p class="eyebrow">For the house</p>
    <h1><?php echo e($site['tagline']); ?></h1>
    <p class="lede">A house needs a sound structure, dry rooms, a layout that fits daily life, walls that are properly finished, and a roof that can carry its own power.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="#enquiry">Get a quote</a>
      <a class="btn btn-line" href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
</section>

<section class="intro">
  <div class="intro-copy">
    <p class="eyebrow">The work</p>
    <h2>From the structure to the rooms, the paint, and the roof.</h2>
    <p>Each part of that work is handled as its own job. We look at the house first, agree what is included, and only then start. New builds, repairs, and the finishes that make a place feel complete all follow the same path.</p>
    <a class="text-link" href="services.php">See the services</a>
  </div>
  <img src="images/site-visit.jpg" alt="Two people talking on the concrete porch of a Kerala house">
</section>

<section class="services-preview">
  <div class="section-heading">
    <p class="eyebrow">Services</p>
    <h2>Five ways we look after a home.</h2>
  </div>
  <div class="card-grid">
    <?php foreach ($services as $service): ?>
      <a class="service-card" href="<?php echo e(service_href($service)); ?>">
        <img src="<?php echo e($service['image']); ?>" alt="<?php echo e($service['alt']); ?>">
        <span class="card-body">
          <h3><?php echo e($service['name']); ?></h3>
          <p><?php echo e($service['summary']); ?></p>
          <span class="card-link">See this service</span>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="steps">
  <div class="section-heading">
    <p class="eyebrow">How it works</p>
    <h2>A clear path from the first call to the last coat.</h2>
  </div>
  <ol class="step-list">
    <li>
      <span>1</span>
      <h3>Share details</h3>
      <p>Tell us the service, the locality, and what the house needs.</p>
    </li>
    <li>
      <span>2</span>
      <h3>Site visit</h3>
      <p>We look at the place so the quote matches the actual work.</p>
    </li>
    <li>
      <span>3</span>
      <h3>Written quote</h3>
      <p>You get a quote that lists what is included before anyone starts.</p>
    </li>
    <li>
      <span>4</span>
      <h3>The work</h3>
      <p>The job is carried out, then the site is cleaned before we leave.</p>
    </li>
  </ol>
</section>

<section class="reasons">
  <div class="section-heading">
    <p class="eyebrow">Why <?php echo e($site['name']); ?></p>
    <h2>The house stays the point of the job.</h2>
  </div>
  <div class="reason-grid">
    <article>
      <h3>A visit before the quote</h3>
      <p>Prices follow what we see on site, not a guess from a phone description.</p>
    </article>
    <article>
      <h3>The scope in writing</h3>
      <p>Materials, areas, and the work itself are listed so both sides know the job.</p>
    </article>
    <article>
      <h3>Cleanup when we finish</h3>
      <p>Floors, fittings, and the work area are left clear at the end of the visit.</p>
    </article>
  </div>
</section>

<?php require __DIR__ . '/includes/enquiry-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
