
// sidebar
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function openSetting(){
    document.getElementById("mySettings").style.display = "block";
    document.getElementById("mySettings").style.width = "300px";
}
function closeSetting(){
    document.getElementById("mySettings").style.width = "0";
    document.getElementById("mySettings").style.display = "none";
}

function resultSection_small(){
    document.getElementById("search_result").style.display = "block";
    $(document).ready(function(){
        var user_name = document.getElementById("search_user").value;
        console.log(user_name);
        $("#hold_result").load("../header/header_content.php", {
            searchUser: user_name
        });
    });

    $(document).mouseup(function(e){
        var all_trades = $("#search_result");
        if(!all_trades.is(e.target) && all_trades.has(e.target).length == 0){
            all_trades.hide();
        }
    });
}

// function discover student
// ===========================================================================================================================================
setInterval(() => {
    discover_student();
}, 1000);
function discover_student(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-student").load("show_profile_content.php", {
           discoverStudent: hiddenEmail,
           title: "student"
        });
    });
}

setInterval(() => {
    discover_trainer();
}, 1000);
function discover_trainer(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-trainer").load("show_profile_content.php", {
            discoverTrainer: hiddenEmail,
            title_trainer: "trainer"
        });
    });
}

function followUser(obj){
    var followingEmail = obj.id;   // who i going to follow
    var followersEmail =  document.getElementById("hiddenEmail").value;  // const me 
    $(document).ready(function(){
        $(this).load("follow_user.php",{
            followingEmail: followingEmail,
            followersEmail: followersEmail        
        },function(){
            obj.style.border = "1px solid #d3d3d3";
            obj.style.background = "white";
            obj.style.color = "#071c2e";
            obj.innerHTML = "Following";
        });
    });
}

load_posts();
function load_posts(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        var post_type = "feeds";
        $("#activity_posts").load("show_posts.php",{
            getPost_email: global_mail,
            getCommonPost_type: post_type   ,
            getPostPhotoPath: "../Images/activity_stream/",
            getPostVideoPath: "../videos/activity_stream-vd/"
        });
    });
}

setInterval(() => {
    my_followers();
}, 1000);
function my_followers(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#my_followers").load("show_profile_content.php", {
            show_companion: global_mail
        });
    });
}

setInterval(() => {
    following_users();
}, 1000);
function following_users(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#following_user").load("show_profile_content.php", {
            show_following: global_mail
        });
    });
}

setInterval(() => {
    getPhoto_media ();
}, 1000);
function getPhoto_media (){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#photos_shared").load("show_profile_content.php", {
          show_photos_shared: global_mail
        });
    });
}

setInterval(() => {
    getVideo_media();
}, 1000);
function getVideo_media (){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#video_shared").load("show_profile_content.php", {
          show_video_shared: global_mail
        });
    });
}

// GET ALL CLASSES
// ==============================================================================================================
getAll_classes();
function getAll_classes(){
    console.log("allow");
    $(document).ready(function(){
        var getClass = document.getElementById("hiddenEmail").value;
        $("#courses_followed").load("show_profile_content.php", {
            getClass_settings: getClass
        });
    });
}

request_department();
function request_department(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#department_list").load("show_profile_content.php", {
            getListDep: email
        });
    });
}

// UPDATE USER INFO
// ==============================================================================================================
function update_data(obj){
    var school = document.getElementById("school").value;
    var birthday = document.getElementById("birthday").value;
    var location = document.getElementById("location").value;
    var contanct = document.getElementById("contanct").value;
    var department_list = document.getElementById("department_list").value;
    var Gender = document.getElementById("Gender").value;
    var email = document.getElementById("hiddenEmail").value;

    if(contanct.length > 11 || contanct.length < 10){
        document.getElementById("conatnct_holder");
    }else{
        $(document).ready(function(){
            obj.innerHTML = "updating...";
            $(this).load("profile_updates.php", {
                getSchool: school,
                getBd: birthday,
                getLocation: location,
                getContanct: contanct,
                getDep: department_list,
                getGender: Gender,
                ownerEmail: email
            }, function(){
                obj.innerHTML = "Updated";
            });
        });
    }
}

// get account detail and edit
// ================================================================================================================
loadAccount_detail();
function loadAccount_detail(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#getAccountDetail").load("profile_updates.php", {
            accoutn_updates: email
        });
    });
}

function update_Account_info(obj){
    var firstname_inputted = document.getElementById("firstname_inputted").value;
    var lastname_inputed = document.getElementById("lastname_inputted").value;
    var email = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(this).load("profile_updates.php", {
            get_firstname: firstname_inputted,
            get_lastname: lastname_inputed,
            account_email: email
        }, function(){
            obj.innerHTML = "Updated";
            loadAccount_detail();
        });
    });
}

function New_password(obj){
    var password_inputted = document.getElementById("password_inputted").value;
    var comfirm_password = document.getElementById("comfirm_password_inputted").value;
    var email = document.getElementById("hiddenEmail").value;

    if(password_inputted == ""){
        document.getElementById("errror").style.display = "block";
        document.getElementById("new_password").style.border = "1px solid red";
        document.querySelector(".error").innerHTML = "Input new Password!"
    }else if(password_inputted.length < 6){
        document.getElementById("new_password").style.border = "1px solid red";
        document.getElementById("errror").style.display = "block";
        document.querySelector(".error").innerHTML = "At least greater than 6 character, letters and number";
    }else if(comfirm_password == ""){
        document.getElementById("comfirm_password").style.border = "1px solid red";
        document.getElementById("errror").style.display = "block";
        document.querySelector(".error").innerHTML = "Comfirm Password!"
    }else if(password_inputted != comfirm_password){
        document.getElementById("new_password").style.border = "1px solid red";
        document.getElementById("comfirm_password").style.border = "1px solid red";
        document.getElementById("errror").style.display = "block";
        document.querySelector(".error").innerHTML = "Password not Match!"
    }else{
        $(document).ready(function(){
            $(this).load("profile_updates.php", {
                personal_email: email,
                new_password_inputted: password_inputted
            }, function(){
                document.getElementById("errror").style.display = "block";
                document.querySelector(".error").innerHTML = "Updated";
            });
        });
    }
}

// update setting
// ================================================================================================================
function update_location_setting(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getEmail_locater: email,
                location_visibles: "Enabled"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
               getEmail_locater: email,
               location_visibles: "disabled"
            });
        });
    }
}

// NOTIFICATION SETTINGS
// =======================================================================================================================
setInterval(() => {
    notifiation_settings_sec();
}, 1000);
function notifiation_settings_sec(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#notifiation_settings_sec").load("profile_updates.php", {
            get_noti_settings: email
        });
    });
}

function update_badge(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "Badge_on",
                collumn: "badge"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "Badge_off",
                collumn: "badge"
            });
        });
    }
}

function update_follow(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "On",
                collumn: "follow_board"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "Off",
                collumn: "follow_board"
            });
        });
    }
}

function like_comment(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "On",
                collumn: "like_comment"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "Off",
                collumn: "like_comment"
            });
        });
    }
}

function posts(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "On",
                collumn: "posts"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "Off",
                collumn: "posts"
            });
        });
    }
}

function noti_email(obj){
    if(obj.checked){
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "email_noti_on",
                collumn: "noti_email"
            });
        });
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("profile_updates.php", {
                getUser_email: email,
                notification_settings: "email_not_off",
                collumn: "noti_email"
            });
        });
    }
}