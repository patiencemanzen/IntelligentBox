// open all trades section when user click on all trades button
// end opening when user click again
function openTrade(){
    if(document.getElementById("all-trades").style.display == "block"){
        document.getElementById("all-trades").style.display = "none";
    }else{
        document.getElementById("all-trades").style.display = "block";
    }

    // when user loss target
    // =========================================================================
    $(document).mouseup(function(e){
        var all_trades = $("#all-trades");
        if(!all_trades.is(e.target) && all_trades.has(e.target).length == 0){
            all_trades.hide();
        }
    });
}

// when user start type in search input
// the result will auto display
function openSearch(){
    var inputValue = document.getElementById("search-everything").value;
    document.getElementById("search-pop").style.display = "block";
    document.getElementById("searched_query").innerHTML = inputValue;

    for(i=0;i<inputValue.length;i++){
        document.getElementById("countQuery").innerHTML = i;
    }

    // FETCH WHAT SEARCHED
    // ========================================================================
    $(document).ready(function(){
        $("#holderSearch").load("show_trades.php",{
            inputedSearch_query: inputValue
        });
    });

    // when user loss target
    // =========================================================================
    $(document).mouseup(function(e){
        var search_result = $("#search-pop");
        if(!search_result.is(e.target) && search_result .has(e.target).length == 0){
            search_result.hide();
        }
    });
}

// FUNCTION THAT SHOW TOP TRADES ON INDEX PAGE
// =================================================================================================================
setInterval(() => {
    showTrades ();
}, 2000);
function showTrades (){
    var indicator = "null";
    $(document).ready(function(){
        $("#show_top_trades").load("show_trades.php",{
           getIndicator: indicator
        });
    });
}

// FUNCTION SHOW ALL TRADES
// =================================================================================================================
setInterval(() => {
    show_all_trades();
}, 2000);
function show_all_trades(){
    var indicator = "null";
    $(document).ready(function(){
        $("#fetch_all_trades").load("show_trades.php",{
            varIndicator: indicator
        });
    });
}
