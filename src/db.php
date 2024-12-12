<?php
$host = 'db';
$user = 'user';
$password = 'password';
$database = 'marketplace';

$max_attempts = 5;
$attempt = 0;

while ($attempt < $max_attempts) {
    try {
        $conn = new mysqli($host, $user, $password, $database);

        if ($conn->connect_error) {
            throw new Exception($conn->connect_error);
        }
        // Successful connection
        break;
    } catch (Exception $e) {
        echo "Attempt " . ($attempt + 1) . ": Could not connect to the database. Retrying...\n";
        sleep(5); // Wait 5 seconds before retrying
        $attempt++;
    }
}

if ($attempt === $max_attempts) {
    die("Could not connect to the database after multiple attempts.");
}
?>
