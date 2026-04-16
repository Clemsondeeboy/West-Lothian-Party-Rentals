<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css"> -->
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>West Lothian Party Rentals</title>
<link rel="shortcut icon" href="images/WEST_LOGO-removebg-preview 1.png" type="image/x-icon">

</head>

<body>
 <?php include('header.php'); ?>
<div class="banner-section">
  <div class="container">
    <div class="banner-text">
       <h2>CONTACT  <img class="img-fluid" src="images/contact-icon.png" alt=""></h2>
    </div>
  </div>
</div>


<section class="contact-section">
  <div class="container">
<div class="row">
    <div class="col-md-6 contact-left">

      <p class="contact-small">Contact <img class="img-fluid" src="images/contact-icon.png" alt=""></p>

      <h2 class="contact-title">
        Send Us A Message And Will <br>
        Respond As Soon As Possible
      </h2>

    <?php if(isset($error)) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
      </div>
    <?php } ?>

    <?php if(isset($success)) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
      </div>
    <?php } ?>

    
      <form class="contact-form" action="proc_contact.php" method="POST">

  <div class="form-row">
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" placeholder="Enter name">
    </div>

    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" id="lastname" name="lastname" placeholder="Enter name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="phone">Phone number</label>
      <input type="text" id="phone" name="phone" placeholder="Enter number">
    </div>
  </div>

  <div class="form-group full-width">
    <label for="message">Message</label>
    <textarea id="message" name="msg" placeholder="Type your message"></textarea>
  </div>

  <div class="s mt-3 mb-4">
    <button class="submit-btn" type="submit">Submit</button>
  </div>

</form>

    </div>



    <div class="col-md-6 contact-right">

      <h3>Need Any Help</h3>
      <p>Call Us Today or message, we'll Respond As Soon As Possible</p>

      <div class="contact-info">

        <div class="info-box">
          <div class="icon"><i class="fa-solid fa-phone"></i></div>
          <span>+447737706697</span>
        </div>

        <div class="info-box">
          <div class="icon"><i class="fa-solid fa-envelope"></i></div>
          <span>info@westlothian.com</span>
        </div>

        <div class="info-box">
          <div class="icon"><i class="fa-solid fa-map-marker-alt"></i></div>
          <span>2 Bridge close london</span>
        </div>

      </div>

      <div class="map">
        <iframe
          src="https://maps.google.com/maps?q=West%20Lothian&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
      </div>

    </div>
    </div>
  </div>
</section>


<?php include('footer.php'); ?>
<!-- <script src="dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>