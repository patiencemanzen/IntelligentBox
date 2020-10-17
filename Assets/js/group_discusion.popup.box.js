// when user start typing in search 
// then open up search result
function openResult(){
    var result = document.getElementById("searched-results");
    result.style.display = "block";
    var search = document.getElementById("search_member").value;
    var group_identity = document.getElementById("hiddenIdentity").value;
    var hiddenEmail = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $("#result_search").load("group_discussion_content.box.php", {
            getSearch: search,
            group_identity_search: group_identity,
            search_member: hiddenEmail
        });
    });
}
function openResult_small(){
    var result = document.getElementById("searched-results");
    result.style.display = "block";
    var search = document.getElementById("search_small_member").value;
    var group_identity = document.getElementById("hiddenIdentity").value;
    var hiddenEmail = document.getElementById("hiddenEmail").value;

    $(document).ready(function(){
        $(".list-result").load("group_discussion_content.box.php", {
            getSearch: search,
            group_identity_search: group_identity,
            search_member: hiddenEmail
        });
    });

    $(document).mouseup(function(e){
        var all_trades = $("#searched-results");
        if(!all_trades.is(e.target) && all_trades.has(e.target).length == 0){
            all_trades.hide();
        }
    });
}

// when user want to create post
// then he/she focus on textarea
// then open up creation area
function createPost(obj){
    var create = obj.parentNode.parentNode.parentNode.parentNode.nextElementSibling;
    if(create.style.display == "block"){
        create.style.display = "none";
    }else{
        create.style.display = "block";
    }
}

// open about on each usr
function about_user(obj){
    var about_div = obj.lastChild.previousElementSibling;
    if(about_div.style.display == "block"){
        about_div.style.display = "none";
    }else{
       about_div.style.display = "block";
    }
}

// sidenav
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

// display all challenges i have achibed
// ========================================================================================================================
setInterval(() => {
    display_challenges();
}, 1000);
function display_challenges(){
    $(document).ready(function(){
        var group_identity = document.getElementById("hiddenIdentity").value;
        $("#challenges_holder").load("group_discussion_content.box.php", {
            get_all_challenge: group_identity
        });
    });
}  

discover_student();
function discover_student(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-student").load("group_discussion_content.box.php", {
            discoverStudent: hiddenEmail,
            title: "student"
        });
    });
}

discover_trainer();
function discover_trainer(){
    $(document).ready(function(){
        var hiddenEmail = document.getElementById("hiddenEmail").value;
        $("#discover-trainer").load("group_discussion_content.box.php", {
            discoverTrainer: hiddenEmail,
            title_trainer: "trainer"
        });
    });
}

// METHORD FOR invite USER AND SAVING USER
// ========================================================================================================================================
// =========================================================================================================================================
function invite(obj){
    var inviteThis = obj.id;
    var inviteFrom = document.getElementById("hiddenEmail").value;
    
    $(document).ready(function(){
        $(this).load("group_discussion_content.box.php",{
            inviteEmail: inviteThis,
            inviterEmail: inviteFrom        
        },function(response){
            obj.style.border = "1px solid #d3d3d3";
            obj.style.background = "white";
            obj.style.color = "#071c2e";
            obj.innerHTML = "invited";
        });
    });
}

$(document).mouseup(function(e){
    var all_trades = $("#discover");
    if(!all_trades.is(e.target) && all_trades.has(e.target).length == 0){
        all_trades.hide();
    }
});

function group_media(){
    var hiddenIdentity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#posted-images").load("group_discussion_content.box.php", {
            group_media: hiddenIdentity
        });
    });
}
group_media();

function group_bio(){
    var hiddenIdentity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#group_bio").load("group_discussion_content.box.php", {
            group_bio: hiddenIdentity
        });
    });
}
group_bio();

function short_group_desc(){
    var hiddenIdentity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#short_desc").load("group_discussion_content.box.php", {
            short_desc: hiddenIdentity
        });
    });
}
short_group_desc();

function group_bio_device(){
    var hiddenIdentity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#group_bio_device").load("group_discussion_content.box.php", {
            group_bio: hiddenIdentity
        });
    });
}
group_bio_device();

function short_group_desc_device(){
    var hiddenIdentity = document.getElementById("hiddenIdentity").value;
    $(document).ready(function(){
        $("#short_desc_device").load("group_discussion_content.box.php", {
            short_desc: hiddenIdentity
        });
    });
}
short_group_desc_device();

// =========================================================================================================================================
// =========================================================================================================================================

setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);