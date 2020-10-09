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

slider = $('#autoWidth').lightSlider({
    item:5,
    loop:false,
    slideMove:1,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    responsive : [
        {
            breakpoint:1460,
            settings: {
                item:3,
                slideMove:1,
                slideMargin:50
              }
        },
        {
            breakpoint:760,
            settings: {
                item:2,
                slideMove:1,
                slideMargin:15
              }
        },
        {
            breakpoint:480,
            settings: {
                item:1,
                slideMove:1,
                slideMargin:25
              }
        }
    ]
});  
$('.prev_btn').click(function(){
    slider.goToPrevSlide();
});
$('.next_btn').click(function(){
    slider.goToNextSlide();
});