// when user start typing into search form
function getSearch(){
    var searched = document.getElementById("search_dep").value;
    console.log(searched);
    $(document).ready(function(){
        $("#all_department").load("Course_content.php", {
            getSearch: searched
        });
    });
}