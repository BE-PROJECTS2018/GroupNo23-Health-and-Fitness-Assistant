<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("/w3images/mac.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body  {
	background-color: #b3ecff; 
    background-image: url("g.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%;}
</style>

</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
  <?php
            session_start();
	 
	 ?>

    <a href="#home" class="w3-bar-item w3-button w3-wide">HFA</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="fake.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> LOGOUT</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-user"></i>Welcome <?php echo $_SESSION['user_name'] ?></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<div class="container">
	<div class="row">
	    <div class="col-md-12"><H1>hi</h1>
	    </div>
	  </div>
	  <h1 style="font-family:AlgerianRegular; ">CHOOSE GOALS AND TARGETS</h1>
	  
	  <div class="panel-group" id="accordion">
	  	<div class="panel panel-default">
	  		<div class="panel-heading" >
	  			<h4 class="panel-title">
	  				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
	  									<H2>LOOSE FAT</H2>
	  				</a>
	  			</h4>
	  		</div>
	  		<div id="collapse1" class="panel-collapse collapse in">
	  			<div class="panel-body" style="background-color:white;  ">
	  				<div class="col-md-6">
	  					<h3 style= " font-style: oblique; font-family:Courier, Courier, monospace "><B><font color="black">If you've plateaued in your weight loss plan, try these simple, expert-approved tricks that boost metabolism and burn fat — no crazy diets or weird workouts required.</B></h3><h1><button type="button" class="btn btn-warning"><h4>Select</h4></button></h1>
	  				</div>
	  				<div class="col-md-6"><img src="lf.jpg" style="width: 100%; height: 350px;">
	  				</div>
	  			</div>
	  		</div>
	   </div>
	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h4 class="panel-title">
	    			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><H2>LEAN BODY</H2></a>
	    		</h4>
	    	</div>
	    	<div id="collapse2" class="panel-collapse collapse">
	    		<div class="panel-body" style="background-color:white;  ">
	    			<div class="col-md-6"><h3 style= " font-style: oblique; font-family:Courier, Courier, monospace "><B><font color="black">These diets and exercises have it all included. Instead of starting with no idea where you'll end up, act as if you've hit your target. Follow the principles ,to build the body you want.</h3><h1><button type="button" class="btn btn-warning"><h4>Select</h4></button></h1>
	    			</div>
	    			<div class="col-md-6"><img src="ll.jpg" style="width: 100%; height: 350px;">
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h4 class="panel-title">
	    			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><H2>GAIN MUSCLES </H2></a>
	    		</h4>
	    	</div>
	    	<div id="collapse3" class="panel-collapse collapse">
	    		<div class="panel-body" style="background-color:white;  ">
	    			<div class="col-md-6"><h3 style= " font-style: oblique; font-family:Courier, Courier, monospace "><B><font color="black">Tired of being known as the 'skinny person' ? Then try these muscle gaining tips to combat your fast metabolism and achieve the mass you want!</h3><h1><button type="button" class="btn btn-warning"><h4>Select</h4></button></h1>
	    			</div>
	    			<div class="col-md-6"><img src="gm.jpg" style="width: 100%; height: 350px;">
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div> 
</div>
    
</body>
</html>


<!-- Navbar (sit on top) -->

<!--

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
<img src="ud.jpg" style="width: 100%;height: 450px"> 	
<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-4">
			<div class="panel-group" id="panel-19">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-19" href="#panel-element-46">Collapsible Group Item #1</a>
					</div>
					<div id="panel-element-46" class="panel-collapse collapse in">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-19" href="#panel-element-28">Collapsible Group Item #2</a>
					</div>
					<div id="panel-element-28" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div> 
			<button type="button" class="btn btn-default">
				Default
			</button>
		</div>
		<div class="col-md-4">
			<div class="panel-group" id="panel-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-10" href="#panel-element-91">Collapsible Group Item #1</a>
					</div>
					<div id="panel-element-91" class="panel-collapse collapse in">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-10" href="#panel-element-49">Collapsible Group Item #2</a>
					</div>
					<div id="panel-element-49" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div> 
			<button type="button" class="btn btn-default">
				Default
			</button>
		</div>
		<div class="col-md-4">
			<div class="panel-group" id="panel-75">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-75" href="#panel-element-92">Collapsible Group Item #1</a>
					</div>
					<div id="panel-element-92" class="panel-collapse collapse in">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-75" href="#panel-element-88">Collapsible Group Item #2</a>
					</div>
					<div id="panel-element-88" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div> 
			<button type="button" class="btn btn-default">
				Default
			</button>
		</div>
	</div>
</div>
</body>
</html>