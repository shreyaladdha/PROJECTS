<?php
    include_once 'db_connect.php';
    session_start();
?>
 <?php
$usn=$_POST["search"];
$canteen=$_POST["canteen"];
$sql_extract_user="SELECT * FROM user_info WHERE usn='$usn';";
$result1 = mysqli_query($conn, $sql_extract_user);
$result1_check = mysqli_num_rows($result1);
if($result1_check > 0)
{
$row = mysqli_fetch_assoc($result1);
$name=$row['first_name']." ".$row['last_name'];
$mobile=$row['mobile'];
$email=$row['email'];
}
else
{
    echo '<script>alert("USN DOES NOT EXIST")</script>'; 
    echo '<script>window.location.href = "search.php";</script>';
    return;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container1 {
 background-color: #f2f2f2;
 padding: 5px 20px 15px 20px;
 border: 1px solid black;
 width: 63%;
 border-radius: 3px;
 margin-top:5%;
 margin-left: 8%;
}
.user {
 background-color: #f2f2f2;
 padding: 30px 30px 20px 30px;
 border: 1px solid black;
 width: 50%;
 border-radius: 3px;
 margin-left: 8%;
 margin-top:3%;
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

</style>
<body>

<div align="center">    <h2 style="font-family:Segoe Script;">USN HISTORY</h2><hr size="+4" color="black"></div>
<div class="user">
<?php

       echo '<font style="font-family:Ink Free"><b> USN:</b></font>  <input style="border-radius: 20px;width:50%;margin-left:70px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$usn.'"><br><br> ';
       echo '<font style="font-family:Ink Free"><b>NAME:</b> </font>  <input style="border-radius: 20px;width:50%;margin-left:55px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$name.'"><br><br>';
       echo '<font style="font-family:Ink Free"><b>E-MAIL:</b></font> <input style="border-radius: 20px;width:50%;margin-left:40px;font-family:Ink Free; font-size:20px; letter-spacing: 1px;text-align: center;" type = "text" value = "'.$email.'"><br><br> ';
       echo '<font style="font-family:Ink Free"><b>MOBILE:</b></font> <input style="border-radius: 20px;width:50%;margin-left:35px;font-family:Ink Free;font-size:20px;  letter-spacing: 1px;text-align: center;" type = "text" value = "'.$mobile.'"><br><br> ';

        
  

?>
</div>
    <div class="container1">
        <?php
       
        $sql_extract_contact = "SELECT * FROM $canteen WHERE name='$name' ;";


        $result2 = mysqli_query($conn, $sql_extract_contact);
        $result2_check = mysqli_num_rows($result2);
        if($result2_check==0)
        {
            echo '<b><h3 style="font-family:Ink Free">NO Orders placed by this usn!</h3></b>';
            return;
        }
        ?>
<table border="0px" cellpadding="2" style="font-family:Ink Free;" >

<tr>
<th>Sl_no</th>
<th>User name</th>

<th>Quantity</th>

<th>Total amount</th>
<th>payment option</th>

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

      echo "<td>" . $row['name'] . "</td>";
    
      echo "<td>" . $row['quantity'] . "</td>";
    
      echo "<td>" . $row['amount'] . "</td>";
    
      echo "<td>"  . $row['payment_option']."</td>";
      echo "</tr>";
    
      }
    
    
}


?>
</table>
</div>
</body>
</html>
