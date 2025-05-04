

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Glamour Cosmetics</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <section class="about">
        <div class="container">
            <h1 class="about-title">About Diva's Bloom</h1>
            <p class="about-description">
                Welcome to Diva's Bloom, your one-stop destination for premium beauty and skincare products. 
                Our mission is to empower individuals to feel confident and radiant by offering a wide range of 
                high-quality cosmetics tailored to every skin type and style.
            </p>
            <div class="about-icons">
                <div class="icon-box">
                    <i class="fas fa-leaf"></i> <!-- Icon for natural products -->
                    <p>Natural Ingredients</p>
                </div>
                <div class="icon-box">
                    <i class="fas fa-heart"></i> <!-- Icon for customer love -->
                    <p>Customer Love</p>
                </div>
                <div class="icon-box">
                    <i class="fas fa-truck"></i> <!-- Icon for fast delivery -->
                    <p>Fast Delivery</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Inline CSS for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdf2f8; /* Light pink background */
        }
        .about {
            text-align: center;
            padding: 50px 20px;
        }
        .about-title {
            font-size: 2.5rem;
            color: #d63384; /* Vibrant pink color */
        }
        .about-description {
            font-size: 1.2rem;
            color: #555;
            margin: 20px 0;
        }
        .about-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }
        .icon-box {
            text-align: center;
        }
        .icon-box i {
            font-size: 2rem;
            color: #d63384; /* Vibrant pink color */
        }
        .icon-box p {
            margin-top: 10px;
            font-size: 1rem;
            color: #333;
        }
    </style>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Font Awesome for icons -->
</body>
</html>

<?php
include 'includes/footer.php'; // Include the footer file
?>
