<?php

include 'inc/connect.php';
include "inc/validateInputFunction.php";
include "header.php";
?>

    <!---->

    <div style="" class="w3-container">
        <header>
            <p>Add Branch</p>
        </header>

        <form action="#" method="post">

            <select onchange="loadConstituency(this.value);" id="region" name="region" class="w3-section">
                <option value="">Select Region</option>

                    <?php

                    /*Load Regions*/
                        /*
                    $sqlLoadRegion = "SELECT `regionalid`, `regionalname`FROM `regional`";

                    $regionResult = mysqli_query($con,$sqlLoadRegion);

                    if (mysqli_num_rows($regionResult) > 0)
                    {
                        while ($regionResultRow = mysqli_fetch_assoc($regionResult) ) {

                            echo '<option value="'. $regionResultRow['regionalid'] . '">'. $regionResultRow['regionalname'] .'</option>';
                            }
                    }
                    else{
                        echo "No Record";
                    }*/


                    ?>

            </select>

            <select name="constituency" id="constituency" class="w3-section">
                <option value="">Select Constituency</option>

            </select>

            <input type="text" placeholder="Branch" name="branchname" class="w3-input">
            <input type="Submit" value="Add Branch" name="msgSendBtn"><input type="Reset" value="Cancel">
        </form>

        <footer></footer>

    </div>




<?php

/*add branch*/
if(isset($_POST['msgSendBtn']) && $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $regionalid = validateInput($_POST['region']);
    $constituencyid = validateInput($_POST['constituency']);
    $branchname = validateInput($_POST['branchname']);
    $userid = 1;/*$_SESSION['userid'];*/

    $sql = "INSERT INTO `branch`(`regionalid`, `branchname`, `userid`, `constituencyid`) VALUES ('$regionalid','$branchname','$userid','$constituencyid')";


    try {

        if($result = mysqli_query($con, $sql)){
            if (false === $result)
            {
                echo mysqli_error($con);
                echo "<br>";
            }
        }
    }
    catch(PDOException $e)
    {
        echo "$e";
    }
}



include "footer.php";
?>