// IF USER TRIGGER THIS BUTTON  THEN SIGN HIM/HER IN
// =================================================================================================================
function signMeIn(obj){
    var email = document.getElementById("signEmail").value;
    var password = document.getElementById("signPwd").value;
    
    if(email == ""){
       document.getElementById("user-email").style.border = "2px solid red";
       obj.style.background = "red"; 
    }else if(password == ""){
        document.getElementById("user-password").style.border = "2px solid red";
        obj.style.background = "red"; 
    }else{
        document.getElementById("signIn").submit();
    }
}
