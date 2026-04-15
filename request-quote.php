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
       <h2>Request A Quote</h2>
    </div>
  </div>
</div>


<section class="quote-section">
  <div class="container">
<div class="quote-body">
    <h2 class="quote-title">Request A Quote</h2>

    <form>

      <!-- PERSONAL INFORMATION -->
      <h3 class="form-section">Personal Information</h3>

      <div class="form-row">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" placeholder="Enter name">
        </div>

        <div class="form-group">
          <label>Last Name</label>
          <input type="text" placeholder="Enter name">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label>Phone</label>
          <input type="text" placeholder="Enter number">
        </div>
      </div>

      <!-- EVENT DETAILS -->
      <h3 class="form-section">Event Details</h3>

      <div class="form-row">
        <div class="form-group">
          <label>Type of Event</label>
          <select>
            <option>Select type of event</option>
          </select>
        </div>

        <div class="form-group">
          <label>Event start</label>
          <input type="date">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Event end</label>
          <input type="date">
        </div>

        <div class="form-group">
          <label>Event location / city</label>
          <select>
            <option>Select location / city</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Event address</label>
          <input type="text" placeholder="Enter address">
        </div>

        <div class="form-group">
          <label>Number of guest</label>
          <select>
            <option>Select numbers</option>
          </select>
        </div>
      </div>

      <!-- RENTAL DETAILS -->
      <h3 class="form-section">Rental Details</h3>

      <div class="form-row">
        <div class="form-group">
          <label>Items required</label>
          <select>
            <option>Select multiple items</option>
          </select>
        </div>

        <div class="form-group">
          <label>Quantity required</label>
          <select>
            <option>Select quantity</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Do you need a set up</label>
          <select>
            <option>Select yes or no</option>
          </select>
        </div>

        <div class="form-group">
          <label>Delivery required</label>
          <select>
            <option>Select yes or no</option>
          </select>
        </div>
      </div>

      <div class="form-group full">
        <label>Additional notes</label>
        <textarea placeholder="Type your message"></textarea>
      </div>

      <div class="quote-request-b">
        <a href="request-quote.php" class="quote-btn2">Request My Quote</a>
      </div>

    </form>
    </div>
  </div>
</section>


<?php include('footer.php'); ?>
<!-- <script src="dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>