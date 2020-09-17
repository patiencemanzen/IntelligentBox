// WHEN USER CHOOSE IMAGE FILE THEN DISPALY IT ON TO MAKE PREVIEW
// ==================================================================================================================
function triggerInputFile_post(){
    document.getElementById("post_photo").click();
    previewPostedImage();
}
function previewPostedImage(){
    const inpFile = document.getElementById('post_photo');
    const imageContainer = document.getElementById('when_photo');
    const previewImage = imageContainer.querySelector(".preview_photo");

    const video_preview = document.getElementById("when_video");
    const preview_video = video_preview.querySelector("#preview_video");

    inpFile.addEventListener("change",function(){
        const file = this.files[0];
        if(file.type == "video/mp4"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    imageContainer.style.display = "none";
                    video_preview.style.display = "block";
                    preview_video.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        }else if(file.type == "image/png"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    video_preview.style.display = "none";
                    imageContainer.style.display = "block";
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        }else if(file.type == "image/jpeg"){
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load",function(){
                    video_preview.style.display = "none";
                    imageContainer.style.display = "block";
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        }
    });
}


// SUBMIT POST THAT INPUTTED
// ============================================================================================================================================
// ============================================================================================================================================
function getPostLink(obj){
    obj.innerHTML = "Uploading...";
}

// hide php mesg
// ======================================================================================================================================
setTimeout(function(){
    $(".Display_error").fadeOut("slow");
},3000);
