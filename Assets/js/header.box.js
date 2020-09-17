// when user click on notification icon and text then notification popup open
// and then of he/she click on it again then close notification area 
function openNotificationArea(){
    var notification = document.getElementById("notification_popUp");
    if(notification.style.display == "block"){
        notification.style.display = "none";
        $(document).ready(function(){
            var user_mail = document.getElementById("user_mail").value;
            $("#count_notification").load("../header/header_content.php", {
              unsetCount_notification: user_mail
            });
        });
    }else{
        notification.style.display = "block";
    }
}

// when user click on messages icon then messages popup open
// if use click again then close it
function openMessageArea(){
    if(document.getElementById("messages_popUp").style.display == "none"){
        document.getElementById("messages_popUp").style.display = "block";
        $(document).ready(function(){
            var user_mail = document.getElementById("user_mail").value;
            $("#count_message").load("../header/header_content.php", {
              unsetCount_message: user_mail
            });
        });
    }else{
        document.getElementById("messages_popUp").style.display = "none";
    }
}

// when user click on challenge icon then open challenge area 
// if you click back then close section
function openChallenge(){
    if(document.getElementById("challenges_popUp").style.display == "none"){
        document.getElementById("challenges_popUp").style.display = "block";
    }
    else{
        document.getElementById("challenges_popUp").style.display = "none";
    }
}

// when user start to search in search bar then search open automatical
// if user press outtarget then close the section
function resultSection(){
    document.getElementById("search-result").style.display = "block";
}


// WHEN IT COMES TO SMALL DEVICE
// =============================================================================================================================================
// open sidenav
function openNavSmall_device() {
    document.getElementById("sideDev").style.width = "350px";
} 
function closeNav() {
    document.getElementById("sideDev").style.width = "0";
}

// when user click on notification icon and text then notification popup open
// and then of he/she click on it again then close notification area 
function openNotificationArea_small(){
    if(document.getElementById("notification_popUp_left_small").style.display == "block"){
        document.getElementById("notification_popUp_left_small").style.display = "none";
        $(document).ready(function(){
            var user_mail = document.getElementById("user_mail").value;
            $("#count_noti_small").load("../header/header_content.php", {
              unsetCount_notification: user_mail
            });
        });
    }else{
        document.getElementById("notification_popUp_left_small").style.display = "block";
    }
}

// when user click on messages icon then messages popup open
// if use click again then close it
function openMessageArea_small(){
    if(document.getElementById("messages_popUp_left_small").style.display == "none"){
        document.getElementById("messages_popUp_left_small").style.display = "block";
        $(document).ready(function(){
            var user_mail = document.getElementById("user_mail").value;
            $("#count_message").load("../header/header_content.php", {
              unsetCount_message: user_mail
            });
        });
    }else{
        document.getElementById("messages_popUp_left_small").style.display = "none";
    }
}

// when user click on challenge icon then open challenge area 
// if you click back then close section
function openChallenge_small(){
    if(document.getElementById("challenges_popUp_left_small").style.display == "none"){
        document.getElementById("challenges_popUp_left_small").style.display = "block";
    }
    else{
        document.getElementById("challenges_popUp_left_small").style.display = "none";
    }
}

// when user start to search in search bar then search open automatical
// if user press outtarget then close the section
function resultSection(){
    document.getElementById("search-result").style.display = "block";
    $(document).ready(function(){
        var user_name = document.getElementById("search").value;
        if(user_name == ""){

        }else{
            $("#search_result_show").load("../header/header_content.php", {
                searchUser: user_name
            });
        }

        $(document).mouseup(function(e){
            var all_trades = $("#search-result");
            if(!all_trades.is(e.target) && all_trades.has(e.target).length == 0){
                all_trades.hide();
            }
        });
    });
}

function resultSection_small(){
    document.getElementById("search-result_small").style.display = "block";
    $(document).ready(function(){
        var user_name = document.getElementById("searc_small").value;
        if(user_name == ""){
           
        }else{
            $("#small_search_result").load("../header/header_content.php", {
                searchUser: user_name
            });
        }
    });
}
// ===========================================================================================================================================