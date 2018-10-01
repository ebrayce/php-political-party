function addBranch() {
let regionid = $('#addBranchRegionId').val();
let constituencyId = $('#addBranchConstituencyId').val();
let addBranchBranchName = $('#addBranchBranchName').val();

    $.post('requestAddBranch.php',{
            region: regionid,
            branchName: addBranchBranchName ,
            constituencyId: constituencyId
        }

        ,function (data) {

            $('#addBranchStatus').html(data);
        });
}

function loadConstituency(){

    var regionId = $('#addBranchRegionId').val();

    $.post('loadConstituency.php',{
            regionalid: regionId
        }

        ,function (data) {
        
        $('#addBranchConstituencyId').html(data);
    });
    $('#addBranchConstituencyId').show(1000);
}

function confirmPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();
    if ( password == confirmPassword)
    {
        return true;
    }
    else {
        $("#confirmPassword").val("");

        alert("Password dont match");
        $("#password").val("");

        return false;
    }
}




    function toSignUp() {
        $("#logIn").toggle(1000);
        $("#signUp").toggle(1000);
    }

    function toLogIn() {
        $("#logIn").toggle(1000);
        $("#signUp").toggle(1000);
    }



