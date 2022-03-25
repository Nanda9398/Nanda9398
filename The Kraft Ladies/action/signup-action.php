<?php
session_start();
$con = mysqli_connect('localhost','root','','kraft_ladies');

if(mysqli_connect_errno()){
    echo " Failed To connect Database due to -> ", mysqli_connect_error() ;
}else{
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $sql_e = "SELECT * FROM customers_list WHERE EMAIL='$email'";
        $res_e = mysqli_query($con, $sql_e);

        if (mysqli_num_rows($res_e) > 0)
        {
            echo "<script> alert('Sorry, Email Already taken.');
            window.location.replace('//localhost/PROJECT/doctor-signup.php');
            </script>
            "; 	
        }
        else
        {
            $query = "INSERT INTO `customers_list`(`FirstName`, `LastName`, `Email`, `Password`, `Phone`) VALUES ('$firstname', '$lastname', '$email', '" . md5($password) . "', '$phone')";

            $result = mysqli_query($con,$query);

            if($result)
            {
                $_SESSION['email'] = $email; 
                echo "
                    <script> alert('Please Proceed to the items list. ');
                    window.location.replace('//localhost/The Kraft Ladies/Craft.php');
                    </script>
                ";
            }
            else
            {
                echo "Failed.";
            }
        }
    }
}
?>