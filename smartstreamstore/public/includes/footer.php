<!-- filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/includes/footer.php -->

<style>
  .site-footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.site-footer .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}

.site-footer .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
}

.site-footer .footer-logo a {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

.site-footer .footer-links ul {
    list-style: none;
    display: flex;
    gap: 15px;
}

.site-footer .footer-links ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
}

.site-footer .footer-links ul li a:hover {
    color: #f39c12;
}

.site-footer .footer-social a {
    color: #fff;
    font-size: 20px;
    margin: 0 10px;
    transition: color 0.3s ease;
}

.site-footer .footer-social a:hover {
    color: #f39c12;
}

.site-footer .footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    color: #ccc;
}

/* Responsive Footer */
@media (max-width: 768px) {
    .site-footer .footer-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
}
  
</style>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="index.php"><i class="fas fa-store"></i> SmartStreamStore</a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> SmartStreamStore. All rights reserved.</p>
        </div>
    </div>
</footer>