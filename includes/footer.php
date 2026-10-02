<?php

declare(strict_types=1);
?>
  </main>
  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-brand">
        <p class="logo"><?php echo e($site['name']); ?></p>
        <p><?php echo e($site['tagline']); ?></p>
        <p>Work for the structure, the wet areas, the rooms, the paint, and the roof.</p>
      </div>
      <div>
        <h2>Explore</h2>
        <a href="index.php">Home</a>
        <?php foreach ($services as $navService): ?>
          <a href="<?php echo e(service_href($navService)); ?>"><?php echo e($navService['name']); ?></a>
        <?php endforeach; ?>
        <a href="index.php#enquiry">Get a quote</a>
        <a href="enquiries.php">Saved enquiries</a>
      </div>
      <div>
        <h2>Quick contact</h2>
        <p>If you have a house to plan, call or message us.</p>
        <a href="tel:<?php echo e($site['phone_tel']); ?>"><?php echo e($site['phone_display']); ?></a>
        <a href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener">WhatsApp</a>
      </div>
    </div>
  </footer>
  <div class="sticky-contact">
    <a href="tel:<?php echo e($site['phone_tel']); ?>">Call</a>
    <a href="<?php echo e(whatsapp_url()); ?>" target="_blank" rel="noopener">WhatsApp</a>
  </div>
</body>
</html>
