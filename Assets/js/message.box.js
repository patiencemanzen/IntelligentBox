
// Auto resize on message alert when oveflow occur
var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function init() {
    var text = document.getElementById('text');
    function resize() {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}


function format () {  
    return Array.prototype.slice.call(arguments).join(' ')
}

// sidebar container all convasation on small device
function openConversation() {
    document.getElementById("sideBar-conv").style.width = "330px";
}
  
function openConversation() {
    document.getElementById("sideBar-conv").style.width = "0";
}


// WHEN USER CLICK NEW MESSAGE
// ==========================================================================================================================
function New_message(){
    var cd_nav_trigger = document.getElementById("open-conv-ex");
    if(cd_nav_trigger.style.display == "none"){
        cd_nav_trigger.style.display = "block";
    }else{
        cd_nav_trigger.style.display = "none";
    }
}

function open_full_conv(){
    var conv = document.getElementById("expanded_conv");
    if(conv.style.display == "block"){
        conv.style.display = "none";
    }else{
        conv.style.display = "block";
    }
}