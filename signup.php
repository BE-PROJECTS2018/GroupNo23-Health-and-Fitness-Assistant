<?php
// session_start();
//   $_SESSION['user_name'] = 'ts';
//   echo $_SESSION['user_name'];
 ?>


<!DOCTYPE html>
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
    background-image: url("11th.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%;}
</style>

</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">HFA</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<div class="container" >
 <div class="row">
    <div class="col-md-12"><H1>hi</h1>
    </div>
  </div>

  	<?php

	        $db = mysqli_connect("localhost","root","","be_project");
	         session_start();


          if(isset($_POST['Submit']))
  		{
                          session_start();
  			if(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&!empty($_POST['user_name'])&&!empty($_POST['psw'])&&!empty($_POST['psw2'])&&!empty($_POST['email']))
  			{

  				 $first_name = mysqli_real_escape_string($db,$_POST['first_name']);
  				 $last_name = mysqli_real_escape_string($db,$_POST['last_name']);
  				 $user_name = mysqli_real_escape_string($db,$_POST['user_name']);
  				 $psw = mysqli_real_escape_string($db,$_POST['psw']);
  				 $psw2 = mysqli_real_escape_string($db,$_POST['psw2']);
  				 $email = mysqli_real_escape_string($db,$_POST['email']);

                                   if($psw == $psw2)
   				{    echo '1' ;
                                   $psw = md5($psw);
                                   $sql = "insert into user_s(first_name,last_name,user_name,psw,email)VALUES('$first_name','$last_name','$user_name','$psw','$email')";
                                   mysqli_query($db, $sql);
                                   $_SESSION['message'] = "Welcome";
                                   $_SESSION['user_name'] = $user_name;
                                   header("location:welcomenew1.php");
                                   }
                                    else
  				{
                                    $_SESSION['message'] = "Password does not match.";
                                     echo 'Password does not match.';

                                    }



  			}
  			else
  			{
  					echo 'Please fill all fields';
  			}

  		}



                      	if(isset($_POST['Submit1']))
		{

			if(!empty($_POST['user_name'])&&!empty($_POST['psw']))
			{


                                $user_name = mysqli_real_escape_string($db,$_POST['user_name']);
				                         $psw = mysqli_real_escape_string($db,$_POST['psw']);
                                 $psw = md5($psw);


                                 $query = "SELECT *FROM user_s WHERE user_name = '$user_name' AND psw = '$psw'";
                                 $results = mysqli_query($db, $query);
                                 if(mysqli_num_rows($results) == 1){

                                 $_SESSION['message'] = "Welcome";
                                 $_SESSION['user_name'] = $user_name;
                                 header("location:welcomenew1.php");
                                 }

                                  else
									{
                                  $_SESSION['message'] = "Wrong username/password combination";
                                   echo 'Password does not match.';

                                  }



			}
			else
			{
					echo 'Please fill all fields';
			}

		}









?>


  <h2 ><font color="white">SIGN UP</font></h2>
  <h3 ><font color="white">Create a new account</font></h3>
  <!-- Trigger the modal with a button -->
  <button type="button" name = "Signup" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Signup
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >

      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header" style="background-color:  #99ff99;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><b><i>Be a Member!!</i></b></h3>
        </div>
        <div class="modal-body">



          <form method = "POST" action = "signup.php">
             <h3>First name:<br>
              <input type="text" name="first_name" required="please fill your firstname" style="background-color: #f1f1f1;"><br></h3><img src="cartoon1.jpg" style="float: right; width: 46%; height: 400px;" >
              <h3>Last name:<br>
              <input type="text" name="last_name" required="please fill your lastname" style="background-color: #f1f1f1;"><br></h3>

              <h3>User name:<br>
              <input type="text" name="user_name" required="please fill your username" style="background-color: #f1f1f1;"><br></h3>
              <H3> Password:<br>
             <input type="password" name="psw" required="please fill your Password" style="background-color: #f1f1f1;"><br></h3>
             <H3>Re-Enter Password:<br>
             <input type="password" name="psw2" required="please fill your Password" style="background-color: #f1f1f1;"><br></h3>
              <h3> E-mail:<br>
              <input type="email" name="email" style="background-color: #f1f1f1;" required><br></h3>
             <h3><input type="submit" name = "Submit" value="Submit" ></h3>


          </form>
        </div>
        <div class="modal-footer" style="background-color: /*#ffb3b3*/#99ff99 ;">
         <button type="button" ><a href="ud.html">Next</a></button>

        </div>
      </div>

    </div>
  </div>

</div>

<div class="container">
  <h2 ><font color="white">LOG IN</font></h2>
  <h3 ><font color="white">Already existing account</font></h3>
  <!-- Trigger the modal with a button -->
  <button type="button" name = "login"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#lModal">
    login
  </button>

  <!-- Modal -->
  <div class="modal fade" id="lModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:  #99ff99;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" ><b><i>Watch your progress!!</i></b></h3>
        </div>
        <div class="modal-body">


          <form method = "POST" action = "signup.php" ><img src="bb.jpg" style="float: right; width: 46%; height: 150px;" >
             <h3>User name:<br>
              <input type="text" name="user_name" value="" required="please fill your firstname" style="background-color: #f1f1f1;"><br></h3>
              <H3> Password:<br>
             <input type="password" name="psw" value="" required="please fill your firstname" style="background-color: #f1f1f1;"><br><br><br></h3>
               <h3><input type="submit" name = "Submit1" value="Submit" ></h3>
          </form>

        </div>
        <div class="modal-footer" style="background-color: /*#ffb3b3*/#99ff99 ;">
         <button type="button" ><a href="ud.html">O K </a></button>

        </div>
      </div>

    </div>
  </div>

</div>



<div class="container">
  <h2 ><font color="white">Browse</font></h2>
  <h3 ><font color="white">Continue without login</font></h3>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Browse
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
