<?php
$messageSaved = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    

    $messageSaved = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Heavenly Beauty</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="banner">
        <img src="resources/mainBanner.png" alt="Heavenly Beauty Banner">
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="skin.html">Skin</a></li>
            <li><a href="hair.html">Hair</a></li>
            <li><a href="teeth.html">Teeth Whitening</a></li>
            <li><a href="story.html">My Story</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2024 Heavenly Beauty. All rights reserved.</p>
</footer>
<?php if ($messageSaved): ?>
    <script>
        alert('Your message has been saved.Thank you for contacting us!');
    </script>
<?php endif; ?>
</body>
</html>
