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
 width: 63%;
 border-radius: 3px;
 margin-left: 15%;
 margin-bottom:28px;
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
  font-family:Ink Free;
  font-size:20px;
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
   
<div align="center" class="box" style="background-color:black; color:white;width:35%;margin-left:30%;padding:0.5px;height:60px;margin-bottom:20px;">
<h2 style="font-family:Ink Free">USER PAYMENT HISTORY</h2>
</div>
<div class="row">
 <div class="col-75">
 <div class="container1">
 
 <div class="col-50">
 <h3 style="font-family:Ink Free">PAYMENTS</h3>
 <?php
    include_once 'db_connect.php';
    session_start();
?>
 <?php
$usn= $_SESSION['session_usn'];

$sql_extract_history = "SELECT * FROM $usn ;";
$result2 = mysqli_query($conn, $sql_extract_history);
$result2_check = mysqli_num_rows($result2);
if($result2_check==0)
{echo '<b><div style="font-family:Ink Free"> NO ORDERS PLACED YET!</div></b>';
  echo'<a href="home.php"><button class="button" style="margin-left:75%;font-family:Ink Free;width: 24%;"><span>Go Back </span></button></a>';
return;
}
?>
<table border="1px" cellpadding="2" >

    <tr>
    <th>Sl_no</th>
    <th>payment choice</th>
    
    <th>Quantity</th>
    
    <th>Total amount</th>
    <th>Canteen Name</th>
    
    </tr>
<?php
if($result2_check > 0)
{
     
    
     $i=0;
    
    while($row = mysqli_fetch_assoc($result2))
    
      {
        $i++;
      echo "<tr>";
      echo "<td>" . $i . "</td>";

      echo "<td>" . $row['payment_option'] . "</td>";
    
      echo "<td>" . $row['quantity'] . "</td>";
    
      echo "<td>" . $row['total_amount'] . "</td>";
    
      echo "<td>"  . $row['canteen_name']."</td>";
      echo "</tr>";
    
      }
    
  //  echo "</table>";
}


 ?>
 </table>
 </div>
 </div>

 



 
</form>
<a href="home.php"><button class="button" style="margin-left:39%;font-family:Ink Free;"><span>Go Back </span></button></a>

</body>
</html>