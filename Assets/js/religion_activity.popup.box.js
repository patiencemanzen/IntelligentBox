// when user want to create it own post
// then run this function
function createPost(obj){
    var create = obj.parentNode.parentNode.parentNode.nextElementSibling;
    if(create.style.display == "block"){
        create.style.display = "none"; 
    }else{
        create.style.display = "block";
    }
}

// EACH CONTINET ACTIVITY STREAM
// ============================================================================================================================================
// =============================================================================================================================================
african_news();
function african_news(){
    $(document).ready(function(){
        var hiddenPageEmail = document.getElementById("hiddenName").value;
        var email = document.getElementById("hiddenEmail").value;
        $("#african_content").load("religion_content.php", {
            continet_content: "african",
            hiddenPageEmail: hiddenPageEmail,
            user_email: email
        });
    });
}

american_news();
function american_news(){
    $(document).ready(function(){
        var hiddenPageEmail = document.getElementById("hiddenName").value;
        $("#american_content").load("religion_content.php", {
            continet_content: "american",
            hiddenPageEmail: hiddenPageEmail
        });
    });
}

asia_news();
function asia_news(){
    $(document).ready(function(){
        var hiddenPageEmail = document.getElementById("hiddenName").value;
        $("#asia_content").load("religion_content.php", {
            continet_content: "asian",
            hiddenPageEmail: hiddenPageEmail
        });
    });
}

europe_news();
function europe_news(){
    $(document).ready(function(){
        var hiddenPageEmail = document.getElementById("hiddenName").value;
        $("#europe_content").load("religion_content.php", {
            continet_content: "europian",
            hiddenPageEmail: hiddenPageEmail
        });
    });
}

// ==============================================================================================================================================
// ==============================================================================================================================================

// save comment
// ===================================================================================================================================================
function save_comment(obj){
    var post_identity = obj.id;
    var comment = obj.parentNode.previousElementSibling.lastChild.value;
    var requestComment = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
      $(this).load("religion_content.php", {
          post_identity: post_identity,
          get_comment: comment,
          usr_email: requestComment
      }, function(){
          obj.innerHTML = "commented";
      });
    });
}

function like_dislike(obj){
    var post_identity = obj.id;
    var requestLike = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(this).load("religion_content.php", {
            post_id_like: post_identity,
            user_email: requestLike,
            table_name: "user_religion_post_like"
        }, function(){
            african_news();
            american_news();
            asia_news();
            europe_news();
        });
    });
}

function save_like_comment(obj){
    var post_identity = obj.id;
    var requestLike = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(this).load("religion_content.php", {
            post_id_like: post_identity,
            user_email: requestLike,
            table_name: "user_religion_post_comment_like"
        }, function(){
            african_news();
            american_news();
            asia_news();
            europe_news();
        });
    });
}

// chosoe image
// =========================================================================================================================
function choose_image(){
    document.getElementById("chosen_file").click();
    previewNewsSmall();
}
function previewNewsSmall(){
    const inpFile = document.getElementById('chosen_file');
    const imageContainer = document.getElementById('preview_image');
    const previewImage = imageContainer.querySelector("#image");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
}

setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#user_image_top").load("religion_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}

setInterval(() => {
    getProfileImage_post();
}, 1000);
function getProfileImage_post(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#user-image").load("religion_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}