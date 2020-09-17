
// when user click on edit profile image icon then display edit section
// when they click again it will clos eitself
function openEditSection(){
    var editSection = document.getElementById("edit_profile_image_section");
    if(editSection.style.display == "block"){
        editSection.style.display = "none";
    }else{
        editSection.style.display = "block";
    }
}

// when user click on setting icon
// then click back close itself
function openSetting(){
    var settings_section =  document.getElementById("pre-defined-setting");
    if(settings_section.style.display == "block"){
        settings_section.style.display = "none"
    }else{
        settings_section.style.display = "block";
    }
}

// sub setting , when user click account setting
function accountSetting(){
    var accountSetting_section = document.getElementById("account-settings");
    if(accountSetting_section.style.display == "block"){
        accountSetting_section.style.display = "none"
    }else{
        accountSetting_section.style.display = "block";
    }
}

// when user click public post
function publicPost(){
    var publicPost_section = document.getElementById("public-post-settings-section");
    if(publicPost_section.style.display == "block"){
        publicPost_section.style.display = "none";
    }else{
        publicPost_section.style.display = "block";
    }
}

// when user click on create group
function createGroupSection(){
    var groupCreationArea = document.getElementById("create-group-section");
    if(groupCreationArea.style.display == "block"){
        groupCreationArea.style.display = "none";
    }else{
        groupCreationArea.style.display = "block";
    }
}

// when user click on notification settings
function notification_settings(){
    var settings = document.getElementById("notification-settings-sections");
    if(settings.style.display == "block"){
        settings.style.display = "none";
    }else{
        settings.style.display = "block";
    }
}

// add more infromation section
function addMoreInfo(){
    var moreInfo = document.getElementById("more-information-addition");
    if(moreInfo.style.display == "block"){
        moreInfo.style.display = "none";
    }else{
        moreInfo.style.display = "block";
    }
}

// blocked user section
function blockedUser(){
    var blockedUserSection = document.getElementById("blocked-user");
    if(blockedUserSection.style.display == "block"){
        blockedUserSection.style.display = "none";
    }else{
        blockedUserSection.style.display = "block";
    }
}

// when user click to their biography then edit section open 
// if back then close current section
function editBiography(){
    var biographyEdition = document.getElementById("editBio_user");
    if(biographyEdition.style.display == "none"){
        biographyEdition.style.display = "block";
    }else{
        biographyEdition.style.display = "none";
    }
}

// when user click on edit background image then open edit section for background image
// click again clos itself
function openBackgroundEdit(){
    var backgroundEdition = document.getElementById("edit-background_image");
    if(backgroundEdition.style.display == "none"){
        backgroundEdition.style.display = "block";
    }else{
        backgroundEdition.style.display = "none";
    }
}

// when user click create short story btn
// click back close itself
function openShortStoryCreation(){
    var shortStory = document.getElementById("create-stoty-prive");
    if(shortStory.style.display == "block"){
        shortStory.style.display = "none";
    }else{
        shortStory.style.display = "block";
    }
} 

// when user click on post creation btn open edit area for post
// click back close itself
function createPost(){
    var creationArea = document.getElementById("post-creation");
    if(creationArea.style.display == "block"){
        creationArea.style.display = "none";
    }else{
        creationArea.style.display = "block";
    }
}

// when user click on autobion edition btn then display edition area
// click back close itself
function editAutobio(){
    var autoBioEdition = document.getElementById("create-biography-option");
    if(autoBioEdition.style.display == "block"){
        autoBioEdition.style.display = "none";
    }else{
        autoBioEdition.style.display = "block";
    }
}

// when user click on create new autobiography btn
function createAutobiography(){
    var createAutoInput = document.getElementById("create-new-autobiography");
    if(createAutoInput.style.display == "block"){
        createAutoInput.style.display = "none";
    }else{
        createAutoInput.style.display = "block";
    }
}

// when user click on use exest book
function useExistBook(){
    var existBookOption = document.getElementById("list-all-book-exist");
    if(existBookOption.style.display == "block"){
        existBookOption.style.display = "none";
    }else{
        existBookOption.style.display = "block";
    }
}


// on trainer section when user click ask question btn
function askQuestion(askBtn){
    var ask_question_area = askBtn.parentNode.parentNode.parentNode.lastChild.previousElementSibling;
    if(ask_question_area.style.display == "block"){
        ask_question_area.style.display = "none";
    }else{
        ask_question_area.style.display = "block";
    }
}

// when user want to view the detail of other user by click on about btn
function aboutMe(myself){
    var about_section = myself.parentNode.parentNode.parentNode.lastChild.previousElementSibling;
    if(about_section.style.display == "block"){
        about_section.style.display = "none";
    }else{
        about_section.style.display = "block";
    }
}


// open about on each usr
function about_user(obj){
    var about_div = obj.parentNode.parentNode.parentNode.parentNode.lastChild.previousElementSibling;
    if(about_div.style.display == "block"){
        about_div.style.display = "none";
    }else{
       about_div.style.display = "block";
    }
}

 // Initialize Venobox
 $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });

//   close question tab
function closeTabs(obj){
    obj.parentNode.parentNode.parentNode.style.display = "none";
}

// open feed back 
// ==========================================================================================================
function open_feedback(){
    var open_feedback_inputs = document.getElementById("open_feedback");
    if(open_feedback_inputs.style.display == "none"){
        open_feedback_inputs.style.display = "block";
    }else{
        open_feedback_inputs.style.display = "none";
    }
}

setInterval(() => {
    getprofile_image();
}, 1000);
function getprofile_image(){
    $(document).ready(function(){
        var globale_mail = document.getElementById("hiddenEmail").value;
        $("#feedback_profile_image").load("profile_top_content.php",{
           getProfile_image_email: globale_mail
        });
    });
}

// SUBMIT FEEDBACK
// ===============================================================================================================
function submit_feedback(obj){
    var feedback = document.getElementById("feedbacks").value;
    var user_email = document.getElementById("hiddenEmail").value;

    if(feedback == ""){
        document.getElementById("add_feedback").style.border = "1.3px solid red";
    }else{
        $(document).ready(function(){
            obj.innerHTML = "Sending...";
            $("#error_hide").load("profile_updates.php", {
                getFeedback: feedback,
                gete_user_email: user_email
            }, function(){
                document.getElementById("add_feedback").style.border = "2px solid #d3d3d3";
                obj.innerHTML = "Resubmit";
            });
        });
    }
}