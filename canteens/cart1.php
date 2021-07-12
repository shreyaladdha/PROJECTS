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
 border: 1px solid lightgrey;
 width: 63%;
 border-radius: 3px;
 margin-left: 19px;
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

}
</style>
</head>
<body>
    <?php
include_once 'db_connect.php';
session_start();
$db=mysqli_select_db($conn,"canteen1");
$slno=$_POST["items"];
$sum=0;
$row;


if(empty($slno))
{
    echo '<script>alert("NO ITEMS CHOSEN")</script>'; 
    echo '<script>window.location.href = "menu1_1.php";</script>';
    return;  }
 

?>

<h2>BILL</h2>
<div class="row">
 <div class="col-75">
 <div class="container1">
 
 <div class="col-50">
 <h3>Payment Options</h3>
 <form action="contact.php" method="post">
 
 <input type="radio" name="options" value="Cash">Cash &emsp; &emsp;
 <input type="radio" name="options" value="UPI">UPI  &emsp; &emsp;
 <input type="radio" name="options" value="PhonePay">PhonePay &emsp; &emsp;
 <input type="radio" name="options" value="Paytm">Paytm&emsp;&emsp;

 </div>
 </div>
 
 </div>
 </div>
 <div class="col-25">
 <div class="container2">
 <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
 <?php
 
 $usn= $_SESSION['session_usn'];
 $count=count($slno);
 echo '<input type = "hidden" name = "count" value = "'.$count.'">';
 //$sql_insert_history="UPDATE user_history
 //SET quantity='$count' WHERE usn='$usn';";
  //       mysqli_query($conn, $sql_insert_history);
 
echo "<b>$count</b>"?></span></h4>
<?php
 
for($i=0;$i<$count;$i++)
{ 
    $sql_extract="SELECT product_name,price FROM canteen1 WHERE sl_no='$slno[$i]';";
    $result = mysqli_query($conn, $sql_extract);

    $result_check = mysqli_num_rows($result);
            if($result_check > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                   echo $row['product_name'] ;
                   echo "<span class='price'>".$row["price"]. "</span><br><br>";
                    $sum=$sum+$row['price'];
                   
                }
            }
            else
            echo "0";

        
}
$cart="contact_1";
$cart_name="VIDHYARTHI KHANNA";
echo '<p><b>Total<b> <span class="price" style="color:black"><b>'.$sum.'</b></span></p>';
echo '<input type = "hidden" name = "amount" value = "'.$sum.'">';
echo '<input type = "hidden" name = "cart" value = "'.$cart.'">';
echo '<input type = "hidden" name = "cart_name" value = "'.$cart_name.'">';
 ?>
 </div>
</div>


<a href="contact1.php"><input  type="submit" value="Proceed to pay" class="btn" onclick="contact1.php"> </a>
 
</form>
</body>
</html>