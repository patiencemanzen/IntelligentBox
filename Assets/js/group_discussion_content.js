// SHOW/DISPLAY ALLL APPROVED MEMBER
// ==========================================================================================================
setInterval(() => {
    approved_member();
}, 1000);
function approved_member (){
    $(document).ready(function(){
        var global_mail = document.getElementById("group_identity").value;
        $("#approved_list").load("group_discussion_content.box.php", {
            approved: global_mail
        });
    });
}

// SHOW ALL WAITING MEMBER
// ================================================================================================================
setInterval(() => {
    waiting_member();
}, 1000);
function waiting_member (){
    $(document).ready(function(){
        var global_mail = document.getElementById("group_identity").value;
        $("#waiting_approval").load("group_discussion_content.box.php", {
            Waiting_approval: global_mail
        });
    });
}

// SHOW ALL IMAGE THAT HAVE BEEN POSTED 
// =====================================================================================================================
setInterval(() => {
    media_photoes();
}, 1000);
function media_photoes(){
    $(document).ready(function(){
        var global_mail = document.getElementById("group_identity").value;
        $("#group_photoes").load("group_discussion_content.box.php", {
            media_photo: global_mail
        });
    });
}

// SHOW ALL VIDEO THAT HAVE BEEN POSTED 
// =====================================================================================================================
media_Video();
function media_Video(){
    $(document).ready(function(){
        var global_mail = document.getElementById("group_identity").value;
        $("#group_video").load("group_discussion_content.box.php", {
            media_Vdeo: global_mail
        });
    });
}


// show menber/ count member
// =======================================================================================================================
setInterval(() => {
    count_member();
}, 1000);
function count_member (){
    $(document).ready(function(){
        var group_id = document.getElementById("hiddenIdentity").value;
        $("#member-count").load("group_discussion_content.box.php", {
            getAmmountMember: group_id
        });
    });
}

discover_student();
function discover_student(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-student").load("group_discussion_content.box.php", {
            discoverStudent: hiddenEmail,
            title: "student"
        });
    });
}

discover_trainer();
function discover_trainer(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-trainer").load("group_discussion_content.box.php", {
            discoverTrainer: hiddenEmail,
            title_trainer: "trainer"
        });
    });
}

// METHORD FOR invite USER AND SAVING USER
// ========================================================================================================================================
// =========================================================================================================================================
function invite(obj){
    var inviteThis = obj.id;
    var inviteFrom = document.getElementById("hiddenEmail").value;
    
    $(document).ready(function(){
        $(this).load("group_discussion_content.box.php",{
            inviteEmail: inviteThis,
            inviterEmail: inviteFrom        
        },function(response){
            obj.style.border = "1px solid #d3d3d3";
            obj.style.background = "white";
            obj.style.color = "#071c2e";
            obj.innerHTML = "invited";
        });
    });
}
// =========================================================================================================================================
// =========================================================================================================================================


// GET ALL GROUPS THAT HAVE BEEN CREATED ACCORDING TO USER WISH OR LOCATION AND INTEREST
// ===========================================================================================================================================
all_groups();
function all_groups(){
    $(document).ready(function(){
        var request_group = document.getElementById("hiddenEmail").value;
        var hiddenIdentity = document.getElementById("hiddenIdentity").value;
        $("#textarea-desc").load("group_discussion_content.box.php", {
            request_all_groups: request_group,
            group_identity: hiddenIdentity
        });
    });
}
    
// send challenge request
function request_challenge(obj){
    $(document).ready(function(){
        var group_identity = obj.id;
        var hiddenIdentity = document.getElementById("hiddenIdentity").value;

        $(this).load("group_discussion_content.box.php", {
            getGroup_identity: group_identity,
            getInviter_identity: hiddenIdentity
        }, function(){
            obj.style.border = "1px solid #d3d3d3";
            obj.style.background = "white";
            obj.style.color = "#071c2e";
            obj.innerHTML = "Request sent";
        });

    });
}

// challenge request
// ==============================================================================================================
setInterval(() => {
    challenge_request();
}, 1000);
function challenge_request(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        $("#notification_request").load("group_discussion_content.box.php", {
            getgroup_request: group_identity
        });
    });
}

// count challenge recieved
// ================================================================================================================
setInterval(() => {
    cout_challenge();
}, 1000);
function cout_challenge(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        $("#count_challenge").load("group_discussion_content.box.php", {
            getChallenge_count: group_identity
        });
    });
}

// reject challenge
// =================================================================================================================
function reject_challenge(obj){
    var challenge_from = obj.id;
    var group_identity = document.getElementById("hiddenIdentity").value;

    $(document).ready(function(){    
        $(this).load("group_discussion_content.box.php", {
           getChallenge_from: challenge_from,
           getGroup_reject: group_identity
        }, function(){
            obj.innerHTML = "Rejected";
        });
    });
}

function accept_challenge(obj){
    var challenge_from = obj.id;
    var group_identity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $(this).load("group_discussion_content.box.php", {
            challenge_from_group: challenge_from,
            get_group_identity: group_identity
        }, function(){
            obj.innerHTML = "Challenge accepted";
        });
    });
}

// display all challenges i have achibed
// ========================================================================================================================
setInterval(() => {
    display_challenges();
}, 1000);
function display_challenges(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        $("#challenges_holder").load("group_discussion_content.box.php", {
            get_all_challenge: group_identity
        });
    });
}

// all user to join
// ==============================================================================================================
function allow_user(obj){
    var user_email = obj.id;
    var group_identity = document.getElementById("hiddenIdentity").value;

    $(document).ready(function(){
        $(this).load("group_discussion_content.box.php", {
            getUser_email: user_email,
            GetGroup_identity: group_identity
        });
    });
}

setInterval(() => {
    outside_request();
}, 1000);
function outside_request(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        $("#list_approval_request").load("group_discussion_content.box.php", {
          suggest_request: group_identity
        });
    });
}