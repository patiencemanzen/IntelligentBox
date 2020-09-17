// when user click on textarea 
// then large creation post open up
function openPostCreation(){
    var creation = document.getElementById("create-stoty-prive");
    if(creation.style.display == "block"){
        creation.style.display = "none";
    }else{
        creation.style.display = "block";
    }
}

// DISPLAY CONTINENT CONTENT 
// ===========================================================================================================================================
// ===========================================================================================================================================
american_content();
function american_content(){
    $(document).ready(function(){
        $("#america-history").load("history_content.box.php", {
            continet: "american"
        })
    });
}

african_content();
function african_content(){
    $(document).ready(function(){
        $("#africa-history").load("history_content.box.php", {
            continet: "african"
        })
    });
}

asian_content();
function asian_content(){
    $(document).ready(function(){
        $("#asia-history").load("history_content.box.php", {
            continet: "asian"
        })
    });
}

europe_content();
function europe_content(){
    $(document).ready(function(){
        $("#europe-history").load("history_content.box.php", {
            continet: "europian"
        })
    });
}
// ==========================================================================================================================================
// ===========================================================================================================================================

// today i fistory content
// [=================================================================================================================================================]
setInterval(() => {
    today_history();
}, 1000);
function today_history(){
    $(document).ready(function(){
        $("#t_day_history").load("history_content.box.php", {
            today: "history"
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
        $("#getProfileimage").load("history_content.box.php",{
            getProfileImage: requestProfileImage
        });
    });
}

function triggerInputFile_story(){
    document.getElementById("chosen_image").click();
    previewBackgroundImage();
}
function previewBackgroundImage(){
    const inpFile = document.getElementById('chosen_image');
    const imageContainer = document.getElementById('news_image');
    const previewImage = imageContainer.querySelector("#image");

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


// display defined story
// ==============================================================================================================
setInterval(() => {
    defined_story();
}, 1000);
function defined_story(){
    $(document).ready(function(){
        $("#defined_story").load("history_content.box.php", {
            defined: "defined"
        })
    });
}

// like and dislike history
// ===============================================================================================================
function like_dislike(obj){
    var post_id = obj.id;
    var likers = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(this).load("history_content.box.php", {
            post_identity: post_id,
            likers_email: likers
        }, function(){
            american_content();
            african_content();
            asian_content();
            europe_content();
        });
    });
}

setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);