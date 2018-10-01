<?php
include "inc/connect.php";
include "inc/validateInputFunction.php";
/*Load Regions*/
$regionId = validateInput($_POST['regionalid']);


$sqlLoadConstituency = "SELECT `constituencyid`, `constituencyname` FROM `constituency` WHERE regionalid = '$regionId'";

$constituencyResult = mysqli_query($con,$sqlLoadConstituency);

if (mysqli_num_rows($constituencyResult) > 0)
{
    echo '<option value="none">Select Constituency</option>';
    while ($constituencyResultRow = mysqli_fetch_assoc($constituencyResult) ) {

        echo '<option value="'. $constituencyResultRow['constituencyid'] . '">'. $constituencyResultRow['constituencyname'] .'</option>';


    }

}
else{
    echo "No Record";
}