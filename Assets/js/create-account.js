function signMeUp(obj){
    var firstname = document.getElementById("firstName").value;
    var lastname = document.getElementById("lastName").value;
    var email = document.getElementById("signEmail").value;
    var passcode = document.getElementById("user-password").value;
    var section = document.getElementById("section").value;

    if(firstname == "" || lastname == "" || email == "" || passcode == ""){
        alert("Empty value not allowed");
        document.getElementById("account-title").style.color = "red";
    }else{ 
        obj.innerHTML = "Processing...";
        document.getElementById("over-loader").style.display = "block";

        Ip_adress = "";
        $.getJSON('https://json.geoiplookup.io/api?callback=?', function(data) {
            var ip = JSON.stringify(data, null, 2);
            Ip_adress = ip;
        });

        obj.innerHTML = "Fetch local info...";
        $.ajax({
            url:`http://ip-api.com/json/${Ip_adress}`,
            method:'POST',
            dataType:'json',
            beforeSend:()=>{},
            complete:()=>{},
            success:(data)=>{
                obj.innerHTML = "Saving info...";
                $("#error-found").load("registeScylla.php",{
                    getFirstname: firstname,
                    getLastname: lastname,
                    getEmail: email,
                    getPass: passcode,
                    getSection: section,
                    user_city: data.city,
                    user_country: data.country,
                    user_region: data.regionName,
                    user_timezone: timezone,
                    user_isp: data.isp
                },function(response){
                    obj.innerHTML = "Ending process...";

                    var responseObj = JSON.parse(response);
                    if(responseObj == "Check code we sent to this E-mail" || responseObj == "Fail to send code, try again!"){
                        obj.innerHTML = "Processed";
                        document.getElementById("userMail").value = email;
                        document.getElementById("create-account-now").style.display = "none";
                        document.getElementById("verify-account").style.display = "block";
                    }
                });
            },
            error:()=>{}
        })
    }

}

function verifyMe(obj){
    var email = document.getElementById("userMail").value;
    var myCode = document.getElementById("code").value;
    var title = document.getElementById("section").value;

    if(myCode == ""){
        document.getElementById("user-code").style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            document.getElementById("over-loader-verify").style.display = "block";
            obj.innerHTML = "Verifying...";

            $("#error-found-verify").load("../verifyScylla.php",{
               digitalCode: myCode,
               Email: email,
               Title: title
            },function(response){
                obj.innerHTML = "End Verifying...";
                document.getElementById("over-loader-verify").style.display = "none";

                var over_response = JSON.parse(response);
                if(over_response == "Good check, you successfully checked"){
                    document.getElementById("verify-account").style.display = "none";
                    var welcome_element = "";
                        welcome_element += "<div class='get-me-start'>";
                        welcome_element += "<h3>You're welcome</h3>";
                        welcome_element += "<div class='mesg-account'>You gonna connect with around friends and get your friend's shares on your timeline and customize your account.</div>";
                        welcome_element += "<form action='set_up_session.php' method='POST'>";
                        welcome_element += `<input type='hidden' name='user-setted-email' value='${email}'>`;
                        welcome_element += "<button name='submit-start-up' class='submit-start-up' type='submit'>Get started</button>";
                        welcome_element += "</form>";
                        welcome_element += "</div>";
                    document.getElementById("get-started-now").innerHTML = welcome_element;
                }
            });
        });
    }
}