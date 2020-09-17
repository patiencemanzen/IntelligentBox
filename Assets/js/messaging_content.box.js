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


// message pcking
// ============================================================================================================
const data_selected = []; // array data user selected

function display_me(obj){
    if(obj.checked){
       data_selected.push(obj.value);
       openConv();
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


function openConv(){
    document.getElementById("hold-messaging").style.display = "none";
    selected_user_length = data_selected.length; // count selected data
    
    $(document).ready(function(){
        var email = document.getElementById("hiddenEmail").value;
        $("#message_section_holder").load("../header/message_content.php", {
            data_inputted: data_selected,
            getUser: email
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

function expand_message_area(obj){    
    $(document).ready(function(){
        document.getElementById("message-area").style.display = "none";
        document.getElementById("message_section_holder").style.display = "none";
        var email = document.getElementById("hiddenEmail").value;
        $("#expanded_conv").load("../header/message_content.php", {
            expand_inputted: data_selected,
            getUser: email
        });
    });
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