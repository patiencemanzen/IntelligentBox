// WHEN USER CHOOSE IMAGE FILE THEN DISPALY IT ON TO MAKE PREVIEW
// ==================================================================================================================
function previewBackgroundImage(obj){
    document.getElementById("profileImage").click();
    const inpFile = document.getElementById('profileImage');
    const imageContainer = document.getElementById('previewImage');
    const previewImage = imageContainer.querySelector("#preview_image");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            if(file.size > 1506440){
               obj.innerHTML = "File is bigger than 1MB";
            }else{
                obj.nextElementSibling.style.display = "block";
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    previewImage.setAttribute("src", this.result);
                    obj.nextElementSibling.style.display = "none";
                });
                reader.readAsDataURL(file);
            }
        }
    });
}

// THEN SUBMIT GIVEN PHOTO FOR BACKGROUND IMAGE
// ============================================================================================================================
function submit_background_image(obj){ 
    var loader = obj.parentNode.nextElementSibling.lastChild.previousElementSibling;   
    $(document).ready(function(){
        obj.innerHTML = "updating...";
        loader.style.display = "block";
        document.getElementById("hold_top_background").style.opacity = '.6';
        document.getElementById("preview-title").style.display = "none";
        document.getElementById("previewImage").style.display = "none";
        document.getElementById("update-btn").style.display = "none";
        document.getElementById("submit-background").style.display = "none";
        document.getElementById("edit-background_image").style.padding = "5px";

        var fd = new FormData();
        var files = $('#profileImage')[0].files[0];
        fd.append('backgroundImage',files);
        $.ajax({
            url:'profile_updates.php',
            type:'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(data){
                document.getElementById("error_foud").innerHTML = data;
                obj.innerHTML = "Update";
                loader.style.display = "none";
                document.getElementById("hold_top_background").style.opacity = '1';
                document.getElementById("preview-title").style.display = "block";
                document.getElementById("previewImage").style.display = "block";
                document.getElementById("update-btn").style.display = "block";
                document.getElementById("submit-background").style.display = "block";
                document.getElementById("edit-background_image").style.display = "none";
            }
        });
    });
}

// WHEN USER WHAT TO UPLOAD PROFILE IMAGE
// ==============================================================================================================================
function preview_profile_image(obj){
    document.getElementById("profileImageFile").click();
    const inpFile = document.getElementById('profileImageFile');
    const imageContainer = document.getElementById('preview-profile');
    const previewImage = imageContainer.querySelector("#preview-profile-image");

    inpFile.addEventListener("change",function(){
        obj.nextElementSibling.style.display = "block";
        const file = this.files[0];
        if(file){
            if(file.size > 1506440){
                obj.innerHTML = "File is bigger than 1MB";
            }else{
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    previewImage.setAttribute("src", this.result);
                    obj.nextElementSibling.style.display = "none";
                });
                reader.readAsDataURL(file);
            }
        }
    });
}


// SAVE USER BIO
// =====================================================================================================================================
function submit_bio(obj){
    var user_biography = document.getElementById("user_bio").value;
    var user_email = document.getElementById("email_session").value;

    if(user_biography == ""){
       document.getElementById("type-your-bio").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            obj.innerHTML = "Saving bio...";
            $("#hold_bio_error").load("profile_updates.php",{
               getEmail: user_email,
               getBio: user_biography
            },function(response){
                var obj = JSON.parse(response);
                obj.innerHTML = response;
                obj.innerHTML = "Saving bio...";
            });
        });
    }
}


// WHEN USER SUBMIT PROFILE IMAGE
// ==============================================================================================================================
function submit_profile_image(obj){
    var loader = obj.parentNode.previousElementSibling.lastChild.previousElementSibling;
    $(document).ready(function(){
        loader.style.display = "block";
        obj.innerHTML = "updating...";
        document.getElementById("getProfileimage").style.opacity = ".6";
        document.getElementById("profile-image-title").style.display = "none";
        document.getElementById("preview-profile").style.display = "none";
        document.getElementById("choose-profile-image").style.display = "none";
        document.getElementById("submit-profile-image").style.display = "none";


        var fd = new FormData();
        var files = $('#profileImageFile')[0].files[0];
        fd.append('profileImage',files);
        $.ajax({
            url:'profile_updates.php',
            type:'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(data){
                document.getElementById("getProfileimage").style.opacity = "1";
                document.getElementById("error_found").style.display = "block";
                document.getElementById("error_found").innerHTML = data;                
                obj.innerHTML = "update";
                loader.style.display = "none";

                document.getElementById("profile-image-title").style.display = "block";
                document.getElementById("preview-profile").style.display = "block";
                document.getElementById("choose-profile-image").style.display = "block";
                document.getElementById("submit-profile-image").style.display = "block";
                document.getElementById("edit_profile_image_section").style.display = "none";
            }
        });
    });
}

setTimeout(function(){
    $("#error_found").fadeOut("slow");
},3000);

// UPDATE CLASS SET TO NEW CLASS
// =====================================================================================================================================
function getClassImage(obj){
    document.getElementById("class_image").click();
    show_image_name();
}
show_all_departmet();
function show_all_departmet(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#select_department").load("show_profile_content.php", {
           getDepartment: globale_mail
        });
    });
}
function show_image_name(){
    const inpFile = document.getElementById('class_image');
    var name = document.querySelector(".image_name");
    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                name.innerHTML = "You choose "+ file.name;
                document.getElementById("submit_class").style.display = "block";
            });
            reader.readAsDataURL(file);
        }
    });
}

// CREATE NEW COURSE
// =====================================================================================================================================
function create_new_course(obj){
    var course_name = obj.parentNode.previousElementSibling.firstChild.nextElementSibling.lastChild.value;
    var class_identity = obj.id;
    var instruction = obj.parentNode.previousElementSibling.lastChild.previousElementSibling.lastChild.value;

    $(document).ready(function(){
        obj.innerHTML = "creating..."
        $(this).load("profile_updates.php", {
             getCourseName: course_name,
             getclassIdentity: class_identity,
             getInstruction: instruction
        }, function(data){
           obj.previousElementSibling.innerHTML = data;
           obj.innerHTML = "create"
        });
    });
}

// join class
// ========================================================================================================================================
function join_class(obj){
    var class_identity = obj.id;
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(this).load("profile_updates.php",{
            getClass_identity: class_identity,
            getUser: user_email
        }, function(data){
            obj.innerHTML = "joined";
        });
    });
}

// ask trainer
// =============================================================================================================
function support_image(obj){
    obj.parentNode.previousElementSibling.click();
    const inpFile = obj.parentNode.previousElementSibling;
    const imageContainer = obj.parentNode.parentNode.previousElementSibling.firstChild.nextElementSibling;
    const previewImage = imageContainer.querySelector("#preview_image");

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

function submit_que_trainer(obj){
   obj.innerHTML = "Sending..."
}

