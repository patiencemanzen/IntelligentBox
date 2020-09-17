// FUNCTION THAT SEND DATA TO PHP FILE AND PHP FILE STORE THEM INTO DATABASEA
// ===================================================================================
// FIRST OF IT VALIDATE THE DATA BEFORE SENDING
// =====================================================================================

function contuctUs(){
    var Firstname = document.getElementById("contuct_firstname").value;
    var Email = document.getElementById("contuct_Email").value;
    var subject = document.getElementById("contuct_subject").value;
    var body = document.getElementById("contuct_body").value;

    if(Firstname == "" || Firstname.length > 15){
        document.getElementById("firstname_contuct").style.border = "2px solid red";
        document.getElementById("firstnameMsg").innerHTML = "Firstname required and less than 15 character longer";
    }else if(Email == ""){
        document.getElementById("Email_contuct").style.border = "2px solid red";
    }else if(subject == ""){
        document.getElementById("subject").style.border = "2px solid red";
    }else if(body == ""){
        document.getElementById("body_contuct").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $("#preloadContuct").css("display","block");
            $("#holdResponse").load("contuct_us.php",{
                getFirstname: Firstname,
                getEmail: Email,
                getSubject: subject,
                getBody: body
            },function(response){
                $("#preloadContuct").css("display","none");
                var responsetext = JSON.parse(response);
                console.log(responsetext);
                if(responsetext == "Success"){
                    document.getElementById("holdResponse").innerHTML = "Thank you for your hospitality and your support";
                    document.getElementById("contuct_firstname").value = "";
                    document.getElementById("contuct_Email").value = "";
                    document.getElementById("contuct_subject").value = "";
                    document.getElementById("contuct_body").value = "";
                }else{
                    document.getElementById("holdResponse").innerHTML = "Send email fail, Please try again";
                }
            });
        });
    }
}

// FUNCTION COUNT LETTER USER ARE INPUTING
// ===========================================================================================
function countLetters(){
    var body = document.getElementById("contuct_body").value;
    for(i=0; i<body.length; i++){
        document.getElementById("countedLetter").innerHTML = i;
    }
}