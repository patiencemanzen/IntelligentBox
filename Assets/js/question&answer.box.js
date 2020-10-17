// WHEN USER CLICK ON ASK QUESTION BTN
// ==============================================================================================================
function openQuestionEditor(){
    if(document.getElementById('questionEditor').style.display == 'none'){
        document.getElementById('questionEditor').style.display = 'block';
    }else{
        document.getElementById('questionEditor').style.display = 'none';
    }

    $(document).mouseup(function(e){
        var questionEditor = $("#questionEditor");
        if(!questionEditor.is(e.target) && questionEditor.has(e.target).length == 0){
            questionEditor.hide();
        }
    });
}


// WHEN USER TRIGGER INPUT FILE BTN
// ==============================================================================================================
function triggerInputFile_question(){
    document.getElementById("photo_question").click();
    previewPhoto_question();
}
function previewPhoto_question(){
    const inpFile = document.getElementById('photo_question');
    const imageContainer = document.getElementById('image_view');
    const previewImage = imageContainer.querySelector("#preview_image");
    const loader = document.getElementById("load_image");

    inpFile.addEventListener("change",function(){
        imageContainer.style.display = "block";
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                loader.style.display = "block";
                previewImage.setAttribute("src", this.result);
                loader.style.display = "none";
            });
            reader.readAsDataURL(file);
        }
    });
}

setInterval(() => {
    getProfileImage();
}, 1000);
function getProfileImage(){
    $(document).ready(function(){
        var requestProfileImage = document.getElementById("hiddenEmail").value;
        $("#profile_image").load("../Profile/profile_top_content.php",{
            getProfileImage: requestProfileImage
        });
    });
}

// COUNT RECIEVED QUESTION
// ===============================================================================================================
setInterval(() => {
    count_recieved_questions();
}, 1000);
function count_recieved_questions(){
    $(document).ready(function(){
        var requestAmmount = document.getElementById("hiddenEmail").value;
        $("#count_recieved_questions").load("question_answers.box.php", {
           count_recieved_question: requestAmmount
        });
    });
}

// select option
// ==================================================================================================================
select_option();
function select_option(){
    $(document).ready(function(){
        var requestOption = document.getElementById("hiddenEmail").value;
        $("#post_section").load("question_answers.box.php", {
            request_option: requestOption
        });
    });
}

// RETRIVE ALL QUESTION I'VE SPREADED
// =================================================================================================================
setInterval(() => {
    show_questions();
}, 1000);
function show_questions(){
    $(document).ready(function(){
        var my_questions = document.getElementById("hiddenEmail").value;
        $("#all_question_spreaded").load("question_answers.box.php", {
            request_my_question: my_questions
        });
    });
}

// like question
// =====================================================================================================================
function like_dislike(obj){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        var question_identity = obj.id;
        $(this).load("question_answers.box.php", {
            liker_email: user_email,
            que_id: question_identity
        });
    });
}

// function recieved que
// ======================================================================================================================
recieved_question();
function recieved_question(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#recieved_que").load("question_answers.box.php", {
            getRecieved_question: user_email
        });
    });
}

// submit answer
// =====================================================================================================================
function submit_reply(obj){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        var question_identity = obj.id;
        var answer = obj.parentNode.previousElementSibling.firstChild.value;
    
        if(answer == ""){
            obj.parentNode.previousElementSibling.style.border = "1.5px solid red";
        }else{
            obj.innerHTML = "Replying...";
            $(this).load("question_answers.box.php", {
                answer_email: user_email,
                question_id: question_identity,
                getAnswer: answer
            }, function(){
                obj.innerHTML = "Reply";
            });
        }
    });
}

function rel_question(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#rel-question").load("question_answers.box.php", {
            rel_question: user_email
        });
    });
}
function rel_question_recieved(){
    $(document).ready(function(){
        var user_email = document.getElementById("hiddenEmail").value;
        $("#rel_question_recieved").load("question_answers.box.php", {
            rel_question: user_email
        });
    });
}
rel_question();
rel_question_recieved();

function all_questions(){
    var user_email = document.getElementById("hiddenEmail").value;
    $(document).ready(function(){
        $(".single-element").load("question_answers.box.php",{
            gt_question_list: user_email
        });
    });
}
all_questions();


setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);
