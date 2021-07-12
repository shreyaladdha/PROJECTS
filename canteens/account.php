<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<style>
body {
 font-family: Arial;
 font-size: 17px;
 padding: 8px;
}
* {
 box-sizing: border-box;
}
.row {
 display: -ms-flexbox;
 display: flex;
 -ms-flex-wrap: wrap;
 flex-wrap: wrap;
 margin: 0 -16px;
}
.col-25 {
 -ms-flex: 25%;
 flex: 25%;
}
.col-50 {
 -ms-flex: 50%;
 flex: 50%;
}
.col-75 {
 -ms-flex: 75%;
 flex: 75%;
}
.col-25,
.col-50,
.col-75 {
 padding: 0 16px;
}
.container1 {
 background-color: #f2f2f2;
 padding: 5px 20px 15px 20px;
 border: 2px solid black;
 width: 50%;
 border-radius: 3px;
 margin-left: 20%;
 margin-bottom:3%;
}
.container2 {
 background-color: #f2f2f2;
 padding: 5px 20px 15px 20px;
 border: 1px solid lightgrey;
 width: 65%;
 border-radius: 3px;
 margin-top: 25px;
}
input[type=text] {
 width: 100%;
 margin-bottom: 20px;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 3px;
}
label {
 margin-bottom: 10px;
 display: block;
}
.icon-container {
 margin-bottom: 20px;
 padding: 7px 0;
 font-size: 24px;
}
.btn {
 background-color: black;
 color: white;
 padding: 12px;
 margin: 10px 0;
 border: none;
 width: 30%;
 float:right;
 border-radius: 3px;
 cursor: pointer;
 font-size: 17px;
 
}
.btn:hover {
 background-color:black ;
}
a {
 color: #2196F3;
}
hr {
 border: 1px solid lightgrey;
}

span.price {
 float: right;
 color: grey;
}
@media (max-width: 800px) {
 .row {
 flex-direction: column-reverse;
 }
 .col-25 {
 margin-bottom: 20px;
 }
.box

  {
        background-color: black;
        width:25%;
       margin-top: 5%;
        margin-left: 37%;
        color: white;
        font-family: Bradley Hand ITC;
        font-size: 25px;
    }
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
.button {
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 7px;
  width: 15%;
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
button span:after {
  content: '\00AB';
  position: absolute;
  opacity: 0;
  top: 0;
 left: -20px;
  transition: 0.5s;
}
.button:hover span {
  padding-right: 25px;
}
.button:hover span:after {
  opacity: 1;
  left: 10;
}

</style>
</head>
<body>
<div align="center" class="box" style="background-color:black; color:white;width:30%;margin-left:30%;padding:0.5px;height:60px;margin-bottom:20px;">
<h2 style="font-family:Ink Free">USER DETAILS</h2>
</div>
<div class="row">
 <div class="col-75">
 <div class="container1">
 
 <div class="col-50">
 <h3 style="font-family:Ink Free" >USER DETAILS</h3>
 <?php
    include_once 'db_connect.php';
    session_start();
?>
 <?php
$usn= $_SESSION['session_usn'];
$sql_extract_user = "SELECT * FROM user_info WHERE usn='$usn';";
$sql_extract_history = "SELECT * FROM $usn ;";

$result1 = mysqli_query($conn, $sql_extract_user);
$result1_check = mysqli_num_rows($result1);
$result2 = mysqli_query($conn, $sql_extract_history);
$result2_check = mysqli_num_rows($result2);


if($result1_check > 0)
{
    
    while($row = mysqli_fetch_assoc($result1))
    {
        $name=$row['first_name']."  ".$row['last_name'];
      
       echo '<font style="font-family:Ink Free"> USN:</font>  <input style="border-radius: 20px;width:50%;margin-left:70px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$row['usn'].'"><br> ';
       echo '<font style="font-family:Ink Free">NAME: </font>  <input style="border-radius: 20px;width:50%;margin-left:55px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$name.'"><br> ';
       echo '<font style="font-family:Ink Free">E-MAIL:</font> <input style="border-radius: 20px;width:50%;margin-left:40px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$row['email'].'"><br> ';
       echo '<font style="font-family:Ink Free">MOBILE:</font> <input style="border-radius: 20px;width:50%;margin-left:35px;font-family:Ink Free;font-size:20px;  letter-spacing: 1px;text-align: center;" type = "text" value = "'.$row['mobile'].'"><br> ';

       
      

       
        
    }
}

?>

 </div>
 </div>
 
 </div>
 </div>
 
</form>
<a href="home.php"><button class="button" style="margin-left:38%;font-family:Ink Free;"><span>Go Back </span></button></a>

</body>
</html>