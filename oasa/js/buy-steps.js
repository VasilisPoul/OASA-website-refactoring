var currentTab = 0; // Current step-screen is set to be the first step-screen (0)
showTab(currentTab); // Display the current step-screen


function showTab(n) {
  // This function will display the specified step-screen of the form ...
  var x = document.getElementsByClassName("step-screen");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }

}

function nextPrev(n) {
  // This function will figure out which step-screen to display
  var x = document.getElementsByClassName("step-screen");
  // Exit the function if any field in the current step-screen is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current step-screen:
  x[currentTab].style.display = "none";
  // Increase or decrease the current step-screen by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("buy_form").submit();
    return false;
  }
  // Otherwise, display the correct step-screen:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("step-screen");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current step-screen:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }

  return valid; // return the valid status
}
