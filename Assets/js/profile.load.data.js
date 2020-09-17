// METHOD BACKGROUND IMAGE 
// ============================================================================================================================================
setInterval(() => {
    getBackground();
}, 1000);
function getBackground(){
    $(document).ready(function (){
        var requestEmail_background = document.getElementById("hiddenEmail").value;
        $("#background_preload").css("display","block");
        $("#hold_top_background").load("profile_top_content.php",{
            email_background: requestEmail_background
        },function(){
            $("#background_preload").css("display","block");
        });
    });
}

// METHOD GET TOP BASIC USER DEYAIL
// ==========================================================================================================================================
setInterval(() => {
    getBasicDetail();
}, 1000);
function getBasicDetail(){
    $(document).ready(function(){
        var requestDetailImage = document.getElementById("hiddenEmail").value;
        $("#holdbasicDetail").load("profile_top_content.php",{
            getDetail: requestDetailImage
        });
    });
}

// METHOD FETCH BIO
// ===========================================================================================================================================
setInterval(() => {
    getBio();
}, 1000);
function getBio(){
    $(document).ready(function(){
        var requestBio = document.getElementById("hiddenEmail").value;
        $("#getBio").load("profile_top_content.php",{
            getBio: requestBio
        });
    });
}

// METHOD COUNT VIDEO
// ==============================================================================================================================================
setInterval(() => {
    countVideo();
}, 1000);
function countVideo(){
    $(document).ready(function(){
        var requestVideoCount = document.getElementById("hiddenEmail").value;
        $("#countVideo").load("profile_top_content.php",{
            getvideoCount:requestVideoCount
        });
    });
}

// METHOD COUNT PHOTO 
// ==================================================================================================================================
setInterval(() => {
    countPhoto();
}, 1000);
function countPhoto(){
    $(document).ready(function(){
        var requestPhotoCount = document.getElementById("hiddenEmail").value;
        $("#countPhoto").load("profile_top_content.php",{
            getPhotoCount: requestPhotoCount
        });
    });
}

// METHOD DISPLAY PROFILE IMAGE 
// ==========================================================================================================================================
setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#getProfileimage").load("profile_top_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}

// METHOD DISPLAY PROFILE IMAGE ON SETTING POPUP
// ==========================================================================================================================================
setInterval(() => {
    getSettingProfileImage();
}, 1000);
function getSettingProfileImage(){
    $(document).ready(function(){
        var requestImage = document.getElementById("hiddenEmail").value;
        $("#user-image-settings").load("profile_top_content.php",{
            getImage: requestImage
        });
    });
}

// METHOD DISPLAY IMAGE ON AUTOBIOGRAPHY
setInterval(() => {
    getprofileImage_autoBio();
}, 1000);
function getprofileImage_autoBio(){
    $(document).ready(function(){
        var requestImage = document.getElementById("hiddenEmail").value;
        $("#auto_bio").load("profile_top_content.php",{
            getAuto_image: requestImage
        });
    });
}


setInterval(() => {
    getProfileImage_create_group();
}, 1000);
function getProfileImage_create_group(){
    $(document).ready(function(){
        var requestImage = document.getElementById("hiddenEmail").value;
        $("#create_group_profile_image").load("profile_top_content.php", {
            getGroupCreateimage: requestImage
        });
    });
}
