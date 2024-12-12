<?php
include 'db.php'; // Include database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Products</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to styles.css -->
</head>
<body>
    <h1>Top 5 Products</h1>
    <?php
    // Fetch the top 5 products based on visits
    $result = $conn->query("SELECT * FROM products ORDER BY visits DESC LIMIT 5");

    if ($result->num_rows > 0) {
        echo "<div class='product-container'>"; // Add a container for styling
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-card'>"; // Individual product card
            echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<p class='visits'><strong>Visits:</strong> " . $row['visits'] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No top products found.</p>";
    }

    // Link back to all products
    echo "<h2><a href='index.php'>Back to All Products</a></h2>";
    ?>
</body>
</html>
