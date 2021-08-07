<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"/>
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<style>
  </style>
  
  <body>	
<!----navbar start here--->
	<?php
	include 'includes/navbar.php';
	?>
	<!----navbar end here--->
<!--image slider start -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img9.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Baleno</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Swift</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img8.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Toyoto</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br>
	<!-- image slider end-->
	
	<!----service start here---->
	<section>
	  <div class="container">
	    <h1 style="font-family: 'Poppins', sans-serif;font-size:50px;">Our Services</h1>
		<br>
	  </div>
	  <div class="container">
	    <div class="row">
		  <div class="col-md-6">
		     <div id="service1">
			   <h2 style="color:#ecdb08">Services One</h2>
			   <p>Full stack engineer should know Front-End Technologies and at least one server-side programming languages like Java, Python, PHP, . Net etc. Knowledge of various DBMS technology is another important need of full stack developer. MySQL, MongoDB, Oracle, SQLServer are widely used for this purpose</p>	
			 </div>
		  </div>
		  
		  <div class="col-md-6">
		    <div id="service2">
			<h2 style="color:#ecdb08">Services Two</h2>
			   <p>Full stack engineer should know Front-End Technologies and at least one server-side programming languages like Java, Python, PHP, . Net etc. Knowledge of various DBMS technology is another important need of full stack developer. MySQL, MongoDB, Oracle, SQLServer are widely used for this purpose</p>	
			</div>
		  </div>
		</div>
		<br>
		<div class="row">
		  <div class="col-md-6">
		     <div id="service3">
			 <h2 style="color:#ecdb08">Services Three</h2>
			   <p>Smart Hybrid Technology - The Progressive Next generation Smart Hybrid Technology is in no way different. It has an integrated starter generator with a Lithium-ion and a Lead Acid Battery that gives you an enhanced driving experience. The Torque Assist Function reduces the load on the engine and improves fuel efficiency.
         </p>	
			 </div>
		  </div>
		  
		  <div class="col-md-6">
		    <div id="service4">
			<h2 style="color:#ecdb08">Services Four</h2>
			   <p>Full stack engineer should know Front-End Technologies and at least one server-side programming languages like Java, Python, PHP, . Net etc. Knowledge of various DBMS technology is another important need of full stack developer. MySQL, MongoDB, Oracle, SQLServer are widely used for this purpose</p>	
			</div>
		  </div>
		</div>
	  </div>
	</section>
	<br><br>
	<!----service end here---->
	<!---brands start here---->
	<div class="container">
  <h1  style="font-family: 'Poppins', sans-serif;font-size:50px;" align="center">Our Car Brands</h1><br>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="images/img6.png" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="images/img5.jpeg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="images/img4.png" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>
<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="images/img1.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="images/img11.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="images/img8.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>
<br>
<br>
	<!---brands end here---->
	
	<!-------footer start here----->
	
	<?php
	include 'includes/footer.php';
	?>


  
	<!-------footer end here----->
	
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

  <script src="javascript/script.js"></script>

</body>
</html>