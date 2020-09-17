// when user try to play video then run out this function
function playOrPause(obj){
    var className = obj.className;
    var vid = obj.parentNode.previousSibling.previousSibling;
    var fill = obj.parentNode.nextSibling.nextElementSibling.lastChild.previousSibling.lastChild;
    var currentTime = obj.parentNode.nextSibling.nextElementSibling.firstChild.nextSibling.lastChild.previousElementSibling.firstChild.nextSibling;
    var messagePaused = obj.parentNode.nextSibling.nextElementSibling.firstChild.nextSibling.lastChild.previousElementSibling.firstChild.nextElementSibling.nextElementSibling;
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