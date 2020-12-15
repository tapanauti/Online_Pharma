<?php
   
   session_start();
   
ob_start();
error_reporting(-1);
ini_set('display_errors', 'On');
   $con = mysqli_connect("localhost","sowhatin_med","medical@123$","sowhatin_medical");
    $error="";
   if (isset($_POST['submit']))    
{   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form :
     
      $myusername = mysqli_real_escape_string($con,$_POST['form-username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['form-password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result);
       
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location: project.php");
         exit();
      }else {
         $error = "Your Login Name or Password is invalid";
         
      }
   }
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="project.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="project.php"><i class="fa fa-plus-square" aria-hidden="true"></i>MEDICO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="project.php">HOME</a></li>
        <!-- <li><a href="#boxes">CATEGORIES</a></li> -->
        <li><a href="#jum">ABOUT</a></li>
       <!-- <li><a href="#contact">CONTACT</a></li>-->
        <li class="dropdown" id="a">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE</a>
          <!-- <span class="caret"></span></a> -->
          <ul class="dropdown-menu">
            
            <li><a id="signup" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>SIGNUP</a></li>
             <li><a id="login" href="login.php"><i class="fa fa-user-plus" aria-hidden="true"></i>LOGIN</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




   <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <h1 id="abc"><strong>LOGIN  </strong></h1>
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form"  method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        
		                    <p><?php echo $error; ?></p>
				                        <button type="submit" name="submit"class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
                        </div>
                        </div>

		                
		                	
	                        
                        </div>
                        </div>
                        </div>
                        
                        

 <div class="jumbotron" id="jum">
    <h1 class="text-center"><strong>ABOUT</strong></h1>  
    <p></p>    
    <p>We are focused on the growing out of pocket prescription market, with a mission to provide affordable healthcare to every Indian. We take pride in providing customers with personalized service. Our highly skilled team of professionals provide the highest quality of care when customers need it most. All our products, prescription drugs and over-the-counter items, are FDA approved and legal for sale in India.<p> The pharmasists we are tied up with are all aproved anfd sell the best in quality products with overthe demand helitary, which gets our customers discount</p></p>
    <p>We strive to make your future a bit secured by providing best in class authentic medications</p>  
    </div> 


   <!-- <div id="contact" class="container">
<br>
<br>
  <h1 class="text-center"><strong>Contact</strong></h1>
  <p class="text-center"><em>We Serve You With Please</em></p>
  <br>
  <div class="row">
    <div class="col-md-4">
      <p>Want us to improve ?? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> PUNE , INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
</div>
</div>
  <br>-->




<footer class="page-footer center-on-small-only unique-color-dark pt-0">

    <div style="background-color: #6351ce;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h2 class="mb-0 white-text"><strong>Get connected with us on social networks!</strong></h2>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0" ><i class="fa fa-facebook white-text mr-lg-4" > </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-lg-4"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-lg-4"> </i></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-6 col-xl-4 mb-r">
                <h3 class="title font-bold"><strong>MEDICO</strong></h3>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>WE BELIEVE IN THE DREAM WHERE EVERYONE IS ABLE TO ACHIEVE EVERY SMALL THING SITTING AT COZY PLACES ANYWHERE.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mb-r">
                <h3 class="title font-bold"><strong>Products</strong></h3>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="categories.html">OTC</a></p>
                <p><a href="categories.html">PERSONAL CARE</a></p>
                <p><a href="categories.html">HEALTH AID</a></p>
                <p><a href="categories.html">BABY AND MOTHER</a></p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-r">
                <h3 class="title font-bold"><strong>Useful links</strong></h3>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="signup.php">SIGN UP</a></p>
                 <p><a href="login.php">Login</a></p>
              
                </div>


   
       

    <!-- Copyright-->
   
    <!--/.Copyright -->
    
</footer>

  <script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


</body>
</html>