// WHEN USER TRY TO CHOOSE GROUP IMAGE
function trigger_group_image(){
    document.getElementById("group_image").click();
    preview_grou_image();
}
function preview_grou_image(){
    const inpFile = document.getElementById('group_image');
    const imageContainer = document.getElementById('image-preview-group');
    const previewImage = imageContainer.querySelector("#preview_grou_img");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.addEventListener("load",function(){
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
}

// WHEN USER UPLAOD GROUP
function upload_group(obj){
     var group_name = document.getElementById("group_name").value;
     var group_bio = document.getElementById("group_bio").value;
     if(group_name == ""){
         document.getElementById("groupName-input").style.border = "1.5px solid red";
     }else if(group_bio == ""){
         document.getElementById("textarea-bio-group").style.border = "1.5px solid red";
     }else{
         obj.innerHTML = "creating...";
         document.getElementById("create_group_form").submit();
     }
}