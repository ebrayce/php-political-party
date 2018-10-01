<?php
include ("header.php");
include ('inc/connect.php');

?>
<div style="width: 100%; display: block; position: absolute;">
    <div id="AddBranch" style="" class="w3-container w3-block">
        <header>
            <p>Add Branch</p>
        </header>
        <form action="#" method="post" onsubmit="return false;">
            <p id="addBranchStatus" class="w3-round-xlarge w3-padding w3-text-blue"></p>

            <select onfocus="$('#addBranchConstituencyId').hide(1000);" onchange="loadConstituency();" id="addBranchRegionId" name="region" class="w3-select">
                <option value="">Select Region</option>
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

            <select onchange="w3.removeClass('#addBranchBranchName','w3-hide');" name="constituency" id="addBranchConstituencyId" class=" w3-select" style="display: none;">
                <option value="">Select Constituency</option>
            </select>

            <input type="text" placeholder="Branch" name="branchName" id="addBranchBranchName" class="w3-input w3-hide">

            <input type="button" value="Add Branch" name="msgSendBtn" onclick="addBranch();"><input type="Reset" value="Cancel">
        </form>
        <footer></footer>
    </div>
</div>




<?php
include ("footer.php");

?>