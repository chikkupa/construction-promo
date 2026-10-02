<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/db.php';

$pageTitle = 'Enquiries — HavenBuild';
$pageDescription = 'Saved enquiries for HavenBuild.';
$pageKeywords = '';
$noindex = true;
$active = 'enquiries';
require __DIR__ . '/includes/header.php';

$rows = [];
$dbError = false;

try {
    $rows = db()->query('SELECT id, name, phone, service, locality, message, created_at FROM enquiries ORDER BY created_at DESC, id DESC')->fetchAll();
} catch (Exception $exception) {
    $dbError = true;
}
?>
<section class="page-intro">
  <p class="eyebrow">Saved leads</p>
  <h1>Enquiries stored in MySQL.</h1>
  <p class="lede">Each form submission is a row in the havenbuild database. This list is open on the local site so you can review them.</p>
</section>

<section class="enquiry-list">
  <?php if ($dbError): ?>
    <p class="form-error" role="alert">The database is not ready. Import <code>sql/schema.sql</code> and check the credentials in <code>includes/config.php</code>.</p>
  <?php elseif (count($rows) === 0): ?>
    <p class="empty-state">No enquiries yet. When someone sends the form, it will show up here.</p>
  <?php else: ?>
    <table class="leads">
      <thead>
        <tr>
          <th>When</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Service</th>
          <th>Locality</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $row): ?>
          <tr>
            <td data-label="When"><?php echo e(date('d M Y, H:i', strtotime($row['created_at']))); ?></td>
            <td data-label="Name"><?php echo e($row['name']); ?></td>
            <td data-label="Phone"><a href="tel:<?php echo e(preg_replace('/\s+/', '', $row['phone'])); ?>"><?php echo e($row['phone']); ?></a></td>
            <td data-label="Service"><?php echo e($row['service']); ?></td>
            <td data-label="Locality"><?php echo e($row['locality'] !== null && $row['locality'] !== '' ? $row['locality'] : '—'); ?></td>
            <td data-label="Message"><?php echo e($row['message'] !== null && $row['message'] !== '' ? $row['message'] : '—'); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
