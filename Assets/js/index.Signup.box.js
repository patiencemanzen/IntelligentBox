// get all interest items of the sport
// =======================================================================================
// =======================================================================================
function getdataResponse(){
    $("#sport").load("interest.php",{
        interestItems: "interest_sport"
    });
}

// get interest items of news
// =======================================================================================
// ======================================================================================
function getNewsItems(){
    $("#news").load("interest.php",{
        interestItems: "interest_news"
    });
}

// get interest items for music
// ========================================================================================
// ========================================================================================
function getMusicItems(){
    $("#music").load("interest.php",{
        interestItems: "interest_music"
    });
}

// get interest items for religion
// =======================================================================================
// =======================================================================================
function getReligionsItems(){
    $("#religion").load("interest.php",{
        interestItems: "interest_religion"
    });
}

// get interest items for culture and art
// =====================================================================================
// =====================================================================================
function getCultureItems(){
    $("#art").load("interest.php",{
        interestItems: "interest_art_culture"
    });
}

// trigger input radio when user click on student or trainer
// =====================================================================================
// =====================================================================================
function triggerBtn(obj){
    obj.firstChild.nextElementSibling.click();
    if(obj.firstChild.nextElementSibling.checked){
        obj.style.background = "#14599d";
    }else{
        obj.style.background = "#041a2f";
    }
}

// CHECK AND VALIDATE INPUT FORM SUBMITED BY USER THEN SEND EMAIL
// ==================================================================================
// ==================================================================================
var GlobalValiable = "";
function checkInput(obj){
    var firstname = document.getElementById("firstname-input").value;
    var lastname = document.getElementById("lastname-input").value;
    var email = document.getElementById("email-input").value;
    var password = document.getElementById("password-input").value;

    if(firstname == "" || lastname == "" || email == "" || password == ""){
        document.getElementById("bmd-label").innerHTML = "empty field";
    }else{
        GlobalValiable = email;
        $(document).ready(function(){
            $("#Preloader").css("display","block");
            $(".Msg").load("registeScylla.php",{
                getFirstname: firstname,
                getLastname: lastname,
                getEmail: email,
                getPassword: password
            },function(response){
                $("#Preloader").css("display","none");
                var obj = JSON.parse(response);
                if(obj == "Check code we sent to this E-mail" || obj == "Fail to send code, try again!"){

                    var currTab = 2;     // Current tab is set to be the first tab (0)
                    showTabPane(currTab);   // Display the current tab
    
                    // function show next tab
                    // ============================================================
                    function showTabPane(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        x[n-1].style.display = "none";
                        $("#sendEmailTo").html(email);
                        fixStepIndicators(n)
                    }
    
                    // methord fix step indicator on top
                    // ============================================================
                    function fixStepIndicators(n) {
                        // This function removes the "active" class of all steps...
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        //... and adds the "active" class on the current step:
                        x[n].className += " active";
                    }
                }
            });
        });
    }

}
function checkEmptyness(input){
    if(input == ""){
        return true;
    }else{
        return false;
    }
}
// END VALIDATE INPUT FORM 
// ====================================================================================================================
// =====================================================================================================================


// VALIDATE CODE INPUTED BY USER SENDE THROUGHT EMAIL
// ============================================================================================================================
// ============================================================================================================================
function openBtn(){
    document.getElementById("verifyMeNow").style.opacity = "1";
}
function verifyMe(obj){
    obj.previousElementSibling.style.display = "block";
    var email = GlobalValiable;
    var myCode = document.getElementById("verifyMyCode").value;
    var title = "student";
    if(myCode == ""){
        document.getElementById("codeArea").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            $("#Preloader").css("display","block");
            $(".errorHolder").load("verifyScylla.php",{
               digitalCode: myCode,
               Email: email,
               Title: title
            },function(response){
                $("#Preloader").css("display","none");
                var obj = JSON.parse(response);
                if(obj == "Good check, you successfully checked"){
                    var currTab = 3;     // Current tab is set to be the first tab (0)
                    showTabPane(currTab);   // Display the current tab
        
                    // then show tnext tab
                    // ================================================================================
                    function showTabPane(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        x[n-1].style.display = "none";
                        $("#sendEmailTo").html(email);
                        fixStepIndicators(n)
                    }
        
                    // then fix step indicator on top
                    // ================================================================================
                    function fixStepIndicators(n) {
                        // This function removes the "active" class of all steps...
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        //... and adds the "active" class on the current step:
                        x[n].className += " active";
                    }
                }
            });
        });
        obj.previousElementSibling.style.display = "none";
    }
}
// END VALIDATION OF CODE SENDED THROUGH EMAIL
// ====================================================================================================================================
// ====================================================================================================================================

// APPLY ON CHECK BOX WHEN USER CLICK BOX
// =====================================================================================================================================
// =====================================================================================================================================
var sport_interest = [];
var news_interest = [];
var religion_interest = [];
var music_interest = [];
var artculture_interest = [];

function takeidentity(obj){
    var name = obj.parentNode.id;
    var location = obj.id;
    
    if(location == "sport"){
        sport_interest.push(name);
    }else if(location == "news"){
        news_interest.push(name);
    }else if(location == "religion"){
        religion_interest.push(name);
    }else if(location == "music"){
        music_interest.push(name);
    }else if(location == "culture"){
        artculture_interest.push(name);
    }
}

// FETCH USR STUDENT AND PRESENT TO SCYLLA
// =========================================================================================================================================
// =========================================================================================================================================
 // RUN FUNCTION
setInterval(() => {
    getStudent();
}, 10000);
function getStudent(){
    $(document).ready(function(){
        $("#presentStudent").load("presentUsers.php",{
           userStudentEmail: GlobalValiable
        });
    });
}
// =========================================================================================================================================
// =========================================================================================================================================


// FETCH AND PRESENT TRAINER
// =================================================================================================================================================
// =================================================================================================================================================
setInterval(() => {
    getTrainer();
}, 1000);
function getTrainer(){
    var user_mail = document.getElementById("email-input").value;
    $("#presenttrainer").load("presentUsers.php",{
        userTrainerEmail: user_mail
    });
}
// ==================================================================================================================================================
// ==================================================================================================================================================

// METHORD FOR FOLLOWING USER AND SAVING USER
// ========================================================================================================================================
// =========================================================================================================================================
function followUser(obj){
    var followingEmail = obj.id;
    var followersEmail = GlobalValiable;
    $(document).ready(function(){
        $(".subtitle").load("followScylla.php",{
            followingEmail: followingEmail,
            followersEmail: followersEmail        
        },function(response){
            var responseText = JSON.parse(response);
            if(responseText == "User followed"){
                obj.style.border = "1px solid #d3d3d3";
                obj.style.background = "white";
                obj.style.color = "#071c2e";
                obj.innerHTML = "Following";
            }else{
                obj.innerHTML = "fail";
            }
        });
    });
}
// =========================================================================================================================================
// =========================================================================================================================================


// GET USER TO PROFILE PAGE IF ALL DATA IS CLEAR
// =======================================================================================================================================
// =======================================================================================================================================
function getStarted(){}
// =========================================================================================================================================
// =========================================================================================================================================