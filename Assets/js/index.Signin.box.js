// IF USER TRIGGER THIS BUTTON  THEN SIGN HIM/HER IN
// =================================================================================================================
// =================================================================================================================
function signMeIn(obj){
    var email = document.getElementById("signEmail").value;
    var password = document.getElementById("signPwd").value;
    
    if(email == ""){
       document.getElementById("form-email").style.border = "2px solid red";
       obj.style.background = "red"; 
    }else if(password == ""){
        document.getElementById("form-password").style.border = "2px solid red";
        obj.style.background = "red"; 
    }else{
        document.getElementById("signIn").submit();
    }
}

// READ ALL COOKIES THAT HAVE SETTED
// =================================================================================
function ReadCookie(){
   var allcookies = document.cookie;
   document.querySelector("#formCookie").innerHTML = "All Cookies : " + allcookies;
   
   // Get all the cookies pairs in an array
   cookiearray = allcookies.split(';');
   
   // Now take key value pair out of this array
   for(var i=0; i<allcookies.length; i++){
      
      name = cookiearray[i].split('=')[0];
      value = cookiearray[i].split('=')[1];
      document.querySelector("#formCookie").innerHTML = "Key is : " + name + " and Value is : " + value;
   }
}