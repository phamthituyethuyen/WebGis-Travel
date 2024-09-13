<!-- navbar.php -->
<nav class="navbar">
  <div class="logo">
    <img src="images/logo.png" alt="logoN">
  </div>
  <ul class="nav-links">
    <li><a href="index.php">Trang Chủ</a></li>
    <li><a href="map.php">Vi Vu</a></li>
    <li><a href="contact.php">Liên hệ</a></li>
  </ul>
</nav>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #FFFFFF;
    padding: 17px 25px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .logo img {
    height: 80px;
    margin-left: 35px; /* Adjust based on your logo size */
  }

  .nav-links {
    list-style: none;
    display: flex;
    margin: 0;
    padding-right: 100px; /* Added padding-left for spacing */
  }

  .nav-links li {
    margin: 0 40px;
  }

  .nav-links a {
    text-decoration: none;
    color: #333;
    font-size: 1.5em;
    font-weight: bold;
    transition: color 0.3s ease;
  }

  .nav-links a:hover {
    color: #FFA500; /* Change to the hover color you prefer */
  }
</style>
