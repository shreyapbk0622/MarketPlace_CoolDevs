<?php
include 'db.php'; // Include database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>All Products</h1>
    <?php
    // Fetch all products, grouped by company
    $result = $conn->query("SELECT * FROM products ORDER BY company, id");

    if ($result->num_rows > 0) {
        $currentCompany = ''; // To track company grouping
        echo "<div class='product-container'>";
        while ($row = $result->fetch_assoc()) {
            // Display company heading if it changes
            if ($currentCompany !== $row['company']) {
                if ($currentCompany !== '') {
                    echo "</div>"; // Close previous company's product group
                }
                $currentCompany = $row['company'];
                echo "<h2>" . htmlspecialchars($currentCompany) . " Products</h2>";
                echo "<div class='product-group'>";
            }
            // Display individual product
            echo "<div class='product-card'>";
            echo "<a href='product.php?id=" . $row['id'] . "'>"; // Link to product details
            echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "</a>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<p class='visits'><strong>Visits:</strong> " . $row['visits'] . "</p>";
            echo "</div>";
        }
        echo "</div></div>"; // Close last company's product group and container
    } else {
        echo "<p>No products available.</p>";
    }
    ?>
</body>
</html>
