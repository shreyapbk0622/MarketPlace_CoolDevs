<?php
include 'db.php'; // Include database connection

// Fetch top 5 visited Christmas products
$product_query = $conn->prepare("SELECT * FROM products WHERE company = 'Photography' ORDER BY visits DESC LIMIT 5");
$product_query->execute();
$product_result = $product_query->get_result();

if ($product_result->num_rows === 0) {
    die("No products available for Photography.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Visited Photography Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Top 5 Visited Photography Products</h1>
    <a href="photography.php" class="btn">Return to Photography Products</a>
    <a href="home.php" class="btn">Home</a>
    <div class="product-container">
        <?php while ($product = $product_result->fetch_assoc()): ?>
            <div class="product-card">
                <a href="product.php?id=<?php echo $product['id']; ?>">
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
