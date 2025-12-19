<?php
// register.php (procedural)

$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$errors   = [];

// Aturan saat ini: username 6–12 karakter, email valid
if (strlen($username) < 6 || strlen($username) > 12) {
    $errors['username'] = 'Username must be between 6 and 12 characters';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
}

if ($errors) {
    // tampilkan error
} else {
    // simpan data
}
?>
