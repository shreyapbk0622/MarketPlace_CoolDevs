<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : null;
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : null;
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;
    $review_text = isset($_POST['review_text']) ? trim($_POST['review_text']) : '';

    // Check if product_id exists
    if ($product_id === null || $user_id === null || $rating === null || empty($review_text)) {
        die("Error: All fields are required.");
    }

    $product_check_query = $conn->prepare("SELECT id FROM products WHERE id = ?");
    $product_check_query->bind_param("i", $product_id);
    $product_check_query->execute();
    $product_check_result = $product_check_query->get_result();

    if ($product_check_result->num_rows === 0) {
        die("Error: The product ID does not exist.");
    }

    // Check if rating is valid
    if ($rating < 1 || $rating > 5) {
        die("Error: Rating must be between 1 and 5.");
    }

    // Insert the review
    $stmt = $conn->prepare("INSERT INTO reviews (product_id, user_id, rating, review_text) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $product_id, $user_id, $rating, $review_text);

    if ($stmt->execute()) {
        // Redirect back to the product page
        header("Location: product.php?id=" . $product_id);
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
