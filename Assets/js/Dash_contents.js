// open about on each usr
function about_user(obj){
    var about_div = obj.parentNode.nextElementSibling;
    if(about_div.style.display == "block"){
        about_div.style.display = "none";
    }else{
       about_div.style.display = "block";
    }
}

function submit_admin(obj){
    var admin_email = document.getElementById("admin-email").value;
    var admin_password = document.getElementById("admin-password").value;

    if(admin_email == ""){
        document.getElementById("admin-email_input").style.border = "1.5px solid red";
    }else if(admin_password == ""){
        document.getElementById("admin-password-input").style.border = "1.5px solid red";
    }else{
        obj.innerHTML = "Loading data....";
        document.getElementById("form-admin").submit();
    }

}

// METHOD FOR DASH STUDENT
// ===============================================================================================================
setInterval(() => {
    count_student();
}, 1000);
function count_student(){
    $(document).ready(function(){
        $("#count_student").load("dash_content.box.php", {
            countStudent: "student"
        });
    });
}

setInterval(() => {
    count_trainer();
}, 1000);
function count_trainer(){
    $(document).ready(function(){
        $("#count_trainer").load("dash_content.box.php", {
            countTrainer: "trainer"
        });
    });
}

setInterval(() => {
    all_student();
}, 1000);
function all_student(){
    $(document).ready(function(){
        $("#all_student").load("dash_content.box.php", {
            getStudent: "student"
        });
    });
}

setInterval(() => {
    all_trainer();
}, 1000);
function all_trainer(){
    $(document).ready(function(){
        $("#trainer_list").load("dash_content.box.php", {
            getTrainer: "trainer"
        });
    });
}

setInterval(() => {
    classes();
}, 1000);
function classes(){
    $(document).ready(function(){
        $("#class_list").load("dash_content.box.php", {
            getClass: "class"
        });
    });
}

setInterval(() => {
    all_groups();
}, 1000);
function all_groups(){
    $(document).ready(function(){
        $("#groups_list").load("dash_content.box.php", {
            getGroups: "groups"
        });
    });
}

setInterval(() => {
    all_media();
}, 1000);
function all_media(){
    $(document).ready(function(){
        $("#all_media").load("dash_content.box.php", {
            getMedia: "media"
        });
    });
}

setInterval(() => {
    all_trades();
}, 1000);
function all_trades(){
    $(document).ready(function(){
        $("#all_trades").load("dash_content.box.php", {
            getTrades: "trades"
        });
    });
}

setInterval(() => {
    questions();
}, 1000);
function questions(){
    $(document).ready(function(){
        $("#question_answers").load("dash_content.box.php", {
            getQuestions: "trades"
        });
    });
}

function submit_trainer(obj){
    $(document).ready(function(){
        var trainer_firstname = document.getElementById("trainer_firstname").value;
        var trainer_lastname = document.getElementById("trainer_lastname").value;
        var trainer_email = document.getElementById("trainer_email").value;

        if(trainer_firstname == ""){
            document.getElementById("input_firstname").style.border = "1px solid red";
        }else if(trainer_lastname == ""){
            document.getElementById("input_lastname").style.border = "1px solid red";
        }else if(trainer_email == ""){
            document.getElementById("input_email").style.border = "1px solid red";
        }else{
            obj.innerHTML = "Creating...";
            $(this).load("dash_upadates.box.php", {
                getFirstname: trainer_firstname,
                getLastname: trainer_lastname,
                getEmail: trainer_email
            }, function(response){
                document.querySelector(".trainer_error").innerHTML = response;
                obj.innerHTML = "Submit trainer";
            });
        }
    });
}

// upload image and preview
// ==============================================================================================================
function triggerInputFile_story(){
    document.getElementById("story_image").click();
    previewStory_image();
}
function previewStory_image(){
    const inpFile = document.getElementById('story_image');
    const imageContainer = document.getElementById('image-preview');
    const previewImage = imageContainer.querySelector("#get_image");

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

// function display story
// ============================================================================================================================
setInterval(() => {
    display_story();
}, 1000);
function display_story(){
    $(document).ready(function(){
        $("#history_list").load("dash_content.box.php", {
            story: "history"
        });
    });
}

setInterval(() => {
    today_in_history();
}, 1000);
function today_in_history(){
    $(document).ready(function(){
        $("#today_in_history").load("dash_content.box.php", {
            day_history: "today_in_history"
        });
    });
}

// select all topics
// =======================================================================================================================================
setInterval(() => {
    topics();
}, 1000);
function topics(){
    $(document).ready(function(){
        $("#topics_area").load("dash_content.box.php", {
            topics: "topics"
        });
    });
}

// upload topics and preview
// ==============================================================================================================
function triggerTopics(){
    document.getElementById("image_file").click();
    previewTopics();
}
function previewTopics(){
    const inpFile = document.getElementById('image_file');
    const imageContainer = document.getElementById('Topics_image');
    const previewImage = imageContainer.querySelector("#image_pre");

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

// upload topics and preview
// ==============================================================================================================
function triggerNews(){
    document.getElementById("news_images").click();
    previewNews();
}
function previewNews(){
    const inpFile = document.getElementById('news_images');
    const imageContainer = document.getElementById('preview_news_image');
    const previewImage = imageContainer.querySelector("#preview_image_new");

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

// fetch news uploaded
// =============================================================================================================================================
news_uploaded();
function news_uploaded(){
    $(document).ready(function(){
        $("#news_uploaded").load("dash_content.box.php", {
            news_uploaded: "news"
        });
    });
}

// upload wordl news
// ==============================================================================================================
function triggerWorldNews(){
    document.getElementById("World_news_images").click();
    previewWorld_image();
}
function previewWorld_image(){
    const inpFile = document.getElementById('World_news_images');
    const imageContainer = document.getElementById('preview_world_news');
    const previewImage = imageContainer.querySelector("#preview_new");

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

// fetch news uploaded
// =============================================================================================================================================
setInterval(() => {
    world_news_trend();
}, 1000);
function world_news_trend(){
    $(document).ready(function(){
        $("#world_news_trend").load("dash_content.box.php", {
            world_news_trend: "news"
        });
    });
}

setInterval(() => {
    world_news_top();
}, 1000);
function world_news_top(){
    $(document).ready(function(){
        $("#select-top-story").load("dash_content.box.php", {
            world_news_top: "top_news"
        });
    });
}

// upload image and preview
// ==============================================================================================================
function trigger_content(){
    document.getElementById("content_images").click();
    preview_content_image();
}
function preview_content_image(){
    const inpFile = document.getElementById('content_images');
    const imageContainer = document.getElementById('preview_content_image');
    const previewImage = imageContainer.querySelector("#preview_image_continet");

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

// display religion content
// ================================================================================================================
setInterval(() => {
    display_content();
}, 1000);
function display_content(){
    $(document).ready(function(){
        $("#content_list_religion").load("dash_content.box.php", {
            content_list: "content"
        });
    });
}

// backup database
// =======================================================================================================================
setInterval(() => {
    backup_data_files();
}, 1000);
function backup_data_files(){
    $(document).ready(function(){
        $("#files_backed").load("dash_content.box.php", {
            data_file: "file"
        });
    });
}

// backup_data
// ========================================================
function backupDatabase(obj){
    $(document).ready(function(){
        $(this).load("../../Backup_Restore/backup.php", {
            data_backup: "back"
        });
    });
}

// restore database
// =======================================================
function restore_database(obj){
    var database_name = obj.id;
    $(document).ready(function(){
        obj.firstChild.innerHTML = "Restoring..."
        $(this).load("../../Backup_Restore/restore.php", {
            data_store: database_name
        }, function(){
            obj.firstChild.innerHTML = 'Restored';
        });
    });
}

// function send updates
// =====================================================================================================
function share_updates(obj){
    var updates_text = document.getElementById("updates").value;
    if(updates_text == ""){
        document.getElementById("updates-text").style.border = "1px solid red";
        document.getElementById("updates-text").style.borderRadius = "14px";
    }else{
        obj.innerHTML = "Sending updates....";
        document.getElementById("loader").style.display = "block";

        $(this).load("dash_upadates.box.php", {
            update_user: updates_text
        }, function(){
            obj.innerHTML = "Send updates";
            document.getElementById("loader").style.display = "none";
        });
    }
}