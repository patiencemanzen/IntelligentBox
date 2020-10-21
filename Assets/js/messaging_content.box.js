// pick user to message
// =================================================================================================================
display_user();
function display_user(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#user_picker_list").load("../header/message_content.php", {
            display_users: email
        });
    });
}

// count message on small device
// =========================================================================================================================
setInterval(() => {
    count_messages_small();
}, 1000);
function count_messages_small(){
    $(document).ready(function(){
        var user_mail = document.getElementById("user_mail").value;
        $("#count_message_small").load("../header/header_content.php", {
            countMessage: user_mail
        });
    });
}

// message pcking
// ============================================================================================================
const data_selected = []; // array data user selected

function display_me(obj){
    if(obj.checked){
       data_selected.push(obj.value);
    //    openConv();
    }else{ 
        data_selected.pop(obj.value);
    }
}
setInterval(() => {
    selected_user_length = data_selected.length;
    document.querySelector(".count-selected").innerHTML = selected_user_length;
}, 1000);

setInterval(() => {
    selected_user_length = data_selected.length; // count selected data
    selected_email = "<div>";
        for (i = 0; i < selected_user_length; i++) {
            selected_email += "<div class='each-picked'>";
            selected_email += "<div class='name-picked'>" + data_selected[i] + "</div>";
            selected_email += "</div>";
        }
    selected_email += "</div>";
    document.getElementById("picked-message").innerHTML = selected_email;
}, 1000);


function open_short_conv_area(obj){
   var data_selected = obj.id;
   var email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.innerHTML = "Opening Tab...";
        var email = document.getElementById("hiddenEmail").value;
        $("#message_section_holder").load("../header/message_content.php", {
            short_conv_area: data_selected,
            getUser_conv: email
        }, function(){
            obj.innerHTML = "Opened!";
        });
    });
}

function delete_conv_section(obj){
    var user_deletion_email = obj.id;
    var email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        obj.parentNode.parentNode.innerHTML = "Deleting conv...";
        $(this).load("../header/message_content.php", {
            user_delete_email: user_deletion_email,
            my_use_email: email
        }, function(){
            obj.parentNode.parentNode.innerHTML = "Deleted";
            getListChart();
            getListChart_small_device();
        });
    });
}

// SEND MESSAGE
// ========================================================================
function sendMessage(obj){
    var datas = obj.id;
    var messages = obj.parentNode.previousElementSibling.lastChild.previousElementSibling.value;
    console.log(messages);
    if(messages == ""){
        obj.parentNode.previousElementSibling.style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("../header/message_content.php", {
                getArrayData: datas,
                getMessage: messages,
                messeger: email
            }, function(){
                obj.innerHTML = '<i class="fa fa-paper-plane bg-white"></i>';
                messages.innerHTML = "";
            });
        });
    }
}

function sendMessageExpand(obj){
    var datas = obj.id;
    var messages = obj.parentNode.previousElementSibling.lastChild.value;
    if(messages == ""){
        obj.parentNode.previousElementSibling.style.border = "2px solid red";
    }else{
        $(document).ready(function(){
            obj.style.display = 'none';
            obj.nextElementSibling.style.display = "block";
            var email = document.getElementById("hiddenEmail").value;
            $(this).load("../header/message_content.php", {
                getArrayData: datas,
                getMessage: messages,
                messeger: email
            }, function(){
                obj.style.display = 'block';
                obj.nextElementSibling.style.display = "none";
                obj.innerHTML = '<i class="fa fa-paper-plane bg-white"></i>';
                messages.innerHTML = "";
            });
        });
    }
}

function minumize_message(obj){
    var section = obj.parentNode.parentNode.parentNode;
    section.style.bottom = "-440px";
}
function maximize_message(obj){
    var section = obj.parentNode.parentNode.parentNode;
    section.style.bottom = "20px";
}
function close_message(obj){
    var section = obj.parentNode.parentNode.parentNode;
    section.style.display = "none";
}

// LIST DOW ALL VARID CHART
// =========================================================================================================================================
setInterval(() => {
    getListChart();
}, 1000);
function getListChart(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#list_down_li_chart").load("../header/message_content.php", {
            getChart: email
        });
    });
}

setInterval(() => {
    getListChart_small_device();
}, 1000);
function getListChart_small_device(){
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#tablist_nav").load("../header/message_content.php", {
            getChart: email
        });
    });
}

function search_new_message_user(){
    var seach_user = document.getElementById("search-user-message").value;
    var email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#user_picker_list").load("../header/message_content.php", {
            search_new_message: seach_user,
            searcher_email: email
        });
    });
}

function search_conv(obj){
    var seach_user = document.getElementById("search-conv").value;
    var email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $("#list_down_li_chat").load("../header/message_content.php", {
           search_conv: seach_user,
           user_email_conv: email
        });
    });
}