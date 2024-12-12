<?php
include 'db.php';

// Update the password for each user
$users = [
    1 => 'password123', // id => plain text password
    2 => 'password123'
];

foreach ($users as $id => $plain_password) {
    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
    $stmt->bind_param("si", $hashed_password, $id);
    $stmt->execute();
}

echo "Passwords updated successfully!";
?>
