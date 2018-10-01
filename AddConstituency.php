<?php


include 'inc/connect.php';
include "inc/validateInputFunction.php";



?>




    <!---->

    <div style="" class="w3-container">
        <header>
           <p>Add Constituency</p>
        </header>

        <form action="#" method="post">

            <select name="region" class="w3-section">

                <?php

                /*Load Regions*/

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
                }


                ?>




            </select>

            <input type="text" placeholder="Constituency" name="constituency" class="w3-input">
            <input type="Submit" value="Add Constituency" name="msgSendBtn"><input type="Reset" value="Cancel">
        </form>

        <footer></footer>

    </div>




<?php

/*add branch*/
if(isset($_POST['msgSendBtn']) && $_SERVER['REQUEST_METHOD'] == "POST" )
{
    $constituencyname = validateInput($_POST['constituency']);
    $regionalid = validateInput($_POST['region']);
    $userid = 1;
    /*$_SESSION['userid'];*/

    $sql = "INSERT INTO `constituency`( `constituencyname`, `userid`, `regionalid`) VALUES ('$constituencyname','$userid','$regionalid')";


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




?>