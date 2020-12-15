<!DOCTYPE html>
<html>
<head>
	<title>prescription</title>
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="prescription.php"><i class="fa fa-plus-square" aria-hidden="true"></i>MEDICO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="project.php">HOME</a></li>
        <li><a href="categories.php">CATEGORIES</a></li>
        <li><a href="emergency.php">EMERGENCY</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <!-- <span class="caret"></span>--></a> 
          <ul class="dropdown-menu">
            <li><a id="signup" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>SIGNUP</a></li>
             <li><a id="login" href="login.php"><i class="fa fa-user-plus" aria-hidden="true"></i>LOGIN</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <form role="form"  method="post" class="prescription">
<p id="main"><h1 id="h1" align="center">PRESCRIPTION</h1></p>
<div class="container">
	<div class="row">
	<div class="col-sm-6">
 <!--<ul id="pr">
	<li><div>ACID REDUCERS</div></li>
	<p></p>
	<li><div>ALLERGIES</div></li>
	<p></p>
	<li><div>PAIN RELIEVERS</div></li>
	<p></p>
	<li><div>ANTI-DEPRESSANTS</div></li>
	<p></p>
	<li><div>ANTI-HISTAMINES</div></li>
	<p></p>
	<li><div>ANTI-ITCH-MEDICINES</div></li>
	<p></p>
	<li><div>ANTI-TB-MEDICINES</div></li>
	<p></p>
	</ul>--><p><input type="radio" name="myradio" value="ACID REDUCERS">ACID REDUCERS</p>
		<p><input type="radio" name="myradio" value="ALLERGIES">ALLERGIES</p>
		<p><input type="radio" name="myradio" value="PAIN RELIEVERS">PAIN RELIEVERS</p>
		<p><input type="radio" name="myradio" value="ANTI-DEPRESSANTS">ANTI-DEPRESSANTS</p>
		<p><input type="radio" name="myradio" value="ANTI-HISTAMINES">ANTI-HISTAMINES</p>
		<p><input type="radio" name="myradio" value="ANTI-ITCH-MEDICINES">ANTI-ITCH-MEDICINES</p>
		<p><input type="radio" name="myradio" value="ANTI-TB-MEDICINES">ANTI-TB-MEDICINES</p>
		
	</div>
	
	<div class="col-sm-6">
	<!--<li><div>ANTIBIOTICS</div></li>
	<p></p>
	<li><div>COLD & FLU</div></li>
	<p></p>
	<li><div>CONSTIPATION</div></li>
	<p></p>
	<li><div>DIABETES</div></li>
	<p></p>
	<li><div>HYPERTENSION</div></li>
	<p></p>
	<li><div>SKIN-DISEASES</div></li>
	<p></p>
	<li><div>OBESITY</div></li>
	</div></ul>
</ul>-->
<p><input type="radio" name="myradio" value="ANTIBIOTICS">ANTIBIOTICS</p>
		<p><input type="radio" name="myradio" value="COLD & FLU">COLD & FLU</p>
		<p><input type="radio" name="myradio" value="CONSTIPATION">CONSTIPATION</p>
		<p><input type="radio" name="myradio" value="DIABETES">DIABETES</p>
		<p><input type="radio" name="myradio" value="HYPERTENSION">HYPERTENSION</p>
		<p><input type="radio" name="myradio" value="SKIN-DISEASES">SKIN-DISEASES</p>
		<p><input type="radio" name="myradio" value="OBESITY">OBESITY</p>
</div>
<br>
<button type="submit" class="btn" >SHOW MEDICINES</button>
<br>
<br>

       
            	 
				                        <div class="form-group">
				                        <p>Select area from where you want to buy medicine</p>	 
       									 <select id="select" name ="dropdown1">
				                        <option name = "one" value="1">LAXMI ROAD</option>
				                        	<option name = "two" value="2">CAMP</option>
				                        	<option name = "three" value="3">KOREGAON PARK</option>
				                        	<option name = "four" value="4">SINHAGAD ROAD</option>
				                        	<option name = "five" value="5">WARJE</option>
				                        	<option name = "six" value="6">AUNDH</option>
				                        	<option name = "seven" value="7">BAVDHAN</option>
				                        	<option name = "eight" value="8">BANER</option>
				                        	<option name = "nine" value="9">KOTHRUD</option>
				                        	<option name = "ten" value="10">HADAPSAR</option>
				                        	</select>


				                        </div>
<!-- <p><h5 align="left">*ALL THE ABOVE ARE AVIALABLE WITH ALL OUR PARTNER STORES</h5></p> -->

</div>



</body>
</html>