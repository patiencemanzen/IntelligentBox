// methord to present more trainer
// ==============================================================================================================
// hold_trainer_list();
// function hold_trainer_list(){
//     $(document).ready(function(){
//         var my_email = document.getElementById("hiddenEmail").value;
//         $("#hold_trainer_list").load("Home_content.php", {
//             present_trainer: "trainer",
//             myMail: my_email
//         });
//     });
// }

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


// GET ALL GROUPS THAT HAVE BEEN CREATED ACCORDING TO USER WISH OR LOCATION AND INTEREST
// ===========================================================================================================================================
all_groups();
function all_groups(){
    $(document).ready(function(){
        var request_group = document.getElementById("hiddenEmail").value;
        $("#all_groups").load("Home_content.php", {
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
        $(this).load("Home_content.php", {
            getGroup_identity: group_identity,
            getUser_email: user_email
        }, function(data_response){
            console.log(data_response);
            obj.innerHTML = "Request sent"
        });
    });
}

more_class();
function more_class(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#more_classes").load("Home_content.php", {
            getClasses: user_email
        });
    });
}

function join_class(obj){
    var class_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(this).load("Home_content.php",{
            getClass_identity: class_identity,
            getUser: user_email
        }, function(data){
            obj.innerHTML = "joined";
        });
    });
}

new_follow();
function new_follow(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#new_follow_list").load("Home_content.php", {
            new_follow_user: user_email
        });
    });
}

// SHOW POSTS METHORD
// ========================================================================================================================
// =========================================================================================================================
// FUNCTION DISPLAY POST
// =============================================================================================================================================
// =============================================================================================================================================
display_post();
function display_post(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        $("#show_posts").load("show_posts.php",{
          getPost_email: global_mail,
          getPhotoPath: "../Images/activity_stream/",
          getVideoPath: "../videos/activity_stream-vd/"
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


// FUNCTION FETCH AND DISPLAY COMMENT FOUND ON EACH POST
// ===========================================================================================================
function Display_comment(obj){
    var post_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    var comment_post_type = "feeds";
    $(this).load("show_posts.php",{
        post_display_comments: post_identity,
        getMail: user_email,
        getPost_type: comment_post_type
    }, function(comment_found){
       obj.parentNode.parentNode.nextElementSibling.lastChild.previousElementSibling.innerHTML = comment_found;
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
                Display_comment(this);
                display_post();
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
            obj.style.color = "red";
            display_post();
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
                display_post();
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


// WHEN USER CHOOSE IMAGE FILE THEN DISPALY IT ON TO MAKE PREVIEW
// ==================================================================================================================
function triggerInputFile_post(){
    document.getElementById("post_photo").click();
    previewPost();
}
function previewPost(){
    const inpFile = document.getElementById('post_photo');
    const imageContainer = document.getElementById('when_photo');
    const previewImage = imageContainer.querySelector("#preview_photo");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                imageContainer.style.display = "block";
                previewImage.setAttribute("src", this.result);
                display_post();
            });
            reader.readAsDataURL(file);
        }
    });
}

function display_button(){
    var btn = document.getElementById("submit_post_btn").style.opacity = "1";
}

setInterval(() => {
    getSettingProfileImage();
}, 1000);
function getSettingProfileImage(){
    $(document).ready(function(){
        var requestImage = document.getElementById("hiddenEmail").value;
        $(".post-create-img").load("Home_content.php",{
            getImage: requestImage
        });
    });
}