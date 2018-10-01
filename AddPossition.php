<?php


include 'inc/connect.php';
include "inc/validateInputFunction.php";

?>



    <div style="" class="w3-container">
        <header>
            <p>Add Position</p>

        </header>

        <form action="#" method="post">
            <input type="text" placeholder="Position" name="position" class="w3-input">
            <input type="Submit" value="Add Position" name="msgSendBtn"><input type="Reset" value="Cancel">
        </form>

        <footer></footer>

    </div>




<?php

/*add Position*/
if(isset($_POST['msgSendBtn']) && $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $positionname = validateInput($_POST['position']);
    $userid = 1;
    /*$_SESSION['userid'];*/


    $sql = "INSERT INTO `position`( `positionname`, `userid`) VALUES ('$positionname','$userid')";


    try {
        echo "Adding";

        if($result = mysqli_query($con, $sql)){
            if (false === $result)
            {
                echo mysqli_error($con);
                echo "<br>";

            }
            else{
                echo "<br> Done";
            }

        }
    }
    catch(PDOException $e)
    {
        echo "$e";
    }
}




?>