// SELECT ALL NOTIFICATION USER GOT
// =========================================================================================================================================
setInterval(() => {
    notification_illu();
}, 1000);
function notification_illu (){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#notification_holder").load("../header/header_content.php", {
           getNotification: user_mail
        });
    });
}

// display noti_small
// ======================================================================================================================
setInterval(() => {
    notification_illu_small();
}, 1000);
function notification_illu_small (){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#display_noti_small").load("../header/header_content.php", {
           getNotification: user_mail
        });
    });
}

// count notification
// =======================================================================================================================
setInterval(() => {
    count_notification ();
}, 1000);
function count_notification (){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#count_notification").load("../header/header_content.php", {
            count_notify: user_mail
        });
    });
}

// count notification small
// =======================================================================================================================
setInterval(() => {
    count_notification_small();
}, 1000);
function count_notification_small(){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#count_noti_small").load("../header/header_content.php", {
            count_notify: user_mail
        });
    });
}


// display messages
// ========================================================================================================================
setInterval(() => {
    show_message ();
}, 1000);
function show_message (){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#messages_holder").load("../header/header_content.php", {
           getMessages: user_mail
        });
    });
}

// on small device
// =========================================================================================================================
setInterval(() => {
    show_message_small();
}, 1000);
function show_message_small(){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#show_message_small").load("../header/header_content.php", {
           getMessages: user_mail
        });
    });
}

// count message
// =========================================================================================================================
setInterval(() => {
    count_messages ();
}, 1000);
function count_messages (){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#count_message").load("../header/header_content.php", {
            countMessage: user_mail
        });
    });
}

// count message on small device
// =========================================================================================================================
setInterval(() => {
    count_messages_small();
}, 1000);
function count_messages_small(){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#count_message_small").load("../header/header_content.php", {
            countMessage: user_mail
        });
    });
}

// GET HEADER PROFILE_IMAGE
// ============================================================================================================
setInterval(() => {
    getProfileImage_header();
}, 1000);
function getProfileImage_header(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("user_mail").value;
        $("#header_profile").load("../header/../header/header_content.php",{
            getHeaderProfileImage: requestProfileImage
        });
    });
}

setInterval(() => {
    getProfileImage_header_small();
}, 1000);
function getProfileImage_header_small(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("user_mail").value;
        $("#small-profile-image").load("../header/../header/header_content.php",{
            getHeaderProfileImage: requestProfileImage
        });
    });
}
// challenges
// ============================================================================================================
setInterval(() => {
    get_challenges_request();
    get_challenges_small();
}, 1000);
function get_challenges_small(){
    $(document).ready(function(){
        var requestChallenges = document.getElementById("user_mail").value;
        $("#challenges_list").load("../header/header_content.php", {
            getChallenges: requestChallenges
        });
    });
}

function get_challenges_request(){
    $(document).ready(function(){
        var requestChallenges = document.getElementById("user_mail").value;
        $("#request_challenge_noti").load("../header/header_content.php", {
            getChallenges: requestChallenges
        });
    });
}