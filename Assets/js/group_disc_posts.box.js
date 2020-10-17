// PRESENT GROUP INFORMATION
// =======================================================================================================================
setInterval(() => {
    show_first_three();
}, 1000);
function show_first_three(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#most_used").load("group_discussion_content.box.php", {
           getMost_users: group_identity,
           GethiddenEmail: hiddenEmail
        });
    });
}

// WHEN USER CHOOSE IMAGE FILE THEN DISPALY IT ON TO MAKE PREVIEW
// ==================================================================================================================
function triggerInputFile_post(obj){
    obj.parentNode.previousElementSibling.click();
    previewPostedImage();
}

function previewPostedImage(){
    const inpFile = document.getElementById('group_posts');
    const imageContainer = document.getElementById('when_photo');
    const previewImage = imageContainer.querySelector(".preview_photo");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                previewImage.style.display = "block";
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
}

// SMALL DEVICE POST
// ======================================================================================================================
function triggerInputFile_post_small(obj){
    obj.parentNode.previousElementSibling.click();
    previewPostedImage_small();
}
function previewPostedImage_small(){
    const inpFile = document.getElementById('group_posts_small');
    const imageContainer = document.getElementById('when_photo_small');
    const previewImage = imageContainer.querySelector(".preview_photo_small");

    const video_preview = document.getElementById("when_video_small");
    const preview_video = video_preview.querySelector("#preview_video_small");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file.type == "video/mp4"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    imageContainer.style.display = "none";
                    video_preview.style.display = "block";
                    preview_video.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        }else if(file.type == "image/png"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    video_preview.style.display = "none";
                    imageContainer.style.display = "block";
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        }else if(file.type == "image/jpeg"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    video_preview.style.display = "none";
                    imageContainer.style.display = "block";
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
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
        var group_identity = document.getElementById("hiddenIdentity").value;
        console.log(group_identity);
        var post_type = "feeds";
        $("#hold_last_post").load("group_discussion_posts.php",{
          getPost_email: global_mail,
          getpost_type: post_type,
          getPhotoPath: "../Images/group_discusion/",
          group_identitify: group_identity
        });
    });
}
setInterval(() => {
    getPost_commenter_image();
}, 1000);
function getPost_commenter_image(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#commenter-image").load("group_discussion_posts.php",{
            getPost_commenter_image: globale_mail
        });
    });
}

// FUNCTION ADD COMMENT TO POST
// ===========================================================================================================
function add_comment(obj){
    var comments = obj.parentNode.parentNode.previousElementSibling.lastChild.lastChild.value;
    if(comments == ""){
        obj.innerHTML = "empty";
        obj.parentNode.parentNode.previousElementSibling.lastChild.lastChild.parentNode.style.border = "1.5px solid red";
    }else{
        $(document).ready(function(){
            var global_mail = document.getElementById("hiddenEmail").value;
            var post_id = obj.id;
            obj.innerHTML = "posting..";
            $("#hold-error-occur").load("group_discussion_posts.php",{
                getEmail_comments: global_mail,
                post_identity: post_id,
                getComment: comments
            },function(){
                obj.innerHTML = "post";
                obj.style.background = "#041a2f";
                obj.style.color = "white";
                obj.style.border = "none";
                obj.parentNode.parentNode.previousElementSibling.lastChild.lastChild.parentNode.style.border = "1px solid #d3d3d3";
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
        $(this).load("group_discussion_posts.php",{
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
        var comments = obj.parentNode.previousElementSibling.lastChild.value;
        if(comments == ""){
            obj.parentNode.previousElementSibling.lastChild.parentNode.style.border = "1px solid red";
        }else{
            var commeter_email = document.getElementById("hiddenEmail").value;
            $(this).load("group_discussion_posts.php",{
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
        $(this).load("group_discussion_posts.php",{
            Getcomment_id: Comment_identity,
            getEmail_repliedcomment: user_email,
            comment_comment_type: comment_post_type
        },function(getReplied_comment){
            show_area.innerHTML = getReplied_comment;
        });
    });
}

// FUNCTION LIKE AND DISLIKE COMMENT
// ====================================================================================================================================================
function like_dislike_comment(obj){
    var comment_id = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(this).load("group_discussion_posts.php",{
            getComment_Id: comment_id,
            getEmail_like_user: user_email
        });
    });
}


// GET ALL MEMBER WHICH ARE ONLINE/ACTIVE
// ======================================================================================================================================================
active_member();
function active_member(){
    $(document).ready(function(){
        var hiddenIdentity = document.getElementById("hiddenIdentity").value;
        var hidden_email = document.getElementById("hiddenEmail").value;
        $("#active_members").load("group_discussion_content.box.php", {
           getActive_member: hiddenIdentity,
           getMy_email: hidden_email
        });
    });
}

// when it come to small device load active member
// ==============================================================================
load_active_small();
function load_active_small(){
    $(document).ready(function(){
        var hiddenIdentity = document.getElementById("hiddenIdentity").value;
        var hidden_email = document.getElementById("hiddenEmail").value;
        $("#load_active").load("group_discussion_content.box.php", {
           getActive_member: hiddenIdentity,
           getMy_email: hidden_email
        });
    });
}

// METHORD FOR FOLLOWING USER AND SAVING USER
// ========================================================================================================================================
// =========================================================================================================================================
function followUser(obj){
    var followingEmail = obj.id;
    var followersEmail = document.getElementById("hiddenEmail").value;
    
    $(document).ready(function(){
        $(this).load("followScylla.php",{
            followingEmail: followingEmail,
            followersEmail: followersEmail        
        },function(response){
            obj.style.border = "1px solid #d3d3d3";
            obj.style.background = "white";
            obj.style.color = "#071c2e";
            obj.innerHTML = "Following";
        });
    });
}
// =========================================================================================================================================
// =========================================================================================================================================

// METHOD DISPLAY PROFILE IMAGE 
// ==========================================================================================================================================
setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#poster_image").load("group_discussion_content.box.php",{
            getProfileImage: requestProfileImage
        });
    });
}

setInterval(() => {
    getProfileImage_short_device();
}, 1000);
function getProfileImage_short_device(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $(".user-image").load("group_discussion_content.box.php",{
            getProfileImage: requestProfileImage
        });
    });
}