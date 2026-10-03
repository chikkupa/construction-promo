<?php

declare(strict_types=1);

$active = 'home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <img class="hero-photo" src="images/hero-home.jpg" alt="A modern Kerala concrete house with a flat roof, porch, and coconut palms">
  <div class="hero-copy">
    <p class="eyebrow">For the house</p>
    <h1>A concrete house, planned, built, sealed, painted, and powered.</h1>
    <p class="lede">One team for the structure, the wet areas, the rooms, the paint, and the roof.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="#enquiry">Get a quote</a>
      <a class="btn btn-line" href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
</section>

<section class="stats" aria-label="Our record">
  <article class="stat-card" aria-label="10+ years of experience">
    <span class="stat-icon"><?php echo icon('years'); ?></span>
    <p class="stat-value"><span class="count" data-count="10">0</span>+</p>
    <p class="stat-label">Years of experience</p>
  </article>
  <article class="stat-card" aria-label="70+ houses constructed">
    <span class="stat-icon"><?php echo icon('home'); ?></span>
    <p class="stat-value"><span class="count" data-count="70">0</span>+</p>
    <p class="stat-label">Houses constructed</p>
  </article>
  <article class="stat-card" aria-label="500+ homes beautified">
    <span class="stat-icon"><?php echo icon('brush'); ?></span>
    <p class="stat-value"><span class="count" data-count="500">0</span>+</p>
    <p class="stat-label">Homes beautified</p>
  </article>
  <article class="stat-card" aria-label="70+ solar installations">
    <span class="stat-icon"><?php echo icon('sun'); ?></span>
    <p class="stat-value"><span class="count" data-count="70">0</span>+</p>
    <p class="stat-label">Solar installations</p>
  </article>
  <p class="stats-note">A free look at the house, a quote that lists what is included, and the site left clear when the work is done.</p>
</section>

<section class="intro">
  <div class="intro-copy">
    <p class="eyebrow">The work</p>
    <h2>From the structure to the rooms, the paint, and the roof.</h2>
    <p>Each part of that work is its own job. We look at the house first, agree what is included, and only then start.</p>
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
      <h3>One team</h3>
      <p>From the foundation to the last finish.</p>
    </article>
    <article>
      <h3>Written before we start</h3>
      <p>The scope is written down before anyone starts.</p>
    </article>
    <article>
      <h3>Priced from the site</h3>
      <p>The price follows what we see on site.</p>
    </article>
  </div>
</section>

<?php require __DIR__ . '/includes/enquiry-form.php'; ?>
<script src="js/counters.js"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
