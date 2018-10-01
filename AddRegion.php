<?php


include 'inc/connect.php';
include "inc/validateInputFunction.php";

?>

    <!--INSERT INTO `regional`(`regionalid`, `regionalname`, `lastupdated`, `userid`) VALUES ([value-1],[value-2],[value-3],[value-4])-->

    <div style="" class="w3-container">
        <header>
          <p>Add Region</p>
        </header>

        <form action="#" method="post">
            <input type="text" placeholder="Region" name="region" class="w3-input">

            <input type="Submit" value="Add Region" name="msgSendBtn"><input type="Reset" value="Cancel">
        </form>

        <footer></footer>

    </div>




<?php

/*add branch*/
if(isset($_POST['msgSendBtn']) && $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $regionalname = validateInput($_POST['region']);
    $userid = 1;
    /*$_SESSION['userid'];*/

    $sql = "INSERT INTO `regional`( `regionalname`, `userid`) VALUES ('$regionalname','$userid')";


    try {

        echo 'Sending';


        if($result = mysqli_query($con, $sql)){
            if (false === $result)
            {
                echo mysqli_error($con);
                echo "<br>";

            }
            else{
                echo 'good';
            }

        }
    }
    catch(PDOException $e)
    {
        echo "$e";
    }
}




?>