<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">
      <img class="img-fluid" src="images/WEST_LOGO-removebg-preview 1.png" alt="west-logo-removebg">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= in_array($currentPage, ['tables.php', 'marquees.php', 'chairs.php', 'Chafing-Dishes.php']) ? 'active' : ''; ?>"
             href="#" id="rentalsDropdown"
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rentals
          </a>
          <ul class="dropdown-menu" aria-labelledby="rentalsDropdown">
            <li><a class="dropdown-item <?= ($currentPage == 'tables.php') ? 'active' : ''; ?>" href="tables.php">Tables</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'marquees.php') ? 'active' : ''; ?>" href="marquees.php">Marquees, Gazebos & Tent</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'chairs.php') ? 'active' : ''; ?>" href="chairs.php">Chairs</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'Chafing-Dishes.php') ? 'active' : ''; ?>" href="Chafing-Dishes.php">Chafing Dishes</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'faq.php') ? 'active' : ''; ?>" href="faq.php">FAQs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>

    <a href="request-quote.php" class="quote-btn <?= ($currentPage == 'request-quote.php') ? 'active-quote' : ''; ?>">Get A Quote</a>

  </div>
</nav>