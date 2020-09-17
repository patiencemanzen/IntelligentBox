// load group 1 member
// ==============================================================================================================
group_1_member();
function group_1_member(){
    $(document).ready(function(){
        var group_url = document.getElementById("group_1_url").value;
        $("#group_1_member").load("challenges_content.box.php", {
            get_group_1_content: group_url
        });
    });
}
    
group_2_member();
function group_2_member(){
    $(document).ready(function(){
        var group_url = document.getElementById("group_1_url").value;
        $("#group_2_member").load("challenges_content.box.php", {
            get_group_1_content: group_url
        });
    });
}

// ON SMALL DEVICE
// ====================================================================
group_2small_member();
function group_2small_member(){
    $(document).ready(function(){
        var group_url = document.getElementById("group_1_url").value;
        $("#load_group_memeber_1").load("challenges_content.box.php", {
            get_group_1_content: group_url
        });
    });
}

group_1small_member();
function group_1small_member(){
    $(document).ready(function(){
        var group_url = document.getElementById("group_1_url").value;
        $("#groupd_2_content").load("challenges_content.box.php", {
            get_group_1_content: group_url
        });
    });
}

function choose_file(obj){
    document.getElementById("chosen_file").click();
    previewImage();
}
function previewImage(){
    const inpFile = document.getElementById('chosen_file');
    const imageContainer = document.getElementById('for-image');
    const previewImage = imageContainer.querySelector(".preview_photo");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                imageContainer.style.display = "block";
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
}


function choose_file_small(obj){
    document.getElementById("chosen_file_small").click();
    previewImage_small();
}
function previewImage_small(){
    const inpFile = document.getElementById('chosen_file_small');
    const imageContainer = document.getElementById('for_small_image');
    const previewImage = imageContainer.querySelector("#preview_small_image");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                imageContainer.style.display = "block";
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
}

// FUNCTION DISPLAY POST
// =============================================================================================================================================
// =============================================================================================================================================
display_post();
function display_post(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        var challenge_url = document.getElementById("challenge_url").value;

        $("#each-post-list").load("show_challenge_posts.php",{
          getPost_email: global_mail,
          getChallenge_url: challenge_url
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
            $("#hold-error-occur").load("show_challenge_posts.php",{
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
        $(this).load("show_challenge_posts.php",{
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
            $(this).load("show_challenge_posts.php",{
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
// FUNCTION LIKE AND DISLIKE COMMENT
// ====================================================================================================================================================
function like_dislike_comment(obj){
    var comment_id = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(this).load("show_challenge_posts.php",{
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
        var global_mail = document.getElementById("hiddenEmail").value;
        var post_type = "profile";
        $("#hold_profile_image_post").load("show_challenge_posts.php",{
          getProfile_post_email: global_mail,
          getPost_type: post_type,
          getPath: "../Images/profile-img/profile-image/",
          getVideoPath: "../videos/activity_stream-vd/"
        });
    });
}

setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);