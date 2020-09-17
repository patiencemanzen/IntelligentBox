

// creation of post on right side
function createPostRight(obj){
    var creationFaci = obj.parentNode.parentNode.nextElementSibling;
    if(creationFaci.style.display == "block"){
        creationFaci.style.display = "none";
    }else{
        creationFaci.style.display = "block";
    }
}

// when user click on recieved question
function popQuestionRecieved(){
    var questionHolder = document.getElementById("alert-result-recieved");
    if(questionHolder.style.display == "block"){
        questionHolder.style.display = "none";
    }else{
        questionHolder.style.display = "block";
    }
}

// when user click on answer recieved
function popAnswerRecieved(){
    var answerHolder = document.getElementById("AnswerRecieved");
    if(answerHolder.style.display == "block"){
        answerHolder.style.display = "none";
    }else{
        answerHolder.style.display = "block";
    }
}

// when user want to get recieved file
function popFiles(){
    var files = document.getElementById("recievedFile");
    if(files.style.display == "block"){
        files.style.display = "none";
    }else{
        files.style.display = "block";
    }
}

// whe user click on my journal
function myJournal(){
    var sheet = document.getElementById("my-jounral");
    if(sheet.style.display == "block"){
        sheet.style.display = "none";
    }else{
        sheet.style.display = "block";
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

// open sidenav
function openNav() {
    document.getElementById('mySidenav').style.display = "block";
    document.getElementById("mySidenav").style.width = "370px";
  }
  
  function closeNav() {
      document.getElementById('mySidenav').style.display = "none";
    document.getElementById("mySidenav").style.width = "0";
  }

// open hyperlink on small device
function openHyper() {
    document.getElementById("Hyperlink").style.width = "250px";
  }
  
  function closeHyper() {
    document.getElementById("Hyperlink").style.width = "0";
  }  

// Initialize Venobox
$('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
});


setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);