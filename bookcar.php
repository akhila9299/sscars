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
<!----bookcar start here--->
<!-- about banner-->
<br><br>
	
	<br><br>
	<br>
    <div class="w3-container">
  <h1>Book A Car</h1>
  
</div>

<div class="w3-content" style="max-width:1000px">
  <img class="mySlides" src="images/img1.jpg" style="width:100%">
  <img class="mySlides" src="images/img8.jpg" >
  <img class="mySlides" src="images/img3.jpg" style="width:100%">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/img1.jpg" style="width:100%" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/img8.jpg" style="width:100%" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/img3.jpg" style="width:100%" onclick="currentDiv(3)">
    </div>
  </div>
</div>
	<!----bookcar end here--->
	<!-------footer start here----->
	
	<?php
	include 'includes/footer.php';
	?>


  
	<!-------footer end here----->
	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-border-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-border-red";
}
</script>



  <script src="javascript/script.js"></script>

</body>
</html>