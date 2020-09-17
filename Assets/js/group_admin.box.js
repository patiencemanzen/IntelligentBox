// when user try to open up post creation center
// then click on what going on area, popup post creation area on left side
function createPostLeft(obj){
    var creationFaci = obj.parentNode.parentNode.nextElementSibling;
    if(creationFaci.style.display == "block"){
        creationFaci.style.display = "none";
    }else{
        creationFaci.style.display = "block";
    }
}

// when user try to play video then run out this function
function playOrPause(obj){
    var className = obj.className;
    var vid = obj.parentNode.previousSibling.previousSibling;
    var fill = obj.parentNode.nextSibling.nextElementSibling.lastChild.previousSibling.lastChild;
    var currentTime = obj.parentNode.nextSibling.nextElementSibling.firstChild.nextSibling.lastChild.previousElementSibling.firstChild.nextSibling;
    var messagePaused = obj.parentNode.nextSibling.nextElementSibling.firstChild.nextSibling.lastChild.previousElementSibling.firstChild.nextElementSibling.nextElementSibling;
    console.log(messagePaused);
    if(vid.paused){
        vid.play();
        obj.style.display = "none";
        messagePaused.innerHTML = "Click to pause";
        vid.addEventListener('click',function(){
            vid.pause();
            obj.style.display = "block";
            messagePaused.innerHTML = "";
        });
    }
    else{
        vid.pause();
        $("#playBtn").attr("class","fa fa-play");
    }

    vid.addEventListener('timeupdate',function(){
        var position = vid.currentTime / vid.duration ;
        fill.style.width = position * 100 + '%';
    
        convertTime(Math.round(vid.currentTime)); //convert decimal into interger
    
        if(vid.ended){
            $("#playBtn").attr("class","fa fa-play");
            obj.style.display = "block";
            messagePaused.innerHTML = "";
        }
    });
    
    function convertTime(seconds){
        var min = Math.floor(seconds/60);
        var sec = seconds % 60;
    
        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10 ) ? "0" + sec : sec;
    
        currentTime.textContent = min + ":" + sec;
    
        totalTime(Math.round(vid.duration));
    }
    function totalTime(seconds){
        var min = Math.floor(seconds/60);
        var sec = seconds % 60;
    
        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
    
        currentTime.textContent += " / " + min + ":" + sec; 
    }
}


// small admin on small device
function openNav() {
    document.getElementById("smallAdmin").style.display = "block";
    document.getElementById("smallAdmin").style.width = "350px";
}
  
function closeNav() {
    document.getElementById("smallAdmin").style.width = "0";
    document.getElementById("smallAdmin").style.display = "none";
}

function count_letters(){
    var counter, inputed_bio = document.getElementById("group_desc").value;
    for ( counter = 0; counter < inputed_bio.length; counter++) {
        document.getElementById("counted_lelter").innerHTML = counter;
    }
}
function submit_bio(obj){
    $(document).ready(function(){
        var inputed_bio = document.getElementById("group_desc").value;
        var hiddenIdentity = document.getElementById("hiddenIdentity").value;

        if(inputed_bio == ""){
            document.getElementById("textarea-desc-input").style.border = "1.2px solid red";
        }else{
            document.getElementById("loading").innerHTML = "uploading";
            $("#loading").load("group_discussion_content.box.php", {
               group_desc: inputed_bio,
               group_identity: hiddenIdentity
            }, function(data){
                document.getElementById("group_desc").innerHTML = "";
            });
        }
    });
}

function delete_group(obj){
    $(document).ready(function(){
        var group_url = obj.id;
        var creater = document.getElementById("hiddenEmail").value;
        obj.innerHTML = "deleting group"
        $(this).load("group_discussion_content.box.php", {
            delete_url: group_url,
            getCreater: creater
        }, function(){
            window.location.assign("../Profile/profile.php");
        });
    });
}

// open search
// =========================================================================================================
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

setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);