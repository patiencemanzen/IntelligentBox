// FUNCTION DISPLAY POST
// =============================================================================================================================================
// =============================================================================================================================================
display_post();
function display_post(){
    $(document).ready(function(){
        var global_mail = document.getElementById("hiddenEmail").value;
        var group_identity = document.getElementById("hiddenIdentity").value;
        var post_type = "feeds";
        $("#list-group-posts").load("group_posts.box.php",{
            getviewPost_email: global_mail,
            getpost_type: post_type,
            getPhotoPath: "../Images/group_discusion/",
            group_identity: group_identity
        });
    });
}

setInterval(() => {
    getPost_commenter_image();
}, 1000);
function getPost_commenter_image(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#commenter-image").load("group_posts.box.php",{
            getPost_commenter_image: globale_mail
        });
    });
}

// FUNCTION ADD COMMENT TO POST
// ===========================================================================================================
function add_comment(obj){
    var comments = obj.parentNode.previousElementSibling.lastChild.lastChild.value;
    if(comments == ""){
        obj.innerHTML = "empty";
        obj.parentNode.previousElementSibling.lastChild.lastChild.parentNode.style.border = "1.5px solid red";
    }else{
        $(document).ready(function(){
            var global_mail = document.getElementById("hiddenEmail").value;
            var post_id = obj.id;
            obj.innerHTML = "posting..";
            $("#hold-error-occur").load("group_posts.box.php",{
                getEmail_comments: global_mail,
                post_identity: post_id,
                getComment: comments
            },function(){
                obj.innerHTML = "post";
                obj.style.background = "#041a2f";
                obj.style.border = "none";
                obj.parentNode.previousElementSibling.lastChild.lastChild.parentNode.style.border = "1px solid #d3d3d3";
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
        $(this).load("group_posts.box.php",{
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
            $(this).load("group_posts.box.php",{
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
        var show_area = obj.parentNode.parentNode.nextElementSibling.lastChild.previousElementSibling;
        $(this).load("group_posts.box.php",{
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
        $(this).load("group_posts.box.php",{
            getComment_Id: comment_id,
            getEmail_like_user: user_email
        });
    });
}

// JOIN GROUP
// =======================================================================================================================================
function join_group(obj){
    var group_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.innerHTML = "Sending request...";
        $(this).load("all_groups.box.php", {
            getGroup_identity: group_identity,
            getUser_email: user_email
        }, function(data_response){
            obj.innerHTML = "Request sent"
        });
    });
}

function rel_group(){
    var user_email = document.getElementById("hiddenEmail").value;
    var group_identity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#rel-group").load("group_discussion_content.box.php", {
           email_group_rel: user_email,
           group_ide: group_identity
        });
    });
}
rel_group();

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
