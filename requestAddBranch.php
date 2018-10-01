<?php
include ('inc/connect.php');
include ('inc/validateInputFunction.php');

if( $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $regionalid = validateInput($_POST['region']);
    $constituencyid = validateInput($_POST['constituencyId']);
    $branchname = validateInput($_POST['branchName']);
    $userid = 1;/*$_SESSION['userid'];*/

    $sql = "INSERT INTO `branch`(`regionalid`, `branchname`, `userid`, `constituencyid`) VALUES ('$regionalid','$branchname','$userid','$constituencyid')";


    try {

        if($result = mysqli_query($con, $sql)){
            if (false === $result)
            {
                echo mysqli_error($con);
                echo "<br>";
            }
            else{
               echo 'Branch Added Successfully.';
            }

        }
    }
    catch(PDOException $e)
    {
        echo "$e";
    }
}
else{
    echo "Problem";
}



?>