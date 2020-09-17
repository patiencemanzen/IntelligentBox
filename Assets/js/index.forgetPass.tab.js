var currentTab = 0;     // Current tab is set to be the first tab (0)
showTab(currentTab);   // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("pwdForget");
    x[n].style.display = "block";

    // if(n == 0){
    //     console.log("we are on tab one");
    // }else if (n == 1){
    //     console.log("we are on tab 2");
    // }
}

function forgetStep(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("pwdForget");
   
    // Hide the current tab:
    x[currentTab].style.display = "none";

    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;

    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("pwdForget");
    y = x[currentTab].getElementsByTagName("input");

    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }

    // If the valid status is true, mark the step as finished and valid:
    return valid; // return the valid status
}
