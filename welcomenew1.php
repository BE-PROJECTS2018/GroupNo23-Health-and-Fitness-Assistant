<?php session_start();
// echo $_SESSION['user_name']; ?>

<?php
// session_start();
echo $_SESSION['user_name'];
echo $_POST['weight'];
echo $_POST['disease'];
       $db = mysqli_connect("localhost","root","","be_project");

     if(isset($_POST['Submit'])){

          $age = mysqli_real_escape_string($db,$_POST['ageName']);
          $user_name  = mysqli_real_escape_string($db,$_SESSION['user_name']);
          $gender = mysqli_real_escape_string($db,($_POST['genderName'] == 'male') ? 1 : 0);
          $veg = mysqli_real_escape_string($db,($_POST['vegName'] == 'VEG') ? 1 : 0);
          $weight = mysqli_real_escape_string($db,($_POST['weight']));
          $height = mysqli_real_escape_string($db,($_POST['height']));
          $bmi = mysqli_real_escape_string($db,($_POST['bmi']));


                  $meaning = $_POST['meaning'];
                 if($_POST['meaning'] == 'healthy')
                 {

                 $healthy = mysqli_real_escape_string($db,1);
                 $overweight = mysqli_real_escape_string($db,0);
                 $obese = mysqli_real_escape_string($db,0);

                 }
                 elseif($_POST['meaning'] == 'overweight')
                 {
                 $healthy = mysqli_real_escape_string($db,0);
                 $overweight = mysqli_real_escape_string($db,1);
                 $obese = mysqli_real_escape_string($db,0);

                 }
                 elseif($_POST['meaning'] == 'obese')
                 {
                 $healthy = mysqli_real_escape_string($db,0);
                 $overweight = mysqli_real_escape_string($db,0);
                 $obese = mysqli_real_escape_string($db,1);

                 }



                 $disease =  mysqli_real_escape_string($db,$_POST['disease']);


                 $bread = mysqli_real_escape_string($db,(isset($_POST['bread'])) ? 1 : 0);
                 $cereals = mysqli_real_escape_string($db,(isset($_POST['cereals'])) ? 1 : 0);
                 $fruits = mysqli_real_escape_string($db,(isset($_POST['fruits'])) ? 1 : 0);
                 $dryfruits = mysqli_real_escape_string($db,(isset($_POST['dryfruits'])) ? 1 : 0);
                 $milkproducts = mysqli_real_escape_string($db,(isset($_POST['milkproducts'])) ? 1 : 0);
                 $tea = mysqli_real_escape_string($db,(isset($_POST['tea'])) ? 1 : 0);
                 $coffee = mysqli_real_escape_string($db,(isset($_POST['coffee'])) ? 1 : 0);
                 $fries = mysqli_real_escape_string($db,(isset($_POST['fries'])) ? 1 : 0);
                 $chapati = mysqli_real_escape_string($db,(isset($_POST['chapati'])) ? 1 : 0);
                 $rice = mysqli_real_escape_string($db,(isset($_POST['rice'])) ? 1 : 0);
                 $leaf_vegetable = mysqli_real_escape_string($db,(isset($_POST['leaf_vegetable'])) ? 1 : 0);
                 $fish = mysqli_real_escape_string($db,(isset($_POST['fish'])) ? 1 : 0);
                 $eggs = mysqli_real_escape_string($db,(isset($_POST['eggs'])) ? 1 : 0);
                 $chicken = mysqli_real_escape_string($db,(isset($_POST['chicken'])) ? 1 : 0);
                 $soup = mysqli_real_escape_string($db,(isset($_POST['soup'])) ? 1 : 0);
                 $bandp = mysqli_real_escape_string($db,(isset($_POST['bandp'])) ? 1 : 0);
                 $desert = mysqli_real_escape_string($db,(isset($_POST['desert'])) ? 1 : 0);



                 $situps = mysqli_real_escape_string($db,(isset($_POST['situps'])) ? 1 : 0);
                 $RC = mysqli_real_escape_string($db,(isset($_POST['RC'])) ? 1 : 0);
                 $BC = mysqli_real_escape_string($db,(isset($_POST['BC'])) ? 1 : 0);
                 $FK = mysqli_real_escape_string($db,(isset($_POST['FK'])) ? 1 : 0);
                 $LR = mysqli_real_escape_string($db,(isset($_POST['LR'])) ? 1 : 0);
                 $EB = mysqli_real_escape_string($db,(isset($_POST['EB'])) ? 1 : 0);


                 $LU = mysqli_real_escape_string($db,(isset($_POST['LU'])) ? 1 : 0);
                 $HK = mysqli_real_escape_string($db,(isset($_POST['HK'])) ? 1 : 0);
                 $SK = mysqli_real_escape_string($db,(isset($_POST['SK'])) ? 1 : 0);
                 $CLIMB = mysqli_real_escape_string($db,(isset($_POST['CLIMB'])) ? 1 : 0);
                 $PJI = mysqli_real_escape_string($db,(isset($_POST['PJI'])) ? 1 : 0);
                 $LSU = mysqli_real_escape_string($db,(isset($_POST['LSU'])) ? 1 : 0);
                 $SQUATS = mysqli_real_escape_string($db,(isset($_POST['SQUATS'])) ? 1 : 0);
                 $DK = mysqli_real_escape_string($db,(isset($_POST['DK'])) ? 1 : 0);
                 $BRI = mysqli_real_escape_string($db,(isset($_POST['BRI'])) ? 1 : 0);
                 $JKT = mysqli_real_escape_string($db,(isset($_POST['JKT'])) ? 1 : 0);
                 $FS = mysqli_real_escape_string($db,(isset($_POST['FS'])) ? 1 : 0);
                 $SLR = mysqli_real_escape_string($db,(isset($_POST['SLR'])) ? 1 : 0);



                 $CGP = mysqli_real_escape_string($db,(isset($_POST['CGP'])) ? 1 : 0);
                 $TD = mysqli_real_escape_string($db,(isset($_POST['TD'])) ? 1 : 0);
                 $TE = mysqli_real_escape_string($db,(isset($_POST['TE'])) ? 1 : 0);
                 $getups = mysqli_real_escape_string($db,(isset($_POST['getups'])) ? 1 : 0);
                 $PUNCHES = mysqli_real_escape_string($db,(isset($_POST['PUNCHES'])) ? 1 : 0);
                 $STSC = mysqli_real_escape_string($db,(isset($_POST['STSC'])) ? 1 : 0);
                 $CU = mysqli_real_escape_string($db,(isset($_POST['CU'])) ? 1 : 0);
                 $BACKFISTS = mysqli_real_escape_string($db,(isset($_POST['BACKFISTS'])) ? 1 : 0);
                 $DFR = mysqli_real_escape_string($db,(isset($_POST['DFR'])) ? 1 : 0);
                 $BR = mysqli_real_escape_string($db,(isset($_POST['BR'])) ? 1 : 0);
                 $SP = mysqli_real_escape_string($db,(isset($_POST['SP'])) ? 1 : 0);
                 $PSPL = mysqli_real_escape_string($db,(isset($_POST['PSPL'])) ? 1 : 0);
                 $PUS = mysqli_real_escape_string($db,(isset($_POST['PUS'])) ? 1 : 0);
                 $SHRUGS = mysqli_real_escape_string($db,(isset($_POST['SHRUGS'])) ? 1 : 0);

                 $BACKLIFTS = mysqli_real_escape_string($db,(isset($_POST['BACKLIFTS'])) ? 1 : 0);
                 $LEGPLANK = mysqli_real_escape_string($db,(isset($_POST['LEGPLANK'])) ? 1 : 0);
                 $REVERSE = mysqli_real_escape_string($db,(isset($_POST['REVERSE'])) ? 1 : 0);
                 $PUSHUPS = mysqli_real_escape_string($db,(isset($_POST['PUSHUPS'])) ? 1 : 0);
                 $CET = mysqli_real_escape_string($db,(isset($_POST['CET'])) ? 1 : 0);
                 $CHESTSQUEEZES = mysqli_real_escape_string($db,(isset($_POST['CHESTSQUEEZES'])) ? 1 : 0);
                 $PPU = mysqli_real_escape_string($db,(isset($_POST['PPU'])) ? 1 : 0);
                 $SHOULDER = mysqli_real_escape_string($db,(isset($_POST['SHOULDER'])) ? 1 : 0);
                 $CLP = mysqli_real_escape_string($db,(isset($_POST['CLP'])) ? 1 : 0);


                 $run = mysqli_real_escape_string($db,(isset($_POST['run'])) ? 1 : 0);
                 $Jogging = mysqli_real_escape_string($db,(isset($_POST['Jogging'])) ? 1 : 0);
                 $yoga = mysqli_real_escape_string($db,(isset($_POST['yoga'])) ? 1 : 0);
                 $rbe = mysqli_real_escape_string($db,(isset($_POST['rbe'])) ? 1 : 0);




          $sql_1 = "insert into user_exe1(user_name,age,gender,weight,height,bmi,healthy,overweight,obese,veg)VALUES('$user_name','$age','$gender','$weight','$height','$bmi','$healthy','$overweight','$obese','$veg')";

          $sql_2 = "insert into user_exe2(disease,situps,rc,bc,fk,lr,eb,lu,hk,sk)VALUES('$disease','$situps','$RC','$BC','$FK','$LR','$EB','$LU','$HK','$SK')";

          $sql_3 = "insert into user_exe3(climb,pji,lsu,squats,dk,bri,jkt,fs,slr,cgp)VALUES('$CLIMB','$PJI','$LSU','$SQUATS','$DK','$BRI','$JKT','$FS','$SLR','$CGP')";

          $sql_4 = "insert into user_exe4(td,te,getups,punches,stsc,cu,backfists,dfr,br,sp)VALUES('$TD','$TE','$getups','$PUNCHES','$STSC','$CU','$BACKFISTS','$DFR','$BR','$SP')";

          $sql_5 = "insert into user_exe5(pspl,pus,shrugs,backlifts,legplank,reverse,pushups,cet,chestsqueezes,ppu)VALUES('$PSPL','$PUS','$SHRUGS','$BACKLIFTS','$LEGPLANK','$REVERSE','$PUSHUPS','$CET','$CHESTSQUEEZES','$PPU')";

          $sql_6 = "insert into user_exe6(shoulder,clp,run,jogging,yoga,rbe,bread,cereals,fruits,dryfruits)VALUES('$SHOULDER','$CLP','$run','$Jogging','$yoga','$rbe','$bread','$cereals','$fruits','$dryfruits')";

          $sql_7 = "insert into user_exe7(milkproducts,tea,coffee,fries,chapati,rice,leaf_vegetable,fish,eggs,chicken,soup,bandp,desert)VALUES('$milkproducts','$tea','$coffee','$fries','$chapati','$rice','$leaf_vegetable','$fish','$eggs','$chicken','$soup','$bandp','$desert')";

  //        echo $sql_1;
  //        echo $sql_2.'\n';
    //      echo $sql_3.'\n';
      //    echo $sql_4.'\n';
        //  echo $sql_5.'\n';
          //echo $sql_6.'\n';
        //  echo $sql_7.'\n';




          echo mysqli_query($db, $sql_1);
          mysqli_query($db, $sql_2);
          mysqli_query($db, $sql_3);
          mysqli_query($db, $sql_4);
          mysqli_query($db, $sql_5);
          mysqli_query($db, $sql_6);
          mysqli_query($db, $sql_7);
         header("location: a.php");


     }
?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="JavaScript">
<!--
function calculateBmi() {
var weight= document.getElementById("weight").value;
var height = document.getElementById("height").value;
if(weight > 0 && height > 0){
var finalBmi = weight/(height/100*height/100)
var ss= document.getElementById('bmi');
ss.value = finalBmi;

var s= document.getElementById('result');

if(finalBmi > 18.5 && finalBmi < 25){
s.value = "healthy";
}
if(finalBmi > 25 && finalBmi < 29){
s.value = "overweight";}
if(finalBmi > 29){
s.value = "obese";
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default)
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#lol" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
   <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Exercise</a>

</nav>
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">?</div>
    <div class="w3-right w3-padding-16">CONTACT US</div>
    <div class="w3-center w3-padding-16">My Current Infomation</div>
  </div>
</div>-->



  <div class="jumbotron">
  <h1 ><center>  Welcome to Health and Fitness Assistant</center></h1>

</div>

<font color=" black" id="lol"><H2 ><center> " Personal details "</center></H2></font>

<form id= "agee" method="post" action="welcomenew1.php">

<div class="row" style=" background-image:url(s.jpg); background-size: cover;min-height: 100%;       /* -color:#ffd480;">

    <div class="col-md-6" >

      <div class="row">
        <div class="col-md-6" >
          <div class="row">
            <div class="col-md-6">
               <h4><p align="RIGHT"><font color="black"><b> AGE</b></font></P></h4>
            </div>
            <div class="col-md-6"><h4>

                      <select id="age" name ="ageName"  >
                           <option value="18" >18</option>

                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="21">21</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>


                          </select>
                          </h4>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h4><p align="RIGHT"><font color="black"><b>GENDER</b></font></P></h4>
            </div>
            <div class="col-md-6"><h4><select id="gender" name = "genderName" >
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                  </select></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h4><p align="RIGHT"><font color="black"><b>CALCULATE BMI</b></font></p></h4>
            </div>
            <div class="col-md-6"><h4>
            <font color="black"><b>Weight(kg):</b> </font>
            <input type="text" name="weight" size="10" id="weight"><br /><br>
            <font color="black"><b> Height(cm): </b></font>
             <input type="text" name="height" size="10" id="height"><br /><br>
            <input type="button" value="Calculate BMI" onClick="calculateBmi()" id="calculateBmi2"><br /><br>
            <font color="black" ><b>Your BMI:</b></font>
             <input type="text" name="bmi" size="10" id="bmi"><br /><br>
            <font color="black"><b>This Means: </b></font>
            <input type="text" name="meaning" size="25" id="result"><br /><br>
            <input type="reset" value="Reset" />
          </h4>
            <!--<select>
                                            <option value="42">42</option>
                                            <option value="female">female</option>
                                  </select>-->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><h4><p align="RIGHT"><font color="black"><b>VEG / NON-VEG</b></font></p></h4>
            </div>
            <div class="col-md-6"><h4><select id = "v_nv" name = "vegName">
                                            <option value="VEG" >VEG</option>
                                            <option value="NON-VEG">NON-VEG</option>
                                  </select></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--disease-->
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1> DISEASE</h1>

      <h5 class="w3-padding-32 w3-light-grey w3-round">

      <span class="w3-left w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="1" id="arthiritus"> ARTHIRITUS </h3></span><HR>

      <span class="w3-right w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="2" id="heart"> HEART DISEASE</h3></span><HR><BR>


      <span class="w3-left w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="3" id="highbp"> HIGH BLOOD PRESSURE</h3></span><HR>

      <span class="w3-right w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="4" id="lowbp"> LOW BLOOD PRESSURE</h3></span><br><HR>

      <span class="w3-left w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="5" id="astama"> ASTAMA</h3><br></span><HR>


      <span class="w3-right w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="0" > OTHER DISEASES</h3></span><br>

      <span class="w3-right w3-tag w3-dark-grey w3-round"><h3><input type="radio" name="disease" value="0" > NO DISEASE</h3></span><br>
      <br>


          </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
<font color=" black"><H2 ><center> " Enter your current diet  "</center></H2></font>

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
<div class="w3-col w3-red w3-container" style="width:20%"><img src="bread.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>Bread</h3>
      <p>1 slice of brown bread = 73 calories<br>
        1 slice of white bread =  53 calories <br>
        <input type="checkbox" name="bread">SELECT<br>

        </p></div>
  <div class="w3-col w3-green w3-container" style="width:20%"><img src="cereals.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>CEREALS</h3>
      <p>100 gmsof cornflakes = 373 calories<br>
        100 gms of oatmael =  87 calories <br>
        <input type="checkbox" name="cereals">SELECT<br></div>
  <div class="w3-col w3-cyan w3-container" style="width:20%"><img src="fruit.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>FRUITS</h3>
      <p>Best diet is the one that includes fruits<br>
        <input type="checkbox" name="fruits">SELECT<br></div>
<div class="w3-col w3-orange w3-container" style="width:20%"><img src="dry.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>DRY FRUITS</h3>
      <p>Dry fruits play an important part in your diet<br>
        <input type="checkbox" name="dryfruits" value="dryfruits" id="dry">SELECT<br></div>
  <div class="w3-col w3-yellow w3-container" style="width:20%"><img src="milk.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>MILK PRODUCTS</h3>
      <p>Include milk products to improve bone health<br>
        <input type="checkbox" name="milkproducts" value="milkproducts" id="milkproducts">SELECT<br></div>




</div>

  <!--
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>
  -->
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
  <div class="w3-col w3-red w3-container" style="width:20%"><img src="tea.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>Tea</h3>
      <p>1 tea cup includes 12mg of caffine<br>
        sugar adds 49 calories  <br>
        <input type="checkbox" name="tea" value="tea" id="tea">SELECT<br>

        </p></div>
  <div class="w3-col w3-green w3-container" style="width:20%"><img src="coffee.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>COFFEE</h3>
      <p>1 coffee cup has 40mg of caffine<br>
        sugar adds 49 calories <br>
        <input type="checkbox" name="coffee" value="coffee" id="coffee">SELECT<br></div>
  <div class="w3-col w3-cyan w3-container" style="width:20%"><img src="fries.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>FRIES</h3>
      <p>100 gms of fries adds up to 16 gms of fats<br>
        <input type="checkbox" name="fries" value="fries" id="fries">SELECT<br></div>
<div class="w3-col w3-orange w3-container" style="width:20%"><img src="chapati.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>CHAPATI</h3>
      <p>1 chapati has 3.5 gm of proteins and 80 calories<br>
        <input type="checkbox" name="chapati" value="chapati" id="chapati">SELECT<br></div>
  <div class="w3-col w3-yellow w3-container" style="width:20%"><img src="rice.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>RICE</h3>
      <p>1 chapati has 2.69 gm of proteins and 130 kcal energy<br>
        <input type="checkbox" name="rice" value="rice" id="rice">SELECT<br></div>




</div>





<!--3333333 walalal griddddddd-->

 <div class="w3-row-padding w3-padding-16 w3-center">
  <div class="w3-col w3-red w3-container" style="width:20%"><img src="leaf.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>LEAFY VEGETABLES</h3>
      <p>Leafy vegetables can be included in every meal
        <br>
        <input type="checkbox" name="leaf_vegetable" value="leaf" id="leaf">SELECT<br>

        </p></div>
  <div class="w3-col w3-green w3-container" style="width:20%"><img src="fish.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>FISH</h3>
      <p>Fish is a healthy food that has a rightful place in a well-kept diet. <br>
        <input type="checkbox" name="fish" value="fish" id="fish">SELECT<br></div>
  <div class="w3-col w3-cyan w3-container" style="width:20%"><img src="egg.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>EGGS</h3>
      <p>Eggs are among the most nutritious foods on the planet<br>
        <input type="checkbox" name="eggs" value="eggs" id="eggs">SELECT<br></div>
<div class="w3-col w3-orange w3-container" style="width:20%"><img src="chicken.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>CHICKEN</h3>
      <p>Chicken has always been a fitness and bodybuilding dietary staple<br>
        <input type="checkbox" name="chicken" value="chicken" id="chicken">SELECT<br></div>
  <div class="w3-col w3-yellow w3-container" style="width:20%"><img src="soup.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>SOUP</h3>
      <p>Nothing beats a warming bowl of soup on a cold winters day<br>
        <input type="checkbox" name="soup" value="soup" id="soup">SELECT<br></div>




</div>


<!--4th grid hai ye .....soo mut 5am ho gya hai-->



<div class="w3-row-padding w3-padding-16 w3-center">
  <div class="w3-col w3-red w3-container" style="width:50%"><img src="bandp.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>BEANS & PULSES</h3>
      <p>They are a cheap, low-fat source of protein,fibres
        <br>
        <input type="checkbox" name="bandp" value="bandp" id="bandp">SELECT<br>

        </p></div>

  <div class="w3-col w3-cyan w3-container" style="width:50%"><img src="desert.jpg" alt="Sandwich" style="width:100%" height="250px">
      <h3>DESERTS</h3>
      <p>Desertd we eat are high in fats and sugar<br>
        <input type="checkbox" name="desert" value="desert" id="deserts">SELECT<br></div>





</div>



















  <!-- <div class="w3-quarter">
      <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
      <h3>All I Need Is a Popsicle</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
      <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
      <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>
-->



<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">

    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">ENTER YOUR EXERCISES</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">CORE</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">LOWER BODY</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">UPPER BODY</div>
      </a>

    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>SITUPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="situps" value="situps" id="situps">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
      <hr>

      <h1><b>REVERSE CRUNCHES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="RC" value="RC" id="RC">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
      <hr>

      <h1><b>BICYCLE CRUNCHES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="BC" value="BC" id="BC">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
      <hr>


      <h1><b>FLUTTER KICKS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="FK" value="FK" id="FK">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
      <hr>


      <h1><b>LEG RAISES</b> <!--<span class="w3-tag w3-red w3-round">Hot!</span>--><span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="LR" value="LR" id="LR">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
      <hr>

      <h1><b>ELBOW PLANK</b><!-- <span class="w3-tag w3-grey w3-round">New</span>--><span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="EB" value="EB" id="EB">SELECT<br></span></h1>
      <p class="w3-text-grey">to strengthen the abdominal muscle</p>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>LUNGES</b> <!--<span class="w3-tag w3-grey w3-round">Popular</span>--> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="LU" value="LU" id="LU">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>HIGH KNEES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="HK" value="HK" id="HK">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>SIDE KICKS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SK" value="SK" id="SK">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>CLIMBERS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CLIMB" value="CLIMB" id="CLIMB">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>PLANK JUMP INS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PJI" value="PJI" id="PJI">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>LUNGES STEP UPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="LSU" value="LSU" id="LSU">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
       <hr>

      <h1><b>SQUATS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SQUATS" value="SQUATS" id="SQUATS">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>DONKEY KICKS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="DK" value="DK" id="DK">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>BRIDGES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="BRI" value="BRI" id="BRI">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>JUMP KNEE TUCKS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="JKT" value="JKT" id="JKT">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>FLY STEPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="FS" value="FS" id="FS">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>

      <h1><b>SIDE LEG RAISES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SLR" value="SLR" id="SLR">SELECT<br></span></h1>
      <p class="w3-text-grey">Lower body exercise</p>
      <hr>


    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>CLOSE GRIP PUSHUPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CGP" value="CGP" id="CGP">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>

   <h1><b>TRICEPS DIPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="TD" value="TD" id="TD">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>TRICEP EXTENSION</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="TE" value="TE" id="TE">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>

   <h1><b>GET UPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="getups" value="getups" id="getups">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>




   <h1><b>PUNCHES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PUNCHES" value="PUNCHES" id="PUNCHES">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>SIDE TO SIDE CHOPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="STSC" value="STSC" id="STSC">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>CHIN UPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CU" value="CU" id="CU">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>BACKFISTS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="BACKFISTS" value="BACKFISTS" id="BACKFISTS">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>DOOR FRAME ROW</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="DFR" value="DFR" id="DFR">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>



   <h1><b>BODY ROWS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="BR" value="BR" id="BR">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>SITTING PULLUP</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SP" value="SP" id="SP">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>PSUEDO PLANCHE</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PSPL" value="PSPL" id="PSPL">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>PULL UPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PUS" value="PUS" id="PUS">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>SHRUGS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SHRUGS" value="SHRUGS" id="SHRUGS">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>





   <h1><b>BACK LIFTS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="BACKLIFTS" value="BACKLIFTS" id="BACKLIFTS">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>LEG PLANK</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="LEGPLANK" value="LEGPLANK" id="LEGPLANK">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>REVERSE ANGELS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="REVERSE" value="REVERSE" id="REVERSE">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b> PUSHUPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PUSHUPS" value="PUSHUPS" id="PUSHUPS">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>CHEST EXTENSIONS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CET" value="CET" id="CET">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>CHEST SQUEEZES</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CHESTSQUEEZES" value="CHESTSQUEEZES" id="CHESTSQUEEZES">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>



   <h1><b>PIKE PUSH UPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="PPU" value="PPU" id="PPU">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>


   <h1><b>SHOULDER TAPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="SHOULDER" value="SHOULDER" id="SHOULDER">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>



   <h1><b>CLAPPING PUSHUPS</b> <span class="w3-right w3-tag w3-dark-grey w3-round"><input type="checkbox" name="CLP" value="CLP" id="CLP">SELECT<br></span></h1>
      <p class="w3-text-grey">Upper body exercise</p>
      <hr>





    </div><br>




  </div>
</div>

<!-- About Container -->



<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->






  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">CARDIO & OTHERS</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>RUNNING</h3>
      <p><input type="checkbox" name="run" value="run" id="run">SELECT<br>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>JOGGING</h3>
      <p><input type="checkbox" name="Jogging" value="Jogging" id="Jogging">SELECT<br></p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>YOGA</h3>
      <p><input type="checkbox" name="yoga" value="yoga" id="yoga">SELECT<br></p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>RESISTANCE BAND</h3>
      <p><input type="checkbox" name="rbe" value="rbe" id="rbe">SELECT<br></p>
    </div>
  </div>







  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">
    <h3>About , The CUSTOMISED PLANS</h3><br>

               <strong> <b><input  type="submit" name = "Submit" value="Submit" style = "height:50px; width :300px;  background-color: #99ff99; font-color:#000000;font-size: 2.0em; "/> </b></strong>

</form>

    <div class="w3-padding-32">
      <h3><b>PLEASE fill the above details carefully!</b></h3>
      <h5><i>With Passion</i></h5>
      <p>The above details regarding the deit and the exercises along with personal details and cardio exercises will help us to provide you with a customised workout plan and diet. </p>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>HELP</h3>

      <p>Powered by HFA</p>
    </div>

    <div class="w3-third">
      <h3>BROWSE</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="VVV.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">VIDEOS</span><br>
          <span>DISCRIPTIONS</span>
        </li>
        <li class="w3-padding-16">
          <img src="TTT.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">TEXT</span><br>
          <span>DISCRIPTIONS</span>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>NEXT</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">PLANS</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
