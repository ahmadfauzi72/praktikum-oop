<?php
// profile_update.php (procedural, diulang lagi)

$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$errors   = [];

// Logika yang sama disalin lagi
if (strlen($username) < 6 || strlen($username) > 12) {
    $errors['username'] = 'Username must be between 6 and 12 characters';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
}

// proses selanjutnya (tampilkan error / update data)
?>
