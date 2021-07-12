<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
    .image
    {
        background-image: url(newbuild.jpg);
        background-repeat: no-repeat;
        width: 100%;
        background-size: cover;
        background-position:top;
    }
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  
  min-height: 100%;
}
    .a{
           float: left;
        }
        .b{
            margin-left: 200px;
        }
        .c{
            float: right;
            margin-right: 150px;
            margin-top: -265px;
        }
.moreinfo{
    margin-top:1px;
    padding-top: 20px;
    background-color: black;
    text-align: center;
}
.moreinfo p{
    text-align: center;
    padding-bottom: 60px;
}
.form{
    margin-top: -30px;
}
    .form input{
        width: 150px;
        font-size: 19px;
        text-align: center;
    }
.subscribe{
    margin-right: 80px;
    background-color: grey;
    color: white;
    height: 35px;
    width: 120px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    margin-top: 15px;
    margin-left: 80px;
    margin-bottom: 30px;
}
.subscribe:hover{
    background-color: white;
    color: grey;
}
 .box1{
     margin-top: 15px; 
            height: 45px;
            width: 45px;
            background: white;
            text-align: center;
            padding-top: 10px;
     border-radius: 50%;
        }
        .box1:hover{
            background: black;
            
        }
    .col1
    {
        margin-left: 50px;
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
   <script type="text/javascript">
    function fn1()
        {
            var user = document.getElementById("user").value;
            var l=user.length;
            var i;
            for(i=0;i<l;i++)
                {
                    if(user.charAt(i)!='@')
                        continue;
                   
                    else
                    {alert("Your suggestion has been sent");
                     return;
                    }
                }
            
                 alert("please enter a valid email");
        }
    </script>
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

    <div class="image">
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="home.php" class="w3-bar-item w3-button">HOME</a>
    <a href="cards1.php" class="w3-bar-item w3-button">MENU</a>
    <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
      
      <div class="w3-bar-item w3-button" style="margin-left:90%;margin-top:-56px;">
          <div class="dropdown">
              
              <i href="profile.html" class="fa fa-user fa-2x"   aria-hidden="true" ></i>
              <div class="dropdown-content" style="color: black">
                  <a href="account.php"><?php echo $name ?></a>
                <a href="paymentdets.php">Payments</a>
                <a href="logout.php">Signout</a>
              </div>
          </div>
      </div>

  </div>
</div>
  

<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
   
  </div>
  <div class="w3-display-middle w3-center">
      
      <span class="w3-text-white w3-hide-small" style="font-size:100px"><b><br>BMSCE<br>CANTEENS</b></span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><br>BMSCE<br>CANTEENS</span>
      
    <p><a href="cards1.php" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
  
    </div>
</header>
    </div>
                  <div class="moreinfo">
      
      
          <div class="row">
              <div class="col1">
                  <div class=" a col-md-4 col-sm-4 col-xs-4"><font size="+2" color="white" face="Copperplate Gothic">More Information</font><br><p><font size="+0" face="Eras ITC" color="grey">This webpage will help you out in sorting-out the canteens.<br>
User would get a great experience, in the selection of menu,<br> payment options, contact numbers, location of the canteen <br>in the least time available during the short break.</font></p>
              </div>
          </div>
              <div class="col2">
              <div class="b col-md-4 col-sm-4 col-xs-4" ><font size="+2" color="white" face="Copperplate Gothic" style="margin-right: 350px;">Feedback</font><br><p><font size="+0" face="Eras ITC" color="grey" style="margin-right: 350px;">Drop in your suggestions.</font></p>
              <form class="form" >
                  E-mail:<input id="user"  type="text" placeholder="E-mail" class="form-control" style="margin-right: 370px;">
                  </form>
                    <form action="#">
                 <center> <button class="subscribe" style="margin-right: 410px;" id="abc123" onclick="fn1()"><font size="+1" face="Bernard MT">Submit</font></button></center></form>
              </div>
              </div>
            <div class="col3">
              <div class="c col-md-4 col-sm-4 col-xs-4"><font size="+2" color="white" face="Copperplate Gothic" style="margin-left: -10px;">Connect with Us</font><br> 
                  <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="box1"><a href="https://www.facebook.com/BMS-College-of-Engineering-52818113981/"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="color:  #3b5998"></i></a></div>
                  <div class="box1"><a href="https://instagram.com/bmsce_official?igshid=ac78pnex1js0"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:  #d6249f"></i></a></div>
                  <div class="box1"><a href="https://www.linkedin.com/company/b.-m.-s.-college-of-engineering"><i class="fa fa-linkedin fa-2x" aria-hidden="true" style="color: #0e76a8"></i></a></div>
                    </div>
        </div>
              </div>
          </div>
          </div>
    </div>
    </body>
</html>
