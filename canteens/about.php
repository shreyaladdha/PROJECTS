<html>
<title>about</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <title>about</title>
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
    .bg
    {
        background-color: white;
    }
   

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

.container {
  position: relative;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 16.66%;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
   .dropdown-content {
  display: none;
  position: absolute;
    
  background-color:white;
       margin-right: -40px;
 min-width=300px;
    
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
<body>
<?php
    include_once 'db_connect.php';
    session_start();
?>
 <?php
$usn= $_SESSION['session_usn'];
$sql_extract_user = "SELECT * FROM user_info WHERE usn='$usn';";
$result1 = mysqli_query($conn, $sql_extract_user);
$result1_check = mysqli_num_rows($result1);
if($result1_check > 0)
{
    $row = mysqli_fetch_assoc($result1);
        $name=$row['first_name'];
}
?>
    <div class="bg">
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
                  <a href="account.php"><?php echo $name ?></a>
                <a href="paymentdets.php">Payments</a>
                <a href="logout.php">Signout</a>
              </div>
          </div>
      </div>

  </div>
</div>
    </div>   
    </div>
    <div class="w3-container w3-padding-64  w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:55px" style="margin-top: 10px">About</h1>
    






<h2 style="text-align:center">Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="bmscampus.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="bmscampus1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="bmscampus2.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="bmscampus3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="newbuild.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="bmscampus1.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="bmscampus.jpg" style="width:100%" onclick="currentSlide(1)" alt="campus">
    </div>
    <div class="column">
      <img class="demo cursor" src="bmscampus1.jpg" style="width:100%" onclick="currentSlide(2)" alt="campus">
    </div>
    <div class="column">
      <img class="demo cursor" src="bmscampus2.jpg" style="width:100%" onclick="currentSlide(3)" alt="campus">
    </div>
    <div class="column">
      <img class="demo cursor" src="bmscampus3.jpg" style="width:100%" onclick="currentSlide(4)" alt="campus">
    </div>
    <div class="column">
      <img class="demo cursor" src="bmscampus.jpg" style="width:100%" onclick="currentSlide(5)" alt="Campus">
    </div>    
    <div class="column">
      <img class="demo cursor" src="bmscampus1.jpg" style="width:100%" onclick="currentSlide(6)" alt="campus">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    


    <p><font face="Ink Free">B.M.S. College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M. Sreenivasaiah a great visionary and philanthropist and nurtured by his illustrious son Late Sri. B. S. Narayan.

Location & Area : Located in the heart of Bangalore, the Garden City of India, BMSCE is about 5 KMs from the Central Railway Station. The campus area is 11 Acres 30 Guntas with a built up area of 99,500 Sq.M..

        BMSCE is the first private sector initiative in engineering education in India. Over the past 73 years of its illustrious existence, the institution has produced more than 40,000 engineers/leaders who have enriched the world through their immense contributions for mankind. Started with only 03 undergraduate courses, BMSCE today offers 13 Undergraduate & 16 Postgraduate courses both in conventional and emerging areas. 14 of its Departments are recognized as Research Centers offering PhD/M.Sc (Engineering by Research) degrees in Science, Engineering and Management. The College has been effectively practicing outcome based education. The College has one of the largest student populations amongst engineering colleges in Karnataka. Currently about 5000 students are pursuing their higher studies in BMSCE. </font></p>
   
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
          <p><b>Monday-- 09:00am - 05:30pm</b></p>
          <p><b>Tuesday-- 09:00am - 05:30pm</b></p>
          <p><b>Wednesday-- 09:00am - 05:30pm</b></p>
          <p><b>Thursday-- 09:00am - 05:30pm</b></p>
      </div>
      <div class="w3-col s6">
          <p><b>Friday-- 09:00am - 05:30pm</b></p>
          <p><b>Saturday-- 09:00am - 05:30pm</b></p>
          <p><b>Sunday Closed</b></p>
      </div>
    </div>
        </div>
         <h1 class="w3-center w3-jumbo" style="margin-bottom:55px" style="margin-top: 10px" align="center">Location</h1>
        <div align="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.4814935873596!2d77.56333711409499!3d12.941012190875943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158b11e34d2f%3A0x5f4adbdbab8bd80f!2sBMS%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1574948291430!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        </div>
  </div>
</body></html>