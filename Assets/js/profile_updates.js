// WHEN USER CHOOSE IMAGE FILE THEN DISPALY IT ON TO MAKE PREVIEW
// ==================================================================================================================
function triggerInputFile_background(){
    document.getElementById("profileImage").click();
    previewBackgroundImage();
}
function previewBackgroundImage(){
    const inpFile = document.getElementById('profileImage');
    const imageContainer = document.getElementById('previewImage');
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

// THEN SUBMIT GIVEN PHOTO FOR BACKGROUND IMAGE
// ============================================================================================================================
function submit_background_image(){    
    $(document).ready(function(){
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
            }
        });
    });
}

// WHEN USER WHAT TO UPLOAD PROFILE IMAGE
// ==============================================================================================================================
function trigger_profile_image(){
    document.getElementById("profileImageFile").click();
    preview_profile_image();
}

function preview_profile_image(){
    const inpFile = document.getElementById('profileImageFile');
    const imageContainer = document.getElementById('preview-profile');
    const previewImage = imageContainer.querySelector("#preview-profile-image");

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


// SAVE USER BIO
// =====================================================================================================================================
function submit_bio(){
    var user_biography = document.getElementById("user_bio").value;
    var user_email = document.getElementById("email_session").value;

    if(user_biography == ""){
       document.getElementById("type-your-bio").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $("#hold_bio_error").load("profile_updates.php",{
               getEmail: user_email,
               getBio: user_biography
            },function(response){
                var obj = JSON.parse(response);
                alert(response);
            });
        });
    }
}


// WHEN USER SUBMIT PROFILE IMAGE
// ==============================================================================================================================
function submit_profile_image(){
    $(document).ready(function(){
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
                document.getElementById("error_found").innerHTML = data;
            }
        });
    });
}


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

