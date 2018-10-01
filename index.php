<?php
session_start();
if (!empty($_SESSION['userId'])){
    header("Location:userHome.php");
}



include "inc/connect.php";
include "inc/validateInputFunction.php";
$_SESSION['userId'] = "";
$_SESSION['userEmail'] = "";
$_SESSION['userPassword'] = "";
$userLogInEmail = "";
$userPassword = "";

include ("header.php");
?>


<div class="w3-margin-bottom">



    <div id="logIn" class="w3-row w3-margin-left w3-margin-right">
        <div class="w3-col m4 l4 w3-hide-small w3-border-white w3-border " style="opacity: 0"></div>

        <div class="w3-col l4 m4 s12">

                <form action="userlogin.php" class="" method="post">
                    <h2 class="w3-center" >LOG IN</h2>


                    <input required class="w3-input w3-margin-bottom w3-border" name="txtUserEmail" type="text" placeholder="Email">
                    <input required class="w3-input w3-margin-bottom w3-border" name="txtUserPassword" type="password" placeholder="Password">


                    <div class="w3-row-padding">
                        <div class="w3-col l6 s6 ">
                            <input class="w3-btn w3-block w3-round-xlarge w3-border" name="btnUser" type="submit"  value="Log In">
                        </div>

                        <div class="w3-col l6 s6 ">
                            <input class="w3-btn  w3-block w3-border w3-round-xlarge"  type="reset" placeholder="Cancel">
                        </div>
                    </div>
                </form>
        </div>

        <div class="w3-col l4 m4 w3-hide-small w3-border-white w3-border" style="opacity: 0"></div>
    </div>
</div>

<?php
include ('footer.php');


?>