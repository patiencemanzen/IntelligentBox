// GET ALL GROUPS THAT HAVE BEEN CREATED ACCORDING TO USER WISH OR LOCATION AND INTEREST
// ===========================================================================================================================================
all_groups();
function all_groups(){
    $(document).ready(function(){
        var request_group = document.getElementById("grobal_mail").value;
        $("#group_list").load("all_groups.box.php", {
            request_all_groups: request_group
        });
    });
}

// JOIN GROUP
// =======================================================================================================================================
function join_group(obj){
    var group_identity = obj.id;
    var user_email = document.getElementById("grobal_mail").value;
    $(document).ready(function(){
        obj.innerHTML = "Sending request...";
        $(this).load("all_groups.box.php", {
            getGroup_identity: group_identity,
            getUser_email: user_email
        }, function(data_response){
            console.log(data_response);
            obj.innerHTML = "Request sent"
        });
    });
}

// SEARCH GROUPS
// =======================================================================================================================================
function search_groups(obj){
    var inputed_search = document.getElementById("search_group").value;
    var user_email = document.getElementById("grobal_mail").value;
    $(document).ready(function(){
        $("#group_list").load("all_groups.box.php", {
            search: inputed_search,
            userMail: user_email
        });
    });
}