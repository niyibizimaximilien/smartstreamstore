<!-- filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/contact.php -->
<?php include 'includes/home_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SmartStreamStore</title>
    <link rel="stylesheet" href="public/styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <style>
        contact-page {
    padding: 20px 0;
}

.contact-info {
    background-color: #f4f4f4;
    padding: 40px 20px;
    text-align: center;
}

.contact-info h1 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
}

.contact-info p {
    font-size: 18px;
    margin-bottom: 20px;
    color: #555;
}

.contact-info .contact-details p {
    font-size: 16px;
    margin: 10px 0;
    color: #333;
}

.contact-info .social-links a {
    color: #333;
    font-size: 20px;
    margin: 0 10px;
    transition: color 0.3s ease;
}

.contact-info .social-links a:hover {
    color: #f39c12;
}

.contact-form {
    padding: 40px 20px;
    background-color: #fff;
    text-align: center;
}

.contact-form h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.contact-form form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form label {
    font-size: 16px;
    color: #333;
    text-align: left;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form textarea {
    height: 120px;
    resize: none;
}

.contact-form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.success-message {
    color: #28a745;
    font-size: 16px;
    margin-bottom: 20px;
}
.contact-form button:hover {
    background-color: #0056b3;
}

/* Responsive Contact Page */
@media (max-width: 768px) {
    .contact-info, .contact-form {
        padding: 20px;
    }

    .contact-form form {
        width: 100%;
    }
}
    </style>
    <main class="contact-page">
        <section class="contact-info">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We’d love to hear from you! Reach out to us using the form below or through our contact details.</p>
                <div class="contact-details">
                    <p><i class="fas fa-envelope"></i> Email: support@smartstreamstore.com</p>
                    <p><i class="fas fa-phone"></i> Phone: +123 456 7890</p>
                    <p><i class="fas fa-map-marker-alt"></i> Address: 123 Smart Street, Tech City</p>
                </div>
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <div class="container">
                <h2>Send Us a Message</h2>
                <form action="process_contact.php" method="POST">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>

                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

                    <button type="submit">Send Message</button>
                                        <?php if (isset($_GET['success'])): ?>
                        <p class="success-message">Thank you for your message! We will get back to you soon.</p>
                    <?php endif; ?>
                </form>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
<script src="public/scripts/home.js"></script>
</body>
</html>