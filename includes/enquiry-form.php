<?php

declare(strict_types=1);

$selectedService = '';
if (isset($_GET['service'])) {
    $requested = trim($_GET['service']);
    if (find_service($requested)) {
        $selectedService = $requested;
    }
}

$error = isset($_GET['error']) ? $_GET['error'] : '';
$sent = isset($_GET['sent']) && $_GET['sent'] === '1';
?>
<section class="enquiry" id="enquiry">
  <div class="enquiry-visual">
    <img src="images/site-visit.jpg" alt="A conversation on the concrete porch of a Kerala house before work starts">
    <div class="enquiry-copy">
      <p class="eyebrow">Request a quote</p>
      <h2>Tell us about the house.</h2>
      <p>Tell us the town and the job. We will come and look before we quote.</p>
      <p class="enquiry-phone"><a href="tel:<?php echo e($site['phone_tel']); ?>"><?php echo e($site['phone_display']); ?></a></p>
    </div>
  </div>
  <div class="enquiry-panel">
    <?php if ($sent): ?>
      <div class="form-success" role="status">
        <p class="success-title">Thank you. We have your enquiry.</p>
        <p>It is saved with HavenBuild. We will use the phone number you gave to get back to you.</p>
        <a class="btn btn-primary" href="index.php#enquiry">Send another</a>
      </div>
    <?php else: ?>
      <?php if ($error === 'missing' || $error === 'service' || $error === 'phone'): ?>
        <p class="form-error" role="alert">
          <?php
          if ($error === 'service') {
              echo 'Please choose one of the five services.';
          } elseif ($error === 'phone') {
              echo 'Please enter a phone number with at least 10 digits.';
          } else {
              echo 'Please add your name and phone number.';
          }
          ?>
        </p>
      <?php elseif ($error === 'save'): ?>
        <p class="form-error" role="alert">We could not save that just now. Please call <?php echo e($site['phone_display']); ?>.</p>
      <?php endif; ?>
      <form class="enquiry-form" action="save-enquiry.php" method="post">
        <label>
          Name
          <input type="text" name="name" maxlength="120" required autocomplete="name">
        </label>
        <label>
          Phone
          <input type="tel" name="phone" maxlength="20" required autocomplete="tel" placeholder="+91 90000 00000">
        </label>
        <label>
          Service
          <select name="service" required>
            <option value="">Choose a service</option>
            <?php foreach ($services as $service): ?>
              <option value="<?php echo e($service['name']); ?>"<?php echo $selectedService === $service['name'] ? ' selected' : ''; ?>>
                <?php echo e($service['name']); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <label>
          Locality
          <input type="text" name="locality" maxlength="120" autocomplete="address-level2" placeholder="Town in Kerala">
        </label>
        <label>
          Message
          <textarea name="message" maxlength="2000" rows="4" placeholder="What needs doing, and roughly when?"></textarea>
        </label>
        <button class="btn btn-primary" type="submit">Submit Request</button>
      </form>
    <?php endif; ?>
  </div>
</section>
