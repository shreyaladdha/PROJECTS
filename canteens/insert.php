<?php
    session_start();
?>
<?php
    if(isset($_SESSION['session_usn']))
    {
        $session_usn = $_SESSION['session_usn'];
        $session_first_name = $_SESSION['session_first_name'];
        $session_last_name = $_SESSION['session_last_name'];
        echo "Logged in as $session_first_name "."$session_last_name!";
?>
<br><br>
<?php
        echo
        '<form action = "logout.php" method = "POST">
        <button type = "submit" name = "logout" value = "logout">LOG-OUT</button>
        </form>';
    }
    else
    {
        echo "Logged out!";
    }
?>
<br><br>
<?php

    if(isset($_POST["submit"]))
    {
        include_once 'db_connect.php';


        $usn = mysqli_real_escape_string($conn, $_POST["usn"]);
        $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
        

        if(empty($usn) || empty($first_name) ||empty($last_name) ||empty($email) ||empty($password) ||empty($mobile))
        {
            echo '<script>alert("fields not filled")</script>'; 
           echo '<script>window.location.href = "Original_signup.php";</script>';
                         
           // header("Location: Original_signup.php?signup=empty");
        }
        else
        {
            if(!preg_match("/^[a-zA-Z]*$/", $first_name))
            {
                
            echo '<script>alert("incorrect first name")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
                //header("Location: Original_signup.php?signup=fchar&usn=$usn&last_name=$last_name&email=$email&mobile=$mobile");
            }
                else
            {
                if(!preg_match("/^[a-zA-Z]*$/", $last_name))
                {
                  echo '<script>alert("Incorrect last name")</script>'; 
                  echo '<script>window.location.href = "Original_signup.php";</script>';
                    //header("Location: Original_signup.php?signup=lchar&usn=$usn&first_name=$first_name&email=$email&mobile=$mobile");
                }
                else
                {
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                         echo '<script>alert("Invalid email")</script>'; 
                     echo '<script>window.location.href = "Original_signup.php";</script>';
                       // header("Location: Original_signup.php?signup=email&usn=$usn&first_name=$first_name&last_name=$last_name&mobile=$mobile");
                    }
                    else
                    {
                        $sql_insert = "INSERT INTO user_info (usn, first_name, last_name, email, password, mobile) 
                                    VALUES ('$usn', '$first_name', '$last_name', '$email', '$hashed_password', '$mobile');";
                        mysqli_query($conn, $sql_insert);  
                        $sql_insert_history="CREATE TABLE $usn(payment_option VARCHAR(256),
                                                                    quantity INT(10),
                                                                    total_amount BIGINT(10),
                                                                    canteen_name VARCHAR(256));";
                                            mysqli_query($conn, $sql_insert_history);
                                            
            echo '<script>alert("Signup successful!!")</script>'; 
            echo '<script>window.location.href = "newlogin.php";</script>';
                        //header("Location: Original_signup.php?signup=success");
                    }
                }
                
            }
        }
    }
    else
    {
        header("Location: Original_signup.php?signup=error");
    }

?>