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
        <button type = "submit" name = "logout" value = "logout">Sign OUT</button>
        </form>';
    }
    else
    {
        echo "Logged out!";
    }
?>
<br><br>
<?php

            include_once 'db_connect.php';
            session_start();


            if(isset($_POST['login']))
            {
                $usn_in = mysqli_real_escape_string($conn, $_POST["usn"]);
                $password_in = mysqli_real_escape_string($conn, $_POST["password"]);

                $sql_check = "SELECT * FROM user_info WHERE usn = '$usn_in';";
                $hashed_password = mysqli_query($conn, $sql_check);
                $row = mysqli_fetch_assoc($hashed_password);
                $result_check = mysqli_num_rows($hashed_password);
                
                if(empty($usn_in) || empty($password_in))
                {
                    echo '<script>alert("Fields not filled")</script>'; 
                     echo '<script>window.location.href = "newlogin.php";</script>';
                     
                   // header("Location: newlogin.php?login=empty");
                }
                else
                {
                    if($result_check == 0)
                    {
                        echo '<script>alert("Wrong usn")</script>'; 
                         echo '<script>window.location.href = "newlogin.php";</script>';
                         
                       // header("Location: newlogin.php?login=wrongusn");
                    }
                    else
                    {
                        if(password_verify($password_in, $row['password']) == false)
                        {
                            echo '<script>alert("Wrong password")</script>'; 
                         echo '<script>window.location.href = "newlogin.php";</script>';
                         
                           // header("Location: newlogin.php?login=wrongpassword&usn=$usn_in");
                        }
                        else
                        {
                            session_start();
                            $_SESSION['session_usn'] = $row['usn'];
                            $_SESSION['session_first_name'] = $row['first_name'];
                            $_SESSION['session_last_name'] = $row['last_name'];
                            $_SESSION['session_mobile']=$row['mobile'];
                            echo '<script>alert("Login successful")</script>'; 
                         echo '<script>window.location.href = "home.php";</script>';
                         
                            //header("Location: home.html?login=successful");
                        }
                    }
                }
            }
            else
            {
                exit();
            }
?>