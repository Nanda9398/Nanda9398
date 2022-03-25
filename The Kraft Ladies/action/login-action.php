<?php
    session_start();
    $con = mysqli_connect('localhost','root','','kraft_ladies');
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `customers_list` WHERE Email='$email' AND Password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1)
        {
            $_SESSION['email'] = $email; 
            header("Location: //localhost/The Kraft Ladies/Craft.php");
        }
        else
        {
            echo " Incorrect Username/password. ";
        }
    }
?>