// WHEN USER CLICK SUBMIT AND VERIFY CODE
// ============================================
var globalEmail = "";
function verifyEmail(){
    var firstname = document.getElementById("Firstname_forget").value;
    var email = document.getElementById("email_forget").value;
    globalEmail = email;
    if(firstname == ""){
        document.getElementById("firstname-verify").style.border = "2px solid red";
    }else if(email == ""){
        document.getElementById("firstname-verify").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $("#holdMsg").load("Forget_password/verify_send_email.php",{
                E_mail: email,
                First_name: firstname
            },function(response){
                var obj_response = JSON.parse(response);
                console.log(obj_response);
                if(obj_response == "Check code that sent to email" || obj_response == "Send E-mail fail, Please try again"){
                    document.getElementById("holdDollar").innerHTML = email;
                    var currentTab = 2;     // Current tab is set to be the first tab (0)
                    showTab(currentTab);   // Display the current tab

                    function showTab(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("pwdForget");
                        x[n].style.display = "block";
                        x[n-1].style.display = "none";
                    }
                }
            });
        });
    }
}

// FUNCTION VERIFY CODE
// =================================================================================================================
// ==================================================================================================================
function veriCode (obj){
    var codeInputedNow = document.getElementById("Verify_My_Digital_Code").value;
    if(codeInputedNow == "" || codeInputedNow.length > 6 || codeInputedNow < 6){
        document.getElementById("input-code-email").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            obj.previousElementSibling.style.display = "block";
            $("#errorHolder").load("Forget_password/verify_code.php",{
                inputedCode: codeInputedNow,
                E_mail: globalEmail
            },function(response){
                obj.previousElementSibling.style.display = "none";
                var response_obj = JSON.parse(response);
                if(response_obj == "Code Accepted"){
                    var currentTab = 3;     // Current tab is set to be the first tab (0)
                    showTab(currentTab);   // Display the current tab

                    function showTab(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("pwdForget");
                        x[n].style.display = "block";
                        x[n-1].style.display = "none";
                    }
                }
            });
        });
    }
}

// MAINTAIN NEW PASSWORD INPUTED
// ==========================================================================================================================================
// ===================================================================================================================================================
function newPassword(){
    var newPassword = document.getElementById("newPassword").value;
    var confurmPassword = document.getElementById("confurmPassword").value;
    var Email_New_password = globalEmail;
    if(newPassword == "" || newPassword.length < 8){
        document.getElementById("new-password-input").style.border = "2px solid red";
    }else if(confurmPassword == "" || confurmPassword.length < 8){
        document.getElementById("confurm-password").style.border = "2px solid red";
    }else if(newPassword != confurmPassword){
        document.getElementById("new-password-input").style.border = "2px solid red";
        document.getElementById("confurm-password").style.border = "2px solid red";
        document.getElementById("holderErrorRow").innerHTML = "Password not match";
    }else{
        $(document).ready(function(){
            $("#holderErrorRow").load("Forget_password/new_Password.php",{
                holdNewPassword: newPassword,
                User_mail: Email_New_password
            },function(response){
                var newResponse = JSON.parse(response);
                if(newResponse == "Data updates successfully"){
                    alert("Data have been updated, Please reSignin using new password");
                    window.location.assign("index.php");
                }else{
                    alert("Password fail to be updated");
                    window.location.assign("index.php");
                }
            });
        });
    }
}