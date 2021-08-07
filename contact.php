<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="javascript/script.js">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  </style>
  
  </head>
  <body>	
<!----navbar start here--->
	<?php
	include 'includes/navbar.php';
	?>
	<!----navbar end here--->
<!----contact start here--->
<div class="container">
   <section>
   <br><br>
   <div>
  
  <h1 style=" padding-top:45px; margin-top:20px; font-family:sans-serif">Contact Us</h1>
</div>
  <div class="column">
    <label for="the-name">Your Name</label>
    <input type="text" name="name" id="the-name">

    <label for="the-email">Email Address</label>
    <input type="email" name="email" id="the-email">

    <label for="the-phone">Phone Number</label>
    <input type="tel" name="phone" id="the-phone">

    <label for="the-reason">How can we help you?</label>
    <select name="reason" id="the-reason">
    <option value="">Choose one</option>
    <option value="web">I need web design services</option>
    <option value="video">I need you to produce a video</option>
    <option value="3d">I need 3D polygon things</option>
  </select>
  </div>
  <div class="column">
    <label for="the-message">Message</label>
    <textarea name="message" id="the-message"></textarea>
    <label>
    <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
    </label>
    <input type="submit" value="Send Message">
  </div>
</form>
</div>
</section>
	<!----contact end here--->
	<!-------footer start here----->
	
	<?php
	include 'includes/footer.php';
	?>


  
	<!-------footer end here----->
	


  <script src="javascript/script.js"></script>

</body>
</html>