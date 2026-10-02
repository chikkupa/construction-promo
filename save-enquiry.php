<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#enquiry');
    exit;
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$service = isset($_POST['service']) ? trim($_POST['service']) : '';
$locality = isset($_POST['locality']) ? trim($_POST['locality']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name === '' || $phone === '' || strlen($name) > 120) {
    header('Location: index.php?error=missing#enquiry');
    exit;
}

$digits = preg_replace('/\D+/', '', $phone);
if ($digits === null || strlen($digits) < 10 || strlen($digits) > 15 || strlen($phone) > 20) {
    header('Location: index.php?error=phone#enquiry');
    exit;
}

if (!find_service($service)) {
    header('Location: index.php?error=service#enquiry');
    exit;
}

if (strlen($locality) > 120 || strlen($message) > 2000) {
    header('Location: index.php?error=missing#enquiry');
    exit;
}

try {
    $statement = db()->prepare(
        'INSERT INTO enquiries (name, phone, service, locality, message)
         VALUES (:name, :phone, :service, :locality, :message)'
    );
    $statement->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':service' => $service,
        ':locality' => $locality === '' ? null : $locality,
        ':message' => $message === '' ? null : $message,
    ]);
} catch (Exception $exception) {
    header('Location: index.php?error=save#enquiry');
    exit;
}

header('Location: index.php?sent=1#enquiry');
exit;
