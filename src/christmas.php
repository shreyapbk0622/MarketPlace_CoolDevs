<?php
include 'db.php'; // Include database connection

// Fetch all Christmas products
$product_query = $conn->prepare("SELECT * FROM products WHERE company = 'Christmas'");
$product_query->execute();
$product_result = $product_query->get_result();

if ($product_result->num_rows === 0) {
    die("No Christmas products available.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Christmas Products</h1>
    <a href="home.php" class="btn">Home</a>
    <a href="top_christmas.php" class="btn">Top 5 Visited Products</a>
    <div class="product-container">
        <?php while ($product = $product_result->fetch_assoc()): ?>
            <div class="product-card">
                <a href="product.php?id=<?php echo $product['id']; ?>"> <!-- Link to product details -->
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="width: 100%; max-width: 200px;">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                </a>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <p><strong>Visits:</strong> <?php echo $product['visits']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
