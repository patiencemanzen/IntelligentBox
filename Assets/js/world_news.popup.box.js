// when user want create or define it own story
function createStory(obj){
    var story = obj.parentNode.parentNode.parentNode.parentNode.nextElementSibling;
    if(story.style.display == "block"){
        story.style.display = "none";
    }else{
        story.style.display = "block";
    }
}

// open sidebar for continet
function openSide() {
    document.getElementById("sidebar_small").style.width = "330px";
}
function closeSide() {
    document.getElementById("sidebar_small").style.width = "0";
}

// open continental news section
function openNav() {
    document.getElementById("sideBar").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("sideBar").style.width = "0";
}

// METHOD DISPLAY PROFILE IMAGE 
// ==========================================================================================================================================
setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#newPage_profile_image").load("world_news_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}

setInterval(() => {
    user_image();
}, 1000);
function user_image(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $(".user-image").load("world_news_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}
// EACH AND EVERY CONTINET
// ============================================================================================================================================
// ============================================================================================================================================
getAfrican_interface();
function getAfrican_interface(){
    var requestNews = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#africans-news").load("world_news_content.php", {
            continet: "african",
            requestNews: requestNews
        });
    });
}

getAmerican_interface();
function getAmerican_interface(){
    var requestNews = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#american-news").load("world_news_content.php", {
            continet: "american",
            requestNews: requestNews
        });
    });
}

getAsian_interface();
function getAsian_interface(){
    var requestNews = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#asian-news").load("world_news_content.php", {
            continet: "Asian",
            requestNews: requestNews
        });
    });
}

getEuropian_interface();
function getEuropian_interface(){
    var requestNews = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#europian-news").load("world_news_content.php", {
            continet: "Europian",
            requestNews: requestNews
        });
    });
}

// ============================================================================================================================================
// ============================================================================================================================================

// CONTINENATL NEWS
// ===========================================================================================================================================
african_news();
function african_news(){
    $(document).ready(function(){
        var requestNews = document.getElementById("hiddenEmail").value;
        $("#all_news_continet").load("world_news_content.php", {
            african_news: "africa",
            methodology: "politics",
            userEmail: requestNews
        });
    });
}

// CONTINENATL NEWS
// ===========================================================================================================================================
all_news_sport();
function all_news_sport(){
    $(document).ready(function(){
        var requestNews = document.getElementById("hiddenEmail").value;
        $("#all_news_sport").load("world_news_content.php", {
            african_news: "africa",
            methodology: "sport"
        });
    });
}

// function submit_comment
// ============================================================================================================================================
function save_comment(obj){
    var news_identity = obj.id;
    var requestNews = document.getElementById("hiddenEmail").value;
    var comments = obj.parentNode.previousElementSibling.lastChild.value;
   console.log(news_identity+"--"+requestNews+"--"+comments);
    if(comments == ""){
        obj.parentNode.previousElementSibling.style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $(this).load("world_news_content.php", {
                new_id: news_identity,
                userEmail: requestNews,
                comments_inputted: comments
            }, function(data){
                console.log(data);
            });
        });
   }
}

function triggerInputFile_news(){
    document.getElementById("choose_news").click();
    previewNews();
}
function previewNews(){
    const inpFile = document.getElementById('choose_news');
    const imageContainer = document.getElementById('preview_news');
    const previewImage = imageContainer.querySelector("#preview");

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

// FETCH ALL DEFINED NEWS
// ================================================================================================================
getDefinedNews();
function getDefinedNews(){
    $(document).ready(function(){
        var requestNews = document.getElementById("hiddenEmail").value;
        $("#defined_news").load("world_news_content.php", {
            user_news: requestNews
        });
    });
}

// FETCH ALL DEFINED NEWSON SMALL DEVICE
// ================================================================================================================
getNewsDefined();
function getNewsDefined(){
    $(document).ready(function(){
        var requestNews = document.getElementById("hiddenEmail").value;
        $("#small_device_story").load("world_news_content.php", {
            user_small: requestNews
        });
    });
}


function save_defined_comment(obj){
    var news_identity = obj.id;
    var requestNews = document.getElementById("hiddenEmail").value;
    var comments = obj.parentNode.previousElementSibling.lastChild.value;
   console.log(news_identity+"--"+requestNews+"--"+comments);
    if(comments == ""){
        obj.parentNode.previousElementSibling.style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $(this).load("world_news_content.php", {
                news_identity: news_identity,
                user_email: requestNews,
                getComment_found: comments
            }, function(data){
                console.log(data);
            });
        });
   }
}

// ON SMALL DEVICE
// ===================================================================================================================
function trigger_news(){
    document.getElementById("choose_news_small").click();
    previewNewsSmall();
}
function previewNewsSmall(){
    const inpFile = document.getElementById('choose_news_small');
    const imageContainer = document.getElementById('choose_image');
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

    
setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);