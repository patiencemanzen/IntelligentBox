// FUNCTION THAT SHOW OR DISPLAY ALL DEPARTMENT USER CAN LIKE ON RIGHT SIDE
// ========================================================================================================================
// ========================================================================================================================
setInterval(() => {
    show_departments();
}, 1000);
function show_departments(){
    $(document).ready(function(){
        var global_email = document.getElementById("hiddenEmail").value;
        $("#separtment_list").load("show_profile_content.php",{
           getEmail_list: global_email
        });
    });
}

// FUNCTION THAT SHOW ALL PHOTO THAT HAVE BEEN PRESENTE BEFORE
// ================================================================================================================================
// ================================================================================================================================
setInterval(() => {
    show_all_photos();
}, 1000);
function show_all_photos () {
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#get_all_photos").load("show_profile_content.php",{
            get_all_photos: globale_mail
        });
    });
}


// FUNCTION THAT SHOW NEARBY FRIEND
// =======================================================================================================================================
// ============================================================================================================================================
setInterval(() => {
    nearBy_people();
}, 1000);
function nearBy_people(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#friendList").load("show_profile_content.php",{
          getEmail_nearBy: globale_mail
        });
    });
}
function followUser(obj){
    var followingEmail = obj.id;   // who i going to follow
    var followersEmail =  document.getElementById("hiddenEmail").value;  // const me 
    $(document).ready(function(){
        obj.innerHTML = "Process...";
        obj.style.opacity = ".7";
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

// FUNCTION THAT DISPLAY MORE TRAINER
// ======================================================================================================================================================
// ======================================================================================================================================================
setInterval(() => {
    more_trainer();
    more_trainer_on_trainer();
}, 2000);
function more_trainer(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#getMoreTrainer").load("show_profile_content.php",{
           more_trainer_email: globale_mail
        });
    });
}
function more_trainer_on_trainer(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#find-more-trainer").load("show_profile_content.php",{
           more_trainer_on_trainer: globale_mail
        });
    });
}



// SHIW USER MORE INFO
// ======================================================================================================================================
// ======================================================================================================================================
show_user_Moreinfo();
function show_user_Moreinfo(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#setup_more_info").load("show_profile_content.php",{
           get_intro_email: globale_mail
        });
    });
}

// select option
// ==================================================================================================================
select_option();
function select_option(){
    $(document).ready(function(){
        var requestOption = document.getElementById("hiddenEmail").value;
        $("#set_trade").load("show_profile_content.php", {
            request_option: requestOption
        });
    });
}

function submit_Moreinfo(obj){
   var globale_mail = document.getElementById("hiddenEmail").value;
   var location = document.getElementById("location_set").value;
   var school = document.getElementById("set_school").value;
   var trade = document.getElementById("set_trade").value;
   var level = document.getElementById("set_level").value;
   var birthday = document.getElementById("set_dob").value;
   var contact = document.getElementById("set_contact").value;
   var gender = document.getElementById("gender").value;

//    check if field is empty
// =============================================================================
   if(location == ""){
       document.getElementById("set_up_location").style.border = "1.5px solid red";
   }else if(school == ""){
       document.getElementById("setup_school").style.border = "1.5px solid red";
   }else if(birthday == ""){
       document.getElementById("setup_dateof_birth").style.border = "1.5px solid red";
   }else if(contact == ""){
       document.getElementById("setup_contact").style.border = "1.5px solid red";
   }else{
    $(document).ready(function(){
        obj.innerHTML = "Processing....";
        $("#setup_more_info").load("show_profile_content.php",{
          getLocation: location,
          getSchool: school,
          getTrade: trade,
          getLevel: level,
          getBirthday: birthday,
          getContact: contact,
          getGender: gender,
          getMail_info: globale_mail
        },function(response){
           show_user_Moreinfo();
           console.log(response);
        });
    });
   }
}

// SEND PROFILE IMAGE REQUEST
// ========================================================================================================================
// ==========================================================================================================================
setInterval(() => {
    getprofile_image_on();
}, 1000);
function getprofile_image_on(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#post-create-img").load("profile_top_content.php",{
           getProfile_image_email: globale_mail
        });
    });
}

// FUNCTION DISPLAY POST
// =============================================================================================================================================
// =============================================================================================================================================
display_post();
function display_post(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#hold_last_post").load("show_posts.php",{
            getPost_email: email,
            getCommonPost_type: "feeds",
            getPostPhotoPath: "../Images/activity_stream/",
            getPostVideoPath: "../videos/activity_stream-vd/"
        });
    });
}
setInterval(() => {
    getPost_profile_image();
}, 1000);
function getPost_profile_image(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#load_profile_post").load("profile_top_content.php",{
            getPost_profile_image: globale_mail
        });
    });
}
setInterval(() => {
    getPost_commenter_image();
}, 1000);
function getPost_commenter_image(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#commenter-image").load("profile_top_content.php",{
            getPost_commenter_image: globale_mail
        });
    });
}


// FUNCTION ADD COMMENT TO POST
// ===========================================================================================================
function add_comment(obj){
    obj.innerHTML = "posting..";
    var comments = obj.parentNode.previousElementSibling.lastChild.lastChild.previousElementSibling.value;
    if(comments == ""){
        obj.innerHTML = "empty";
        obj.parentNode.previousElementSibling.lastChild.lastChild.parentElement.style.border = "1.5px solid red";
    }else{
        $(document).ready(function(){
            var global_mail = document.getElementById("hiddenEmail").value;
            var post_id = obj.id;
            $("#hold-error-occur").load("show_posts.php",{
                getEmail_comments: global_mail,
                post_identity: post_id,
                getComment: comments
            },function(){
                obj.innerHTML = "post";
                obj.style.background = "#041a2f";
                obj.style.border = "none";
                obj.parentNode.previousElementSibling.lastChild.lastChild.parentElement.style.border = "1px solid #d3d3d3";
                comments = "";
            });
        });
    }
}


// FUNCTION LIKE AND DISLIKE
// ===========================================================================================================================================
function like_dislike(obj){
    var post_id = obj.id;
    var liker_email = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(this).load("show_posts.php",{
            post_identity_like: post_id,
            liker_mail: liker_email
        },function(){
            count_like(this);
        });
    });
}


// WHEN IT COMES TO POST COMMENT REPLY
// =================================================================================================================================================
function comment_reply(obj){
    $(document).ready(function(){
        var comment_id = obj.id;
        console.log(comment_id);
        var comments = obj.parentNode.previousElementSibling.lastChild.value;
        if(comments == ""){
            obj.parentNode.previousElementSibling.lastChild.parentNode.style.border = "1px solid red";
        }else{
            var commeter_email = document.getElementById("hiddenEmail").value;
            $(this).load("show_posts.php",{
                 getComment_id: comment_id,
                 getComment: comments,
                 getCommneter_email: commeter_email 
            },function(){
                obj.style.border = "none";
                obj.style.background = "#041a2f";
                obj.parentNode.previousElementSibling.lastChild.parentNode.style.border = "1px solid #d3d3d3";
                comment = "";
            });
        }
    });
}

// DISPLAY COMMENT REPLY FOUND
// ====================================================================================================================================================
function comment_reply_display(obj){
    $(document).ready(function(){
        var Comment_identity = obj.id;
        var user_email = document.getElementById("hiddenEmail").value;
        var comment_post_type = "feeds";
        var show_area = obj.parentNode.nextElementSibling.lastChild.previousElementSibling;
        $(this).load("show_posts.php",{
            Getcomment_id: Comment_identity,
            getEmail_repliedcomment: user_email,
            comment_comment_type: comment_post_type
        },function(getReplied_comment){
            show_area.innerHTML = getReplied_comment;
        });
    });
}

// FUNCTION DISPLAY ALL LIKES ON COMMENTS
// ====================================================================================================================================================
function show_comment_likes(obj){
    $(document).ready(function(){
        var comment_idintity = obj.id;
        var user_email = document.getElementById("hiddenEmail").value;
        var counter_holder = obj.nextElementSibling;

        $(this).load("show_posts.php",{
            getComment_count_like_identity: comment_idintity,
            getUser_email: user_email
        },function(data_count_comment_likes){
           counter_holder.innerHTML = data_count_comment_likes;
        });
    });
}

// FUNCTION LIKE AND DISLIKE COMMENT
// ====================================================================================================================================================
function like_dislike_comment(obj){
    var comment_id = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(this).load("show_posts.php",{
            getComment_Id: comment_id,
            getEmail_like_user: user_email
        });
    });
}


// IF REQUEST IS TO DISPLAY PROFILE IMAGE THAT HAVE BEEN POSTED/UPLOADED
// =================================================================================
Display_current_profile_post();
function Display_current_profile_post(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#hold_profile_image_post").load("show_posts.php",{
            getProfile_post_email: user_email,
            getPost_profile_type: "profile",
            getPath: "../Images/profile-img/profile-image/",
            getVideoPath: "../videos/activity_stream-vd/"
        });
    });
}

// IF REQUEST IS TO DISPLAY USER TRAINERS
// ===================================================================================
show_all_trainers();
function show_all_trainers(){
    var global_mail = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#holder_my_trainer").load("show_profile_content.php",{
            getTrainer_all: global_mail
        });
    });
}

// SHOW ALL COURSE BASED ON DEPARTMENT USER BELONG TO
// =====================================================================================
get_all_course ();
function get_all_course (){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#load_courses_dep").load("show_profile_content.php",{
            getAll_course: global_mail
        });
    })
}

// get all grou i have created
// ============================================================================================================
getAllgroups();
function getAllgroups(){
    $(document).ready(function(){
        var getGroup = document.getElementById("hiddenEmail").value;
        $("#load_group").load("show_profile_content.php", {
           getAll_group: getGroup
        });
    });
}

// GET ALL GROUPS I'VE JOINED
// ================================================================================================================
getMy_groups();
function getMy_groups(){
    $(document).ready(function(){
        var getGroups = document.getElementById("hiddenEmail").value;
        $("#all_group_joined").load("show_profile_content.php", {
            getAllMy_groups: getGroups
        });
    });
}

// GET ALL CLASSES
// ==============================================================================================================
getAll_classes();
function getAll_classes(){
    $(document).ready(function(){
        var getClass = document.getElementById("hiddenEmail").value;
        $("#class_list").load("show_profile_content.php", {
            getAll_class: getClass
        });
    });
}

// show all class user might like
// ======================================================================================================================
setInterval(() => {
    show_class();
}, 1000);
function show_class(){
    $(document).ready(function(){
        var getClass = document.getElementById("hiddenEmail").value;
        $("#usr_class").load("show_profile_content.php", {
           show_class_like: getClass
        });
    });
}

setInterval(() => {
    count_recieved_questions();
}, 1000);
function count_recieved_questions(){
    $(document).ready(function(){
        var requestAmmount = document.getElementById("hiddenEmail").value;
        $("#count_recieved_question").load("../Questions&Answers/question_answers.box.php", {
           count_recieved_question: requestAmmount
        });
    });
}

// shared file
// ==========================================================================================================================================
display_chesen_user();
function display_chesen_user(){
    $(document).ready(function(){
        var Email =  document.getElementById("hiddenEmail").value;
        $("#chosen_list").load("show_profile_content.php", {
           choose_list: Email
        });
    });
}

// choose user
// =====================================================================================================================
var chosen_list = [];  // array data user selected

function choose_user(obj){
    if(obj.checked){
        chosen_length = chosen_list.length;
        if(chosen_length > 0){
            document.getElementById("chose_user_btn").style.display = "none";
        }else{
            chosen_list.push(obj.value);
            document.getElementById("chose_user_btn").style.display = "block"; 
        }
    }else{ 
        chosen_list.pop(obj.value);
    }
}

function hold_input_form(){
    $(document).ready(function(){
        var Email =  document.getElementById("hiddenEmail").value;
        $("#hold_input_shared").load("show_profile_content.php", {
            form_input_share: Email,
            data_we_select: chosen_list
        }, function(){
            document.querySelector(".notice_user").innerHTML = "Choose file to share";
            document.getElementById("chose_user_btn").style.display = "none";
            document.getElementById("chosen_list").style.display = "none";
        });
    });
}

function choose_file_share(){
    document.getElementById("chosen_file_share").click();
    previewFileChoosen();
}

function previewFileChoosen(){
    const inpFile = document.getElementById('chosen_file_share');
    const imageContainer = document.getElementById('preview_file_shared');
    const previewImage = imageContainer.querySelector("#images");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                imageContainer.style.display = "block";
                previewImage.setAttribute("src", this.result);
                document.getElementById("send_file").style.display = "block";
            });
            reader.readAsDataURL(file);
        }
    });
}

// recieve notes shared
// ===================================================================================================
display_shared_notes();
function display_shared_notes(){
    $(document).ready(function(){
        var Email =  document.getElementById("hiddenEmail").value;
        $("#shared_notes_files").load("show_profile_content.php", {
          get_shared_notes: Email
        });
    });
}

shared_image_files();
function shared_image_files(){
    $(document).ready(function(){
        var Email =  document.getElementById("hiddenEmail").value;
        $("#shared_image_files").load("show_profile_content.php", {
            get_shared_image: Email
        });
    });
}

function delete_file(obj){
    var file_identity = obj.id;
    var my_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.firstChild.innerHTML = "Deleting...";
        $(this).load("show_profile_content.php", {
            delete_file: file_identity,
            delete_email: my_email
        }, function(){
            document.getElementById("downlor_file").style.display = "none";
            obj.firstChild.innerHTML = "Deleted";
            display_shared_notes();
        });
    });
}