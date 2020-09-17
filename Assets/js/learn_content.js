setInterval(() => {
    load_top_learner();
}, 1000);
function load_top_learner(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        var hiddenPart = document.getElementById("hiddenPart").value;
        $("#student_list").load("learn_content.php", {
            get_some_learner: user_email,
            gethiddenPart: hiddenPart,
            title: "student"
        });
    });
}

setInterval(() => {
    load_top_trainer();
}, 1000);
function load_top_trainer(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        var hiddenPart = document.getElementById("hiddenPart").value;
        $("#trainer_list").load("learn_content.php", {
            get_some_learner: user_email,
            gethiddenPart: hiddenPart,
            title: "trainer"
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

setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $(".user_image_pro").load("learn_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}