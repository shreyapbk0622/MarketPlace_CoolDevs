<?php
include 'db.php'; // Include database connection

// Check if a product ID is provided
if (!isset($_GET['id'])) {
    die("Product ID not specified.");
}

// Get the product ID from the URL
$product_id = intval($_GET['id']);

// Increment the visits count for the product
$update_visits_query = $conn->prepare("UPDATE products SET visits = visits + 1 WHERE id = ?");
$update_visits_query->bind_param("i", $product_id);
$update_visits_query->execute();

// Fetch product details
$product_query = $conn->prepare("SELECT * FROM products WHERE id = ?");
$product_query->bind_param("i", $product_id);
$product_query->execute();
$product_result = $product_query->get_result();

if ($product_result->num_rows === 0) {
    die("Product not found.");
}

$product = $product_result->fetch_assoc();

// Fetch reviews for the product
$review_query = $conn->prepare("SELECT r.rating, r.review_text, u.name FROM reviews r JOIN users u ON r.user_id = u.id WHERE r.product_id = ?");
$review_query->bind_param("i", $product_id);
$review_query->execute();
$review_result = $review_query->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="product-details">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <a href="home.php" class="btn">Home</a>
        <a href="<?php echo htmlspecialchars($product['company']); ?>.php" class="btn">Return to All Products</a>
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="width: 100%; max-width: 400px; display: block; margin: 20px auto;">
        <p><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
        <p><strong>Visits:</strong> <?php echo $product['visits']; ?></p>
    </div>

    <h2>Reviews</h2>
    <?php if ($review_result->num_rows > 0): ?>
        <ul class="review-list">
            <?php while ($review = $review_result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($review['name']); ?></strong>
                    <span><?php echo htmlspecialchars($review['review_text']); ?></span>
                    <span><strong>Rating:</strong> <?php echo $review['rating']; ?> / 5</span>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No reviews yet. Be the first to leave one!</p>
    <?php endif; ?>

    <h2>Leave a Review</h2>
    <form method="POST" action="review.php" class="review-form">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"> <!-- Ensure product_id is passed -->
        <label for="user_id">Your User ID:</label>
        <input type="number" id="user_id" name="user_id" placeholder="Enter your User ID" required>

        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" placeholder="Rate this product" required>

        <label for="review_text">Review:</label>
        <textarea id="review_text" name="review_text" rows="4" placeholder="Write your review here..." required></textarea>

        <button type="submit">Submit Review</button>
    </form>
</body>
</html>
