// SHOW ALL CLASSESS
// =======================================================================================================
show_class();
function show_class(){
    $(document).ready(function(){
        var user_mail = document.getElementById("hiddenEmail").value;
        $(".getClassess").load("Course_content.php", {
            getClass_mail: user_mail
        });
    });
}


// GET ALL GROUPS THAT HAVE BEEN CREATED ACCORDING TO USER WISH OR LOCATION AND INTEREST
// ===========================================================================================================================================
all_groups();
function all_groups(){
    $(document).ready(function(){
        var request_group = document.getElementById("hiddenEmail").value;
        $("#displayslider").load("Course_content.php", {
            request_all_groups: request_group
        });
    });
}

// JOIN GROUP
// =======================================================================================================================================
function join_goup(obj){
    var group_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.innerHTML = "Processing..."
        $(this).load("Course_content.php", {
            getGroup_identity: group_identity,
            getUser_email: user_email
        }, function(data_response){
            console.log(data_response);
            obj.innerHTML = "Request sent";
        });
    });
}

// GET ALL DEPARTMENT 
// ==========================================================================================================================
all_department();
function all_department(){
    $(document).ready(function(){
        var getDep = document.getElementById("hiddenEmail").value;
        $("#all_department").load("Course_content.php", {
            getDepartment: getDep
        })
    });
}

function join_class(obj){
    var class_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.innerHTML = "Processing...";
        $(this).load("Course_content.php",{
            getClass_identity: class_identity,
            getUser: user_email
        }, function(data){
            obj.innerHTML = "joined";
        });
    });
}