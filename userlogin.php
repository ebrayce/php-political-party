<?php
session_start();
include "inc/connect.php";
include ('inc/validateInputFunction.php');
$_SESSION['userId'] = "";
$_SESSION['userEmail'] = "";
$_SESSION['userPassword'] = "";
$userName = "";
$userPassword = "";




if(isset($_POST['btnUser']) && $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $userName = validateInput($_POST['txtUserEmail']);
    $userPassword = validateInput($_POST['txtUserPassword']);

    $sql = "SELECT userid as 'id', username as 'email', password as 'password' FROM users where username = '$userName' and password = '$userPassword' ";


    try {


        if($result = mysqli_query($con, $sql)){

            $row = mysqli_fetch_assoc($result);
            $_SESSION['userId'] = $row['id'];

            if (false === $result)
            {
                echo mysqli_error($con);
            }
            else{

            }

            $rowCount = mysqli_num_rows($result);

            if( $rowCount == 1 )
            {
                /*echo "User Id " . $_SESSION['userId'] ;*/
                header("Location:memberHome.php");
            }
            else{
                header("Location:index.php");
            }


        }

        else
        {

            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';

            echo '<a class="w3-btn w3-jumbo w3-aqua animated an bounce w3-block" href="index.php">Try Again</a>';

        }

    }
    catch(PDOException $e)
    {
        echo "$e";
    }
}
else{

}
?>
</html>