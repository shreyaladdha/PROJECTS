<!DOCTYPE html>
<html>
<head>

<title>Canteens</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,html{height: 100%;}
  

     .bgimg
    {
     
        padding-top: 1%;
        padding-bottom: 2%;
           background-color:white;
     background-repeat: no-repeat;
           
            height:inherit;
            width:inherit;
            background-position: center;
            background-size:cover;
    }
     
    .container
    {
    margin:auto;
        
    }

body {
  font-family: Arial, Helvetica, sans-serif;
  
}
    .canteen{
        color:white;
        background-color: black;
        height: 120px;
        margin-left: -40px;
        margin-top: -63px;
        margin-right: -40px;
         
          }
    .canteen img{
        float: left;
        margin-left: 400px;
        margin-top: 25px;
        height: 80px;
        width: 80px;
        
    }
    .bms {
        margin-right: 400px;
        text-align: center;
        padding-top: 35px;
        font-family:Lucida Handwriting;
        font-size: 47px;
    }
.column {
  float: left;
  width: 25%;
margin-left: 50px;

  padding: 0 10px;
}

.row {
    margin-top: 80px;
   
    }

.row:after {
  content: "";
    margin-top: 50px;
    
  display: table;
  clear: both;
}


.card {
    text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
    float: left;
    margin-left: 30px;
  text-align: center;
  background-color: black;
}


.flip-card { 
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
    font-family: Bradley Hand ITC;
    color:white;
}
.flip-card-inner {
  position: relative;
  width: 300px;
  height: 250px;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
    background-color:white;
  color: black;
    font-family: Ink Free;
    font-size: 17px;
  transform: rotateY(180deg);
    margin-bottom: 10px;
    padding-bottom: 10px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 26px;
    margin-bottom: 10px;
  padding: 5px;
  width: 150px;
    height: 40px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}
.menu1
    {
        background-color: black;
        width:25%;
       margin-top: 5%;
        margin-left: 37%;
        color: white;
        font-family: Bradley Hand ITC;
        font-size: 25px;
    }
    .bar
    {
        font-family: "Amatic SC", sans-serif}
     .dropdown-content {
  display: none;
  position: absolute;
    
  background-color:white;
       margin-right: -40px;
 min-width= 300px;
    
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
    .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration:none;
  display: block;
}
   
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .fa fa-user fa-2x {background-color: #3e8e41;}
    
</style>
</head>
<body>

<div class="container">
    <div class="bar"> 
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="home.php" class="w3-bar-item w3-button">HOME</a>
    <a href="cards1.php" class="w3-bar-item w3-button">MENU</a>
    <a href="contact1.php" class="w3-bar-item w3-button">CONTACT</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
      <div class="w3-bar-item w3-button" style="margin-left:90%; margin-top: -56px">
           <div class="dropdown">
              
              <i href="profile.html" class="fa fa-user fa-2x"   aria-hidden="true" ></i>
              <div class="dropdown-content" style="color: white">
                  <a href="account.php">Account</a>
                <a href="paymentdets.php">Payments</a>
                <a href="logout.php">Signout</a>
              </div>
          </div>
      </div>
  </div>
</div>
    </div> 

<div class="bgimg">
    <div align="center" class="menu1"><h1>CANTEENS</h1></div>
    
<div class="row">
  <div class="column">
    <div class="card">
	
        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 1</b></font>
            
  <div class="flip-card-inner">
    <div class="flip-card-front">
        
      <img src="dosa_without_watermark.jpg"  style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h2>VIDHYARTHI KHANA</h2> 
        <p><b>main canteen of the college</b></p> 
        <p><b>opposite to the new building</b></p>
        <a href="menu1_1.php">   <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
</div>
</div>



  <div class="column">
    <div class="card">

        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 2</b></font>
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="coffee_2.jpg"  style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>NESCAFE</h1> 
        <p><b>Your search for coffee ends here</b></p> 
        <p><b>opposite to the new building,near the main canteen</b></p>
        <a href="menu2.php"> <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
</div>
</div>


<div class="row">
  <div class="column">
    <div class="card">

        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 3</b></font>
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="Sandwich.jpg"  style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>GOWDA'S</h1> 
        <p><b> for a quick snack between classes</b></p> 
        <p><b>adjacent the hostel mess,near MPH</b></p>
        <a href="menu3.php">  <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
</div>
</div>
</div>


<div class="row">
  <div class="column">
    <div class="card">

        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 4</b></font>
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="kuska.jpg" style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>SLN CANTEEN</h1> 
        <p><b>Best kuska in college</b></p> 
      <p><b>near the arch block</b><p>
        <a href="menu4.php"> <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
 </div>
</div>


  <div class="column">
    <div class="card">

        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 5</b></font>
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="samosa.jpg"  style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h2>NANDINI SHOPPEE</h2> 
        <p><b>Best SAMOSA in college</b></p> 
        <p><b>Next to the sports complex</b></p>
	<a href="menu5.php"> <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
 </div>
</div>


  <div class="column">
    <div class="card">

        <div class="flip-card"><font size="+3" face="Bradley Hand ITC"><b>Canteen 6</b></font>
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="not_a_sandwich_but_looks_mad.jpg"  style="width:300px;height:250px;">
    </div>
    <div class="flip-card-back">
      <h1>COFFEE KUTIRA</h1> 
        <p><b></b></p> 
        <p><b>near the data centre</b></p>
        <a href="menu6.php"> <button class="button" style="vertical-align:middle"><span> Menu </span></button></a>
    </div>
  </div>
</div>
 </div>
</div>
    </div>
</div>
    
    </div>
    </div>
</body>
</html>
