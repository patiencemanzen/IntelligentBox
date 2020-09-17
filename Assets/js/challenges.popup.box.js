// when user click on textarea want to create post
function createPost(obj){
    var creation = obj.parentNode.parentNode.parentNode.parentNode.nextElementSibling;
    if(creation.style.display == "block"){
        creation.style.display = "none";
    }else{
        creation.style.display = "block";
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


// sidebar alert
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}