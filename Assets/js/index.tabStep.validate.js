var currTab = 0;     // Current tab is set to be the first tab (0)
showTabPane(currTab);   // Display the current tab

function showTabPane(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    x[2].style.display = "none";
    console.log("tab number" + n);
    //... and run a function that will display the correct step indicator:
    fixStepIndicators(n);
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");

    // Hide the current tab:
    x[currTab].style.display = "none";
    document.getElementsByClassName("step")[currentTab].className += " finish";

    // Increase or decrease the current tab by 1:
    currTab = currTab + n;

    // Otherwise, display the correct tab:
    showTabPane(currTab);
}

function validateFormSignup() {   
    var valid = true;
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicators(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}