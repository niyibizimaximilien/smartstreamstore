<!-- filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/includes/home_header.php -->
<header class="home-header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><i class="fas fa-store"></i> SmartStreamStore</a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="admin/index.php"><i class="fas fa-user-shield"></i> Admin</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>
<style>
    /* Home Header Styles */
.home-header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.home-header .logo a {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

.home-header .nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.home-header .nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
}

.home-header .nav ul li a:hover {
    color: #f39c12;
}

/* Mobile Menu Toggle */
.home-header .menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
    color: #fff;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .home-header .nav ul {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        padding: 10px 0;
    }

    .home-header .nav ul.active {
        display: flex;
    }

    .home-header .menu-toggle {
        display: block;
    }
}

</style>