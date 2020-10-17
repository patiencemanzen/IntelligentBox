function search_course(){
   var search_result = document.getElementById("search-course-result");
   var search_query = document.getElementById("search-course").value;

    if(search_query == ""){

    }else{
        search_result.style.display = "block";
        $(document).ready(function(){
            $("#execute_result").load("courses_process.php", {
                search_string_query: search_query
            });
        });
    }
}