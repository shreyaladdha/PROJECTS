<?php
include_once 'db_connect.php';
session_start();
$usn= $_SESSION['session_usn'];

$db=mysqli_select_db($conn,"user_history");
$pay_option=$_POST["options"];
$quantity=$_POST["count"];
$amount=$_POST["amount"];
$sql_insert_history = "INSERT INTO $usn ( payment_option, quantity, total_amount) 
                                    VALUES ('$pay_option','$quantity','$amount');";
                        mysqli_query($conn, $sql_insert_history);  
                        ?>
                        