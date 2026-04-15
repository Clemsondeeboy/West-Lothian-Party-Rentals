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
       <h2>FAQs<img class="img-fluid" src="images/question-mark.png" alt=""></h2>
    </div>
  </div>
</div>


<section class="faq">
  <div class="container">
    <div class="faq-section">
      <div class="faq-header">
        <h3>FREQUENTLY ASKED QUESTIONS</h3>
      </div>
  <div class="faq-item">
    <div class="faq-question">
      01.How far in advance should I book?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      We recommend booking as early as possible to secure availability, especially during peak seasons. For large events, 4–8 weeks in advance is ideal.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      02.Do you provide delivery and setup?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      Yes. We offer professional delivery, setup, and collection services to ensure your event runs smoothly and stress-free.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      03.What areas do you serve?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
     We proudly serve West Lothian and surrounding areas. If you are unsure whether we cover your location, please contact us for confirmation.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      04.Can I hire items for small private events?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      Absolutely. Whether it’s a small garden party or a large wedding celebration, we offer flexible rental solutions to suit events of all sizes.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      05.
Are your marquees and gazebos weather-resistant?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      A deposit is required to confirm your booking, with the balance payable before the event date. Full payment details will be provided in your quotation.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
    06.
What happens in case of bad weather?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      Yes. We can tailor rental packages based on your guest count, event type, and specific requirements.  
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      07.
Do you offer customised packages?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      Our structures are secure and professionally installed. We also advise clients on the best setup options to ensure safety and comfort during unpredictable weather conditions.
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-question">
      08.
What is your payment policy?
      <span class="icon">+</span>
    </div>
    <div class="faq-answer">
      Yes. Our marquees, tents, and gazebos are designed to withstand typical weather conditions, providing reliable shelter from rain, wind, and sun.
    </div>
  </div>

</div>
  </div>
</section>


<?php include('footer.php'); ?>
<!-- <script src="dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
  const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
  item.querySelector(".faq-question").addEventListener("click", () => {
    item.classList.toggle("active");

    const icon = item.querySelector(".icon");
    icon.textContent = item.classList.contains("active") ? "-" : "+";
  });
});
</script>
</body>
</html>