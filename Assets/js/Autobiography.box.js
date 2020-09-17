// THIS  PAGE WILL FOCUS ON AUTOBIOGRAPHY SYSTEM
// ========================================================================================================
// METHOD TO CREATE AUTOBIOGRAPHY
// ==============================================================================================================
function create_autobio(obj){
    var AutobioName = document.getElementById("AutobioName").value;
    var autobio_creater = document.getElementById("hiddenEmail").value;

    if(AutobioName == ""){
        document.getElementById("name-autobio").style.border = "1.5px solid red";
    }else{
        $(document).ready(function(){
            obj.parentNode.previousElementSibling.lastChild.previousElementSibling.style.display = "block";
            $(this).load("Autobiography.box.php",{
                autobio_creater_email: autobio_creater,
                autobio_name: AutobioName
            }, function(autobio_response){
               obj.previousElementSibling.innerHTML = autobio_response;
               obj.parentNode.previousElementSibling.lastChild.previousElementSibling.style.display = "none";
            });
        });
    }
}

// FUNCTION TO RETRIVE ALL AUTOBIO
// =====================================================================================================================
setInterval(() => {
    display_autobio();
}, 1000);
function display_autobio(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#display_auto_bio").load("Autobiography.box.php",{
            getEmail: email
        });
    });
}

// FUNCTION TO OPEN AUTOBIO EDITOR
// =====================================================================================================================
function openAutobioEditor(obj){
    var opener = obj.id;
    obj.newElementSibling.style.display = "block";
}