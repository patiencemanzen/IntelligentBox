// METHORD FOR FETCH EACH RELIGION CONTINET CONTENT
// ================================================================================================================
// ================================================================================================================
north_south_content();
function north_south_content(){
    $(document).ready(function(){
        var page_religion = document.getElementById("hiddenPage").value;
        $("#america-history").load("religion_content.php", {
            continet: "american",
            page_religion: page_religion
        });
    });
}

africa_content();
function africa_content(){
    $(document).ready(function(){
        var page_religion = document.getElementById("hiddenPage").value;
        $("#africa-history").load("religion_content.php", {
            continet: "african",
            page_religion: page_religion
        });
    });
}

europian_content();
function europian_content(){
    $(document).ready(function(){
        var page_religion = document.getElementById("hiddenPage").value;
        $("#europe-history").load("religion_content.php", {
            continet: "europian",
            page_religion: page_religion
        });
    });
}

asian_content();
function asian_content(){
    $(document).ready(function(){
        var page_religion = document.getElementById("hiddenPage").value;
        $("#asia-history").load("religion_content.php", {
            continet: "asian",
            page_religion: page_religion
        });
    });
}
// ================================================================================================================
// =================================================================================================================

// topics content
// =====================================================================================================================
topics_content();
function topics_content(){
    $(document).ready(function(){
        var page_religion = document.getElementById("hiddenPage").value;
        var requestProfileTopcs = document.getElementById("hiddenEmail").value;
        $("#topics_lists").load("religion_content.php", {
            topics_content: requestProfileTopcs,
            topic_area: page_religion
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

function submit_ideas_user(obj){
    var topics_identity = obj.id;
    var ideas = obj.parentNode.previousElementSibling.lastChild.value;
    var requestProfile = document.getElementById("hiddenEmail").value;
    if(ideas == ""){
        obj.parentNode.previousElementSibling.style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $(this).load("religion_content.php", {
                getTopics_id: topics_identity,
                getIdeas: ideas,
                user_email_found: requestProfile
            }, function(){
                obj.innerHTML = "Posted";
            });
        });   
    }
}

// select news and topics
// =================================================================================================================
setInterval(() => {
    list_new_topics();
}, 1000);
function list_new_topics(){
    $(document).ready(function(){
        var requestNews = document.getElementById("hiddenEmail").value;
        $("#list_new_topics").load("religion_content.php", {
            getResponseNews: requestNews
        });
    });
}