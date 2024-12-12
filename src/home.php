<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Marketplace!</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('images/christmas-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #90EE90;
            text-align: center;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #008080;
            color: #ADD8E6;
            padding: 15px 30px;
            font-size: 20px;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #008080;
        }

        /* Add styles for colored text */
        .welcome-text {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .welcome-red {
            color: #FFEB3B; /* Red color */
        }

        .welcome-yellow {
            color: #FFEB3B; /* Yellow color */
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-text">
            <span class="welcome-red">Welcome to the</span>
            <span class="welcome-yellow">Marketplace!</span>
        </h1>
        <p>Explore products from different categories:</p>
        <div class="btn-container">
            <a href="christmas.php" class="btn">Christmas Products</a>
            <a href="photography.php" class="btn">Photography Products</a>
            <a href="tech.php" class="btn">Tech Products</a>
            <a href="software.php" class="btn">Software Products</a>
        </div>
        <div class="auth-container">
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Register</a>
    </div>
    <div class="best-seller-container">
    <a href="best_seller.php" class="btn best-seller-btn">Best Sellers of the Marketplace</a>
</div>
</div>
    </div>
</body>
</html>
