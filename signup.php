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

/*signup page end here*/
.bg{
    background:url("images/reg.jpg");
    background-position: center;
    background-size:cover;
    background-image: 100%;
   
}
/*signup page end here*/

  </style>
   
  </head>
 </head>
  <body>	
<!----navbar start here--->
	<?php
	include 'includes/navbar.php';
	?>
	<!----navbar end here--->
<!----signup start here--->
<section>
<br><br>
<h1 style=" padding-top:45px; margin-top:20px; font-family:sans-serif">Sign Up</h1>
        
        <div class="container">
           
        <button class="btn btn-outline-info mt-3 " onclick="f1()">REGISTER</button>
         <button class="btn btn-outline-info mt-3" onclick="f2()">LOGIN</button>
         
  
        <form style="display:none" id="login">
            <div class="col-md-4">
			<div class="bg">
                <div class="login-form border  mt-5 p-4  mb-4 rounded">
                    <h2 class="bg">LOGIN FORM</h2>
                    <div class="form-group">
                        <label>EMAIL:</label>
                        <input type="email" class="form-control" placeholder="ENTER EMAIL" required><br>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD:</label>
                        <input type="password" class="form-control" placeholder="ENTER PASSWORD" required><br>
                    </div>
                    <button class="btn btn-primary">LOGIN </button>
                </div>
				</div>	
           </div>
        </div>
    </form>


  <div class=container>
        <form style="display:none" id="register">
            <div class="col-md-4">
			<div class="bg">
                <div class="register-form border mt-5 p-4  mb-4 rounded">
                    <h2>REGISTER FORM</h2>
                    <div class="form-group">
                        <label>NAME:</label>
                        <input type="name" class="form-control" placeholder="ENTER NAME" required><br>
                    </div>
                    <div class="form-group">
                        <label>EMAIL:</label>
                        <input type="email" class="form-control" placeholder="ENTER EMAIL" required><br>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD:</label>
                        <input type="password" class="form-control" placeholder="ENTER PASSWORD" required><br>
                    </div>
                    <div class="form-group">
                        <label> CONFIRM PASSWORD:</label>
                        <input type="password" class="form-control" placeholder="ENTER PASSWORD" required><br>
                    </div>
                    <button class="btn btn-primary">REGISTER</button>
                </div>
				</div>
            </div> 
        </div>
        </form>
		
    </div>
</div>

</section>
	<!----signup end here--->
	<!-------footer start here----->
	
	<?php
	include 'includes/footer.php';
	?>


  
	<!-------footer end here----->
	


  <script src="javascript/script.js"></script>
<script>
        function f1(){
             document.getElementById("login").style.display="none";
             document.getElementById("register").style.display="block";
        }
        function f2(){
             document.getElementById("login").style.display="block";
             document.getElementById("register").style.display="none";
        }
        </script>
</body>
</html>